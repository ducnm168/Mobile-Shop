        <?php
            $item_id = $_GET['item_id'];
            foreach ($product->getData() as $item):
                if($item['item_id']==$item_id):
        ?>
        
        <!-- products -->
        <section id="products" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="text-center">
                            <img src="<?php echo $item['item_image']; ?>" alt="p" class="img-fluid">
                        </div>
                        <div class="form-row pt-4 font-size-16 d-flex">
                            <div class="col mx-1">
                                <button type="submit" class="btn btn-danger form-control">Mua ngay</button>
                            </div>
                            <div class="col mx-1">
                                <?php 
                                    if(in_array($item['item_id'],$Cart->getCardId($product->getData('cart')) ?? [])){
                                        echo '<button type="submit" name="top_sale_submit" disabled class="btn btn-success my-1 font-size-16 form-control">Trong giỏ hàng</button>';
                                    }else{
                                        echo '<button type="submit" name="top_sale_submit" class="btn btn-danger my-1 font-size-16 form-control">Thêm vào giỏ</button>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="font-size-20"><?php echo $item['item_name']; ?></h5>
                        <small>by <?php echo $item['item_brand']; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <hr>
                        <span style="color:red" class="font-size-20"><b><?php echo number_format( $item["item_last_price"], 0, '', '.' ); ?></b></span>
                        <span style="color:gray" class="font-size-14 text-decoration-line-through"><?php echo number_format( $item["item_price"], 0, '', '.' ); ?></span>
                        <hr>
                        <div class="color">
                            <h6>Chọn màu:</h6>
                            <div class="d-flex">
                                <div class="p-2 mx-2 bg-warning rounded-circle">
                                    <button class="btn"></button>
                                </div>
                                <div class="p-2 mx-2 bg-dark rounded-circle">
                                    <button class="btn"></button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="size my-4">
                            <div class="d-flex justify-content-between w-75">
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">1TB</button>
                                </div>
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">512GB</button>
                                </div>
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">256GB</button>
                                </div>
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">128GB</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="qty d-flex mt-4">
                            <div class="d-flex font-rale mt-3">
                                <button class="qty-down border bg-light" data-id="prod1"><i class="fas fa-angle-down"></i></button>
                                <input type="text" data-id="prod1" class="qty-input border text-center px-2 w-25 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 mt-5">
                    <h5>Thông tin sản phẩm</h5>
                    <hr>
                    <div>- Máy mới 100% , chính hãng Apple Việt Nam. X hiện là đại lý bán lẻ uỷ quyền iPhone chính hãng VN/A của Apple Việt Nam</div>
                    <div>- Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Lightning - Type C</div>
                    <div>- 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple : Điện Thoại Vui ASP (Apple Authorized Service Provider)</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8">
                        <div class="bg-light rounded border mb-3">
                        <h5 class="text-danger text-center mt-2"><b>ĐẶC ĐIỂM NỔI BẬT</b></h5>
                        <ul>
                            <li>Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display</li>
                            <li>Cấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic</li>
                            <li>Làm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động</li>
                            <li>Pin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến</li>
                        </ul>
                        </div>
                        <div class="mt-3"><b>iPhone 14 Pro Max</b> là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt.</div>
                        <div class="mt-3">Kích thước<b>màn hình iPhone 14 Pro Max</b> vẫn là 6.7 inch tuy nhiên phần “tai thỏ” đã được thay thế bằng một đường cắt hình viên thuốc. Apple gọi đây là <b>Dynamic Island</b> - nơi chứa camera Face ID và một đường cắt hình tròn thứ hai cho camera trước.</div>
                        <div class="mt-3">Ngoài ra, <b>iPhone 14 Pro Max</b> có tính năng màn hình <b>luôn bật hoạt động</b> (Always-on Display) với tiện ích màn hình khóa mới trên iOS 16. Người dùng có thể xem các thông tin như lời nhắc, sự kiện lịch và thời tiết mà không cần bật máy lên để xem. Thậm chí, có một trạng thái ngủ cho hình nền, trạng thái này sẽ làm tối hình nền để sử dụng ít pin hơn.</div>
                        <div class="mt-3"><b>iPhone 14 Pro Max được trang bị bộ vi xử lý Apple A16 Bionic</b>. Apple đã tập trung vào hiệu quả sử dụng năng lượng, màn hình và camera với con chip mới của mình. CPU sáu nhân bao gồm hai nhân hiệu suất cao sử dụng năng lượng thấp hơn 20% và bốn nhân tiết kiệm pin chỉ sử dụng một phần ba năng lượng so với chip của các đối thủ cạnh tranh.</div>
                        <img src="./assets/banner-product.png" class="img-fluid rounded mt-5" alt="banner">
                    </div>
                    <div class="col-4 border rounded py-2">
                        <h6>Thông số kĩ thuật</h6>
                        <div class="d-flex">
                            <ul class="child border rounded">
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Kích thước màn hình</p>
                                    <div>6.7 inches</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Công nghệ màn hình</p>
                                    <div>Super Retina XDR OLED</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Camera sau</p>
                                    <div>Camera chính: 48 MP, f/1.8, 24mm, OIS
                                        Camera góc siêu rộng: 12 MP, f/2.2, 13mm, 120˚
                                        Camera tele: 12 MP, f/2.8, 77mm, OIS, 3x optical zoom
                                        Cảm biến độ sâu TOF 3D LiDAR</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Camera trước</p>
                                    <div>Camera selfie: 12 MP, f/1.9, 23mm, PDAF</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Chipset</p>
                                    <div>Apple A16 Bionic 6 nhân</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Dung lượng RAM</p>
                                    <div>6 GB</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Bộ nhớ trong</p>
                                    <div>1TB</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Pin</p>
                                    <div>4.323 mAh</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Thẻ SIM</p>
                                    <div>2 SIM (nano-SIM và eSIM)</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Hệ điều hành</p>
                                    <div>iOS</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Độ phân giải màn hình</p>
                                    <div>2796 x 1290-pixel</div>
                                </li>
                                <li class="d-flex">
                                    <p style="min-width: 208px;">Tính năng màn hình</p>
                                    <div>120Hz, Always-On display, HDR, True Tone, Haptic Touch, 2,000,000:1, 2000 nits</div>
                                </li>
                            </ul>
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </section>

        <?php
            endif;
            endforeach;
        ?>