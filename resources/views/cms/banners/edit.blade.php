@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Banner
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($banner, ['route' => ['cms.banners.update', $banner->id],
  'method' => 'patch','enctype'=>'multipart/form-data']) !!}

                    @include('cms.banners.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
