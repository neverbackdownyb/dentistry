@if($category)
    <div class="noo-product-item col-sm-4 service-item">
        <a href="{{route('page.category',
['slugCate'=> \Illuminate\Support\Str::slug($category->name),'id'=>$category->id])}}">
{{--            <img src="{{$category->image->first()->cat           egory_image_url ?? ''}}"/>--}}
            <div class="wrapper-name">
                <p class="name"><b>{{$category->name}}</b></p>
                <p class="desc">{{$category->name}}</p>
            </div>
        </a>
    </div>
@endif
