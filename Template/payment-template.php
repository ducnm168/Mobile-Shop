<?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['delete-cart-submit'])){
                    $deleterecord = $Cart->deleteCart($_POST['item_id']);
                }
            }
?>

<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $dateVal1 = date_create("Now");
    $dateVal2 = date_create("Now");
    date_add($dateVal1, date_interval_create_from_date_string("7 days"));
    date_add($dateVal2, date_interval_create_from_date_string("14 days"));
?>

<!-- make payment -->
<section id="payment" class="my-5 pb-5">
    <div class="container-fluid w-75 card p-0">
        <div class="bg-dark col-12 p-3 px-4">
            <span><i class="fas fa-shopping-cart text-white"></i></span>
            <span class="text-white">Thông tin đơn hàng</span>
        </div>
        <div class="row p-3">
            <div class="col-5 text-secondary">
                <h4 class="text-danger">Thông tin giao hàng :</h4>
                <form method="post">
                    <div class="form-row d-flex">
                        <label for="fullname">Email</label>
                        <input class="form-input card" type="text" disabled placeholder="<?php echo $_SESSION["email"] ?>">
                    </div>

                    <div class="form-row d-flex">
                        <label for="fullname">Tên</label>
                        <input class="form-input card" type="text" disabled placeholder="<?php echo $_SESSION["full_name"] ?>">
                    </div>

                    <div class="form-row d-flex">
                        <label for="phone">Số điện thoại</label>
                        <input class="form-input card" type="text" disabled placeholder="<?php echo $_SESSION["phone_number"] ?>"><br>
                    </div>
                    
                    <div class="form-row d-flex">
                        <label for="city">Địa chỉ</label>
                        <input class="form-input card" type="text" disabled placeholder="<?php echo $_SESSION["address"] ?>"><br>
                    </div>
                </form>
            </div>
            <div class="col-7 card rounded">
                <h4 class="text-danger">Thông tin đơn hàng :</h4>
                <div class="row mt-2">
                    <?php
                        foreach($product->getCartData($_SESSION["user_id"]) as $item):
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function($item){
                        ?>
                    <div class="col-2">
                        <img src="<?php echo $item['item_image'] ?>" style="height: 100px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-6 p-0">
                        <h5><?php echo $item['item_name'] ?></h5>
                        <small>by <?php echo $item['item_brand'] ?></small>
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? 0 ?>"><i class="fas fa-angle-down"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? 0 ?>" class="qty-input border text-center px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? 0 ?>"><i class="fas fa-angle-up"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn text-danger px-3 border-right"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <div>
                            <span class="product_price align-right m-4 d-flex justify-content-end">Giá: <?php echo number_format( $item["item_last_price"], 0, '', '.' );?> ₫</span>
                        </div>
                        <div>

                        </div>
                        <div>
                            <span class="align-right m-4 d-flex justify-content-end">Tạm tính:&nbsp;<p data-id="<?php echo $item['item_id'] ?? '0' ?>" class="product_price"><?php echo number_format( $item["item_last_price"], 0, '', '.' );?></p><span>&nbsp;₫</span></span>
                        </div>
                    </div>
                    <?php
                        return $item['item_last_price'];
                        },$cart);
                        endforeach;
                    ?>
                </div>
                <hr>
                <div class="col-12 d-flex justify-content-between">
                    <div class="px-4">
                        <h5>Tổng (VNĐ)</h5>
                    </div>
                    <div class="pb-1 px-4">
                        <span class="align-right m-2 d-flex justify-content-end font-size-20"><p id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal):0 ?></p><span>&nbsp;₫</span></span>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between">
                <div class="pt-4 text-danger">
                    Dự kiến ngày đến: <?php echo date_format($dateVal1, "d/m/Y")?> - <?php echo date_format($dateVal2, "d/m/Y")?>
                </div>
                <div class="bg-danger card p-2 mt-3">
                    <span class="px-5 text-white">Thanh toán</span>
                </div>
            </div>
        </div>
    </div>
</section>