        <?php
            $product_shuffle = $product->getData();
        ?>
        <!-- top sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-text font-size-20"><b>ĐIỆN THOẠI NỔI BẬT NHẤT</b></h4>
                <hr>
                <!-- owl -->
                <div class="owl-carousel owl-theme">        
                    <?php foreach($product_shuffle as $item) {?>           
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="<?php echo $item["item_image"] ?>" alt="product"></a>
                            <div class="text-center">
                                <h6>iPhone 14 Pro Max</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">41.790.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">45.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>              
                    <?php } ?>
                </div>
                <hr>
            </div>
        </section>
