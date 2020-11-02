@if($product)
    <li class="noo-partner-item">
        <a href="{{route('page.productDetail',
['slugName'=>\Illuminate\Support\Str::slug($product->name),'id'=>$product->id])}}">
            <img src="{{$product->image_url}}" alt="{{$product->name}}"/>
            <img src="" alt=""/>
        </a>
    </li>
@endif
