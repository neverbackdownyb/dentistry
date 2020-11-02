@extends('client.master')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/home_custom.css')}}">
@endsection
@section('content')
    @include('client.layout.header',['categories'=>$categories ?? collect([])])
    <div id="main">

        @include('client.layout.banner_home',['banner'=>$banner])
        @if($categories->isNotEmpty())
            <div class="section pt-5 pb-8 focus-bgw">
                <div class="row mr-0">
                    <div class="col-sm-12 pr-0">
                        <div class="noo-section-title">
                            <h3>
                                <span>DỊCH VỤ CỦA CHÚNG TÔI</span>
                            </h3>
                            <p>SẢN PHẨM NỘI THẤT NỔI BẬT ĐƯỢC CUNG CẤP BỞI S-INTERIOR</p>
                        </div>
                        <div class="noo-product-grid">
                            @foreach($categories as $key=>$category)
                                @if($key < 3)
                                    @include('client.page.component.category_item',['category'=>$category])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if($highlightCategories->isNotEmpty())
            <div class="section focus-bgw">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 p-0">
                            <div class="noo-section-title pb-3">
                                <h3>
                                    <span>Bộ sưu tập</span>
                                </h3>
                                <p>SẢN PHẨM NỘI THẤT NỔI BẬT ĐƯỢC CUNG CẤP BỞI S-INTERIOR</p>
                                <div>
                                    <a class="btn btn-primary mt-1">Xem thêm</a>
                                </div>
                            </div>
                            <div class="noo-simple-product banner_right">
                                <?php
                                $categoryHero = $highlightCategories->first();
                                $categories = $highlightCategories->where('id', '<>', $categoryHero->id);
                                ?>
                                @include('client.page.component.category_item_design_hero',['category'=>$categoryHero])
                                <div class="noo-simple-content">
                                    @foreach($categories as $category)
                                        @include('client.page.component.category_item_design',['category'=>$category])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @include('client.layout.slide_category',['banner'=>$banner])
        {{--        @if($productBlockDesign->isNotEmpty())--}}
        {{--            <div class="section section-partner">--}}
        {{--                <div class="container-fluid">--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-sm-12  @if(\App\Libraries\Common::isMobile()) container @else pr-8 pl-8 @endif">--}}
        {{--                            <div class="noo-section-title mb-4">--}}
        {{--                                <h3><span>Ý TƯỞNG THIẾT KẾ</span></h3>--}}
        {{--                            </div>--}}
        {{--                            <div class="noo-partner-wrap">--}}
        {{--                                <ul class="noo-partner" data-item="6">--}}
        {{--                                    @foreach($productBlockDesign as $product)--}}
        {{--                                        @include('client.page.component.product_item',['product'=>$product])--}}
        {{--                                    @endforeach--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        @endif--}}
        @include('client.page.component.partner')

        {{--        @include('client.page.component.contact_us')--}}
    </div>
@endsection
@push('scripts')
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        var isMobile = $('input[name=is_mobile]').val();
        new Swiper('.wrapper-collection .swiper-container', {
            slidesPerView: parseInt(isMobile) === 1 ? 3 : 6,
            spaceBetween: parseInt(isMobile) === 1 ? 15 : 30,
            freeMode: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.wrapper-collection .btn-next',
                prevEl: '.wrapper-collection .btn-prev',
            },
        });
        new Swiper('.wrapper-banner .swiper-container', {
            freeMode: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.wrapper-banner .btn-next',
                prevEl: '.wrapper-banner .btn-prev',
            },
        });
    </script>
@endpush
