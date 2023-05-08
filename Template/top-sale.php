        <?php
            shuffle($product_shuffle);

            //request method post
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['top_sale_submit'])){
                    // call method add to cart
                    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
                }
            }
        ?>
        <!-- top sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-text font-size-20"><b>ĐIỆN THOẠI NỔI BẬT NHẤT</b></h4>
                <hr>
                <!-- owl -->
                <div class="owl-carousel owl-theme">        
                    <?php foreach($product_shuffle as $item) {
                        if($item["item_last_price"] > 20000000){?>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s','product.php',$item["item_id"]); ?>"><img src="<?php echo $item["item_image"]; ?>" alt="product"></a>
                            <div class="text-center">
                                <h6><?php echo $item["item_name"]; ?></h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2"><?php echo number_format( $item["item_last_price"], 0, '', '.' );?> ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through"><?php echo number_format( $item["item_price"], 0, '', '.' );?> ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="user_id" value="1">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                    <?php 
                                        if(in_array($item['item_id'],$Cart->getCardId($product->getData('cart')) ?? [])){
                                            echo '<button type="submit" name="top_sale_submit" disabled class="btn btn-success my-1 font-size-12">Trong giỏ hàng</button>';
                                        }else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-danger my-1 font-size-12">Thêm vào giỏ</button>';
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>              
                    <?php }} ?>
                </div>
                <hr>
            </div>
        </section>
