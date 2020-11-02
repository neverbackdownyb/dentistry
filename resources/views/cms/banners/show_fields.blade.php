<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $banner->name }}</p>
</div>

<!-- Start At Field -->
<div class="form-group">
    {!! Form::label('start_at', 'Start At:') !!}
    <p>{{ $banner->start_at }}</p>
</div>

<!-- End At Field -->
<div class="form-group">
    {!! Form::label('end_at', 'End At:') !!}
    <p>{{ $banner->end_at }}</p>
</div>

