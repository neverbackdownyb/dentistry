<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', '* Tên:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_at', '* Bắt đầu:') !!}
    {!! Form::text('start_at', null, ['class' => 'form-control','id'=>'start_at','required']) !!}
</div>

<!-- End At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_at', '* Kết thúc:') !!}
    {!! Form::text('end_at', null, ['class' => 'form-control','id'=>'end_at','required']) !!}
</div>

<div class="clearfix"></div>

<div class="form-group js_wrapper-image">
    @if(isset($banner))
        @foreach($banner->image as $key=>$image)
            @include('cms.banners.ajax.image_item',['index'=>$key+1,'image'=>$image])
        @endforeach
    @else
        @include('cms.banners.ajax.image_item',['index'=>1])
    @endif
</div>
<div class="text-right col-sm-12">
    <span class="btn btn-warning" onclick="banner.addImage(this)">Thêm ảnh</span>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cms.banners.index') }}" class="btn btn-default">Hủy</a>
</div>
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            banner.__init();
        });
        var banner = {
            index: '{{(isset($banner) && $banner->image->isNotEmpty()) ? $banner->image->count()+1 : 2}}',
            __init: function () {
                $('#end_at').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: true,
                    sideBySide: true
                });
                $('#start_at').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: true,
                    sideBySide: true
                });
                $('.js_image-upload').on('change', function () {
                    let idx = $(this).data('idx');
                    $('.js_show-image-' + idx).remove();
                })
            },
            addImage: function () {
                $.ajax({
                    url: '{{route('banner.buildImageItem')}}',
                    type: 'POST',
                    data: {index: banner.index},
                    success: function (xhr) {
                        if (xhr.success) {
                            $('.js_wrapper-image').append(xhr.data);
                            banner.index++;
                        }
                    }
                })
            },
            removeImage: function (obj) {
                var index = $(obj).data('index');
                var imageId = $(obj).data('image-id');
                if (confirm('Bạn chắc chắn muốn xóa chứa?')) {
                    if ($('.js_image-item').length > 1) {
                        if (imageId > 0) {
                            $.ajax({
                                url: '{{route('banner.removeImage')}}',
                                data: {imageId},
                                type: 'DELETE',
                                success: function (xhr) {
                                    if (xhr.success) {
                                        $('.js_image-' + index).remove();
                                    } else {
                                        alert(xhr.message);
                                    }
                                }
                            })
                        } else {
                            $('.js_image-' + index).remove();
                        }
                    } else {
                        alert('Banner phải có ít nhất 1 ảnh!');
                    }
                }
            },
            changeUrl: function (obj) {
                var imageId = $(obj).data('image-id');
                var url = $(obj).val();
                if (imageId > 0 && url.length > 0) {
                    if (confirm('Bạn chắc chắn muốn thây đổi đường dẫn cho banner này chứ?')) {
                        $.ajax({
                            url: '{{route('banner.updateImage')}}',
                            data: {imageId, url},
                            type: 'post',
                            success: function (xhr) {
                                if (xhr.success) {
                                    $(obj).val(url);
                                } else {
                                    alert(xhr.message);
                                }
                            }
                        })
                    }
                }
            },
            changeSortDesc: function (obj) {
                var imageId = $(obj).data('image-id');
                var desc = $(obj).val();
                if (imageId > 0 && desc.length > 0) {
                    if (confirm('Bạn chắc chắn muốn thây đổi nội dung ngắn cho banner này chứ?')) {
                        $.ajax({
                            url: '{{route('banner.updateImage')}}',
                            data: {imageId, desc},
                            type: 'post',
                            success: function (xhr) {
                                if (xhr.success) {
                                    $(obj).val(desc);
                                } else {
                                    alert(xhr.message);
                                }
                            }
                        })
                    }
                }
            },
            changeTitle: function (obj) {
                var imageId = $(obj).data('image-id');
                var title = $(obj).val();
                if (imageId > 0 && title.length > 0) {
                    if (confirm('Bạn chắc chắn muốn thây đổi tiêu đề cho banner này chứ?')) {
                        $.ajax({
                            url: '{{route('banner.updateImage')}}',
                            data: {imageId, title},
                            type: 'post',
                            success: function (xhr) {
                                if (xhr.success) {
                                    $(obj).val(title);
                                } else {
                                    alert(xhr.message);
                                }
                            }
                        })
                    }
                }
            }
        }
    </script>
@endpush
