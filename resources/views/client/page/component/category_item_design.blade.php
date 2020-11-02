<div class="noo-inner">
    <a href="{{route('page.category',
['slugCate'=> \Illuminate\Support\Str::slug($category->name),'id'=>$category->id])}}">
        <img src="{{$category->image->first()->category_image_url}}" alt=""/>
    </a>
    <div class="simple-product-entry">
        <h3><a href="{{route('page.category',
['slugCate'=> \Illuminate\Support\Str::slug($category->name),'id'=>$category->id])}}">
                {{$category->name}}</a></h3>
        <p class="content-extra">TRỌN GÓI THI CÔNG</p>
    </div>
</div>
