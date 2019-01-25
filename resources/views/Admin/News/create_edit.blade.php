@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>News: </h1>
@stop

@section('content')
    <div class="col-xs-12">
        <div class="box box-primary box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->name : 'Add News' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('News.update', $item->id)}}"
                      @else
                      action="{{ route('News.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="container">
                        <h2>Title Tabs</h2>
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Title1">Title Arabic</a></li>
                            <li><a data-toggle="tab" href="#Title2">Title English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="Title1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="name">Title_ar: </label>
                                    <input required type="text" class="form-control" name="Title_ar" id="Title_ar"
                                           placeholder="Title_ar"
                                           @if (isset($item))
                                           value="{{$item->Title_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="Title2" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="weight">Title_en: </label>
                                    <input required type="text" name="Title_en" class="form-control" id="Title_en"
                                           placeholder="Title_en"
                                           @if (isset($item))
                                           value="{{$item->Title_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h2>Topic Tabs</h2>
                        <ul class="nav nav-tabs">
                            {{--<li class="active"><a data-toggle="tab" href="#home">Home</a></li>--}}
                            <li><a data-toggle="tab" href="#menu1">Topic Arabic</a></li>
                            <li><a data-toggle="tab" href="#menu2">Topic English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="topic_ar">Topic Arabic: </label>
                                    <textarea required name="topic_ar" class="form-control" rows="3"
                                              placeholder="Topic Arabic ...">
                                        @if (isset($item))
                                            {{$item->topic_ar}}
                                        @endif
                                    </textarea>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="topic_en">Topic English: </label>
                                    <textarea name="topic_en" class="form-control" rows="3"
                                              placeholder="Topic English ...">
                                           @if (isset($item))
                                            {{$item->topic_en}}
                                        @endif
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image">Image Upload: </label>
                        <input type="file" name="image" class="form-control" id="image"
                               @if (!isset($item))
                               required
                               @endif
                               @if (isset($item))
                               value="{{$item->image}}">
                        <img src="{{asset('/images/News/')}}/{{$item->image}}" height="50" width="50">

                        {{--<img src="{{$item->image}}" height="20" width="20">--}}
                        @endif
                        {{--<p class="help-block">elp tExample block-level hext here.</p>--}}
                    </div>
                    <div class="form-group">
                        <label for="is_notification">is notification: </label>
                        <select id="is_notification" name="is_notification"
                                class="form-control form-control-sm">
                            @if (isset($item))
                                value="{{$item->is_notification}}"
                            @endif>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">@if (isset($item))
                            Update
                        @else
                            Add
                        @endif</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    {{--<script> console.log('Hi!'); </script>--}}
@stop