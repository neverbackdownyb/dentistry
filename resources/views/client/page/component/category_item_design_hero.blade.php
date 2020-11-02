<div class="simple-banner-left top_left"
     data-image="{{$category->image->first()->category_image_url}}">
    <div class="banner-left-content">
        <h3>{{$category->name}}</h3>
        <a class="custom_link" href="{{route('page.category',
['slugCate'=> \Illuminate\Support\Str::slug($category->name),'id'=>$category->id])}}">
            Xem tất cả<i class="fa fa-angle-right"></i></a>
    </div>
</div>
