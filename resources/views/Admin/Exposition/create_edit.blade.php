@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Exhibition: </h1>
@stop

@section('content')
    {{--<div class="row">--}}


    <div class="col-xs-8">
        <div class="box box-primary box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->Name_en : 'Add Exhibition' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('Exposition.update', $item->id)}}"
                      @else
                      action="{{ route('Exposition.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="category_id"></label>Category: <select id="category_id" name="category_id"
                                                                           class="form-control form-control-sm">
                            @if (isset($item))
                                value="{{$item->category_id}}"
                            @endif>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->Name_en}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="container">


                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Name1">Name Arabic</a></li>
                            <li><a data-toggle="tab" href="#Name2">Name English</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="Name1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="Name_ar">Name_ar: </label>
                                    <input required type="text" class="form-control " name="Name_ar" id="Name_ar"
                                           placeholder="Name_ar"
                                           required
                                           @if (isset($item))
                                           value="{{$item->Name_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="Name2" class="tab-pane fade">
                                <div class="form-group col-md-6">
                                    <label for="Name_en">Name_en: </label>
                                    <input required type="text" name="Name_en" class="form-control" id="Name_en"
                                           placeholder="Name_en"
                                           @if (isset($item))
                                           value="{{$item->Name_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="image">Image Upload: </label>
                        <input required type="file" name="image" class="form-control" id="image"
                               @if (isset($item))
                               value="{{$item->image}}">
                        <img src="{{asset('/images/News/')}}/{{$item->image}}" height="50" width="50">
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

                    <row>
                        <div class="form-group col-md-4">
                            <label>Start Date:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>

                                <label for="start_date"></label><input required type="date" id="start_date"
                                                                       name="start_date"
                                                                       class="form-control "
                                                                       value="{{\Carbon\Carbon::now()->format('Y-m-d')}}"
                                                                       min="{{\Carbon\Carbon::now()->format('Y-m-d')}}"
                                                                       max="2118-12-31">
                            </div>

                        </div>

                        <div class="form-group col-md-4">
                            <label>End Date:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>

                                <label for="date_end"></label><input required type="date" id="date_end"
                                                                     name="date_end"
                                                                     class="form-control "
                                                                     value="{{\Carbon\Carbon::now()->format('Y-m-d')}}"
                                                                     min="{{\Carbon\Carbon::now()->format('Y-m-d')}}"
                                                                     max="2118-12-31">
                            </div>

                        </div>
                    </row>
                    <row>
                        <div class="form-group col-md-6">
                            <label for="request_more">is activity: </label>
                            <select id="activity" name="activity"
                                    class="form-control form-control-sm">
                                @if (isset($item))
                                    value="{{$item->activity}}"
                                @endif>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </row>
                    <row>
                        <br>
                        <div class="form-group col-md-6">
                            .
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">@if (isset($item))
                                    Update
                                @else
                                    Save
                                @endif</button>
                        </div>
                    </row>

                </form>
            </div>
        </div>
    </div>

    {{--Exposition Cat:--}}

    {{--</div>--}}
@stop


@section('css')
    {{--<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js">--}}
@stop

@section('js')
    {{--<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"> </script>--}}

@stop