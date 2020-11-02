@if($banner->isNotEmpty())
    <div class="section wrapper-banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($banner->image as $image)
                    <div class="swiper-slide">
                        <a href="{{$image->url_redirect}}">
                            <img width="100%" class="img-banner" src="{{$image->banner_image_url}}">
                            <div class="banner-text">
                                @if($image->title)
                                    <p class="banner-title @if(\App\Libraries\Common::isMobile()) isMobile @endif">
                                        {{$image->title}}
                                    </p>
                                @endif
                                @if($image->desc)
                                    <p class="banner-desc @if(\App\Libraries\Common::isMobile()) isMobile @endif">
                                        <i>{{$image->desc}}</i>
                                    </p>
                                @endif
                                <div class="wrapper-btn">
                                    <p class="banner-btn btn-primary">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span>Xem chi tiết</span>
                                    </p>
                                </div>
                            </div>
                            {{--                            <div class="overlay"></div>--}}
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="btn-swiper btn-next">
                <i class="fa fa-angle-right @if(!\App\Libraries\Common::isMobile()) fa-2x @endif"
                   aria-hidden="true"></i>
            </div>
            <div class="btn-swiper btn-prev">
                <i class="fa fa-angle-left @if(!\App\Libraries\Common::isMobile()) fa-2x @endif" aria-hidden="true"></i>
            </div>
        </div>
    </div>
@endif
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.js_banner-item').on('hover', function () {
                $(this).css('cursor', 'pointer');
            });
            $('.js_banner-item').on('click', function () {
                var url = $(this).data('url');
                window.open(url);
            })
        })
    </script>
@endpush
