<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{{ $category->parent_id }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $category->image }}</p>
</div>

<!-- Deep Level Field -->
<div class="form-group">
    {!! Form::label('deep_level', 'Deep Level:') !!}
    <p>{{ $category->deep_level }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $category->status }}</p>
</div>

<!-- Weight Field -->
<div class="form-group">
    {!! Form::label('weight', 'Weight:') !!}
    <p>{{ $category->weight }}</p>
</div>

