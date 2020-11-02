@if($product)
    <div class="noo-product-item {{!isset($colsm) ? 'col-md-4' : $colsm}} col-sm-6">
        <div class="noo-product-inner">
            <h3><a href="{{route('page.productDetail',
['slugName'=>\Illuminate\Support\Str::slug($product->name),'id'=>$product->id])}}">{{$product->name}}</a></h3>
            <div class="noo-product-thumbnail">
                <div class="noo-product-slider">
                    @if($product->images->isNotEmpty())
                        @foreach($product->images as $image)
                            <a href="{{route('page.productDetail',
['slugName'=>\Illuminate\Support\Str::slug($product->name),'id'=>$product->id])}}">
                                <img src="{{$image->product_image_url}}" alt=""/>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            @if($product->price_sale > 0)
                <div class="price">
                    <ins>{{\App\Libraries\Common::formatCurrency($product->price_sale)}}</ins>
                </div>
            @endif
        </div>
    </div>
@endif
