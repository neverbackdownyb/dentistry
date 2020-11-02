<div class="js_image-item js_image-{{$index}}"
     style="border: 1px dashed #ccc; display: flex; padding: 15px; margin-bottom: 15px">
    <div class="col-sm-6">
        {!! Form::label('images', '* Ảnh:') !!}
        {!! Form::file('image['.$index.'][file]',
['class' => 'form-control js_image-upload','required'=>isset($image) ? false:true,'accept'=>"image/*",'data-idx'=>$index]) !!}
        @if(isset($image))
            <div class="js_show-image-{{$index}}">
                <img class="col-sm-12" style="width: 100%; max-height: 200px; margin: 10px 0"
                     src="{{$image->bannerImageUrl}}"/>
            </div>
        @endif
    </div>
    <div class="form-group col-sm-1">
        {!! Form::label('', 'Xóa') !!}
        <br/>
        <p class="btn-danger btn" data-index="{{$index}}" data-image-id="{{isset($image) ? $image->id : 0}}"
           onclick="banner.removeImage(this)">
            <i class="fa fa-trash"></i>
        </p>
    </div>
</div>
<div class="clearfix"></div>
