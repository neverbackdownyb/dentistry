<header class="noo-header fixed_top header-1 js_header js_fixed">
    <div class="noo-topbar">
        <div class="container">
            <ul class="pull-left noo-topbar-left">
                <li>
                    <a href="mailto:nhakhoathanhtam@gmail.com"><i class="fa fa-envelope"></i>nhakhoathanhtam@gmail.com</a>
                </li>
                <li>
                    <a href="tel:0974016685"><i class="fa fa-phone"></i>0974.016.685</a>
                </li>
            </ul>
            <ul class="pull-right noo-topbar-right">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a class="noo-search" href="#">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="noo-navbar-header">
                    <div class="navbar-logo">
                        <a href="{{--{{route('page.home')}}--}}" class="custom-logo-link">
                            <img width="80px" src="{{asset('assets/images/logo_2.jpg')}}" alt="Logo"/>
                        </a>
                        <button data-target=".nav-collapse" class="btn-navbar noo_icon_menu icon_menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <nav class="noo-main-menu">
                    @if($categories->isNotEmpty())
                        <ul class="nav-collapse navbar-nav">
                            @foreach($categories as $category)
                                <?php
                                $href = $category->children->isNotEmpty() ? '#' :/* route('page.category',
                                    ['slugCate'=> \Illuminate\Support\Str::slug($category->name),'id'=>$category->id])*/222
                                ?>
                                <li class="menu-item-has-children">
                                    <a href={{$href}}>{{$category->name}}
                                        @if($category->children->isNotEmpty())
                                            <i class="fa fa-caret-right"></i>
                                        @endif
                                    </a>
                                    @if($category->children->isNotEmpty())
                                        <ul class="sub-menu">
                                            @foreach($category->children as $children)
                                                <li><a href="{{route('page.category',
['slugCate'=> \Illuminate\Support\Str::slug($children->name),'id'=>$children->id])}}">
                                                        {{$children->name}}
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                            @if(!empty($buttonCustomize))
                                <li><a href="{{$buttonCustomize->url}}">{{$buttonCustomize->label}}</a></li>
                            @else
                                <li><a href="{{--{{route('page.contact')}}--}}">Liên Hệ</a></li>
                            @endif
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
    </div>
    <div class="search-header" style="display: none;">
        <div class="remove-form"></div>
        <div class="container">
            {!! Form::open([/*'route' => 'page.search'*/3232,'enctype'=>'multipart/form-data','class'=>'form-horizontal noo-umbra-searchform']) !!}
            <label class="note-search">Tìm kiếm sản phẩm</label>
            <input type="search" name="s" class="form-control" value="" placeholder="Nhập tên sản phẩm..." required/>
            <button type="submit" class="noo-search-submit"><i class="icon_search"></i></button>
            {!! Form::close() !!}
        </div>
    </div>
</header>
@if(\App\Libraries\Common::isMobile())
    <div style="height: 165px"></div>
@else
    <div style="height: 143px"></div>
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
