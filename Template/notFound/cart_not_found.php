        <!-- shopping cart -->
        <section id="cart" class="py-5">
            <div class="container-fluid w-75">
                <h5 class="text-danger font-size-20">Giỏ hàng</h5>
                <div class="row">
                    <div class="col-9">
                        <!-- empty cart -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-12 text-center py-2">
                            <img src="./assets/empty_cart.png" alt="bannerads2" height="200px" class=""img-fluid>
                                <p class="font-size-16 text-black-50">Giỏ hàng trống</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="sub-total border rounded text-center mt-2 p-3">
                            <h5 class="font-size-20">Tổng tiền tạm tính: <span style="color:red" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal):0 ?></span><span style="color:red" class="font-size-20"> ₫</span></h5>
                            <button type="submit" class="btn btn-danger mt-3">TIẾN HÀNH ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        