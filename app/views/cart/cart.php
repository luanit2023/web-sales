<div class="container">
<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <h1 class="text-center heading">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered center">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="img-cart">
                                        <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/sanpham1.png" class="hinhdaidien">
                                    </div>
                                </td>
                                <td>Apple Ipad 4 Wifi 16GB</td>
                                <td class="text-right">2</td>
                                <td class="text-right">11,800,000.00</td>
                                <td class="text-right">23,600,000</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="img-cart">
                                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/sanpham2.png" class="hinhdaidien">
                                    </div>
                                </td>
                                <td>Nokia Asha 311</td>
                                <td class="text-right">4</td>
                                <td class="text-right">2,699,000.00</td>
                                <td class="text-right">1,0796,000</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_2" data-sp-ma="6" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="img-cart">
                                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/sanpham3.png" class="hinhdaidien">
                                    </div>
                                </td>
                                <td>Apple iPhone 5 16GB White</td>
                                <td class="text-right">8</td>
                                <td class="text-right">1,4990,000.00</td>
                                <td class="text-right">119,920,000</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_3" data-sp-ma="4" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="../index.html" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Quay
                        về trang chủ</a>
                    <a href="checkout.html" class="btn btn-primary btn-md"><i
                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</a>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>
</div>