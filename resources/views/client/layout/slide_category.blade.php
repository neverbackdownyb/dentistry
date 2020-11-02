@if($banner->isNotEmpty())
    <div class="wrapper-collection">
        <div class="title">
            <p>Đóng đồ theo mấu</p>
            <p>Trọn gói thi công</p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà bếp</span>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà ăn</span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà tắm</span>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà vs</span>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà bếp</span>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà ăn</span>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà tắm</span>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="http://timnhakhoa.com/wp-content/uploads/2019/03/icon-implant.png">
                        <span>Nhà vs</span>
                    </a>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="btn-swiper btn-next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="btn-swiper btn-prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <!-- Swiper -->
    <input type="hidden" name="is_mobile" value="{{\App\Libraries\Common::isMobile()}}"/>
@endif

