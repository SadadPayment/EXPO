@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
    <h1>Setting: </h1>
@stop

@section('content')
    {{--<div class="row">--}}


    <div class="col-xs-8">
        <div class="box box-primary box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->title_en : 'Setting' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('Setting.update', $item->id)}}"
                      @else
                      action="{{ route('Setting.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf


                    <div class="form-group col-md-6">
                        <label for="image">Image Upload: </label>
                        <input required type="file" name="image" class="form-control" id="image"
                               @if (isset($item))
                               value="{{$item->image}}">
                        <img src="{{asset('/images/Setting/')}}/{{$item->image}}" height="50" width="50">
                        @endif
                    </div>


                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Title1">title Arabic</a></li>
                            <li><a data-toggle="tab" href="#Title2">title English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="Title1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="Name_ar">Title Ar: </label>
                                    <input required type="text" class="form-control" name="title_ar" id="title_ar"
                                           placeholder="title ar"
                                           @if (isset($item))
                                           value="{{$item->title_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="Title2" class="tab-pane fade">
                                <div class="form-group col-md-6">
                                    <label for="Name_en">Title En: </label>
                                    <input required type="text" name="title_en" class="form-control" id="title_en"
                                           placeholder="Title by en"
                                           @if (isset($item))
                                           value="{{$item->title_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">@if (isset($item))
                                Update
                            @else
                                Save
                            @endif</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--Setting Cat:--}}

    {{--</div>--}}
@stop


@section('css')
    {{--<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js">--}}
@stop

@section('js')
    {{--<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"> </script>--}}

@stop