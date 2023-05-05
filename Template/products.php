        <?php
        $brand = array_map(function ($pro){return $pro["item_brand"];},$product_shuffle);
        $unique = array_unique($brand);
        sort($unique);
        ?>

        <!-- products -->
        <section id="products">
            <div class="container">
                <h4 class="font-text font-size-20"><b>TẤT CẢ ĐIỆN THOẠI</b></h4>
                <div id="filters" class="button-group text-end">
                    <?php
                    array_map(function ($brand){
                        printf('<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
                    },$unique);
                    ?>
                    <button class="btn is-checked" data-filter="*">Tất cả</button>
                </div>

                <div class="grid">
                    <?php array_map(function($item){ ?>
                    <div class="grid-item <?php echo $item["item_brand"]; ?> card" style="width: 250px;">
                        <div class="item py-2 text-center">
                            <div class="product font-rale">
                            <a href="#"><img src="<?php echo $item["item_image"]; ?>" alt="product" style="width: 200px;"></a>
                            <div >
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
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Thêm vào giỏ</button>
                            </div>
                          </div>  
                        </div>
                    </div>
                    <?php },$product_shuffle) ?>
                </div>
        </section>
