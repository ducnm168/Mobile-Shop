        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['delete-cart-submit'])){
                    $deleterecord = $Cart->deleteCart($_POST['item_id'],$_SESSION["user_id"]);
                }
            }

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST["submit"])){
                    $userid = $_SESSION["user_id"];
                    $itemid = $item['item_id'];
                    $quantity = $_POST['qty-input'];
                    $query = "UPDATE `cart` SET quantity = {$quantity} WHERE user_id={$userid} AND item_id={$itemid};";
                    mysqli_query($db->con, $query);
                }
            }

        ?>

        <!-- shopping cart -->
        <section id="cart" class="py-5">
            <div class="container-fluid w-75">
                <h5 class="text-danger font-size-20">Giỏ hàng</h5>
                <div class="row">
                    <div class="col-9">
                        <?php
                        foreach($product->getCartData($_SESSION["user_id"]) as $item):
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function($item){
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-2">
                                <img src="<?php echo $item['item_image'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <h5><?php echo $item['item_name'] ?></h5>
                                <small>by <?php echo $item['item_brand'] ?></small>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? 0 ?>"><i class="fas fa-angle-down"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? 0 ?>" name="qty-input" id="qty-input" class="qty-input border text-center px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? 0 ?>"><i class="fas fa-angle-up"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn text-danger px-3 border-right"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="font-size-20 text-danger">
                                    <span style="color:red" data-id="<?php echo $item['item_id'] ?? '0' ?>" class="product_price"><?php echo number_format( $item["item_last_price"], 0, '', '.' );?></span><span style="color:red"> ₫</span>
                                </div>
                            </div>
                        </div>
                        <!-- cart item -->
                        <?php
                        return $item['item_last_price'];
                        },$cart);
                        endforeach;
                        ?>
                    </div>
                    <div class="col-3">
                        <div class="sub-total border rounded text-center mt-2 p-3">
                            <h5 class="font-size-20">Tổng tiền tạm tính: <span style="color:red" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal):0 ?></span><span style="color:red" class="font-size-20"> ₫</span></h5>
                            <form method="post" action="payment.php">
                                <input type="hidden" data-id="<?php echo $item['item_id'] ?? 0 ?>" name="qty-input">
                                <button type="submit" class="btn btn-danger mt-3">TIẾN HÀNH ĐẶT HÀNG</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        