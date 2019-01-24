@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sponsors: </h1>
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
                      @if (isset($item)) action="{{route('Sponsors.update', $item->id)}}"
                      @else
                      action="{{ route('Sponsors.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="container">
                        {{--<h2>Title Tabs</h2>--}}
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Title1">Name Arabic</a></li>
                            <li><a data-toggle="tab" href="#Title2">Name English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="Title1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="Name_ar">Name_ar: </label>
                                    <input required type="text" class="form-control" name="Name_ar" id="Name_ar"
                                           placeholder="Name_ar"
                                           @if (isset($item))
                                           value="{{$item->Name_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="Title2" class="tab-pane fade">
                                <div class="form-group">
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

                    <div class="form-group">
                        <label for="image">Image Upload: </label>
                        <input type="file" name="image" class="form-control" id="image"
                               @if (isset($item))
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
                        <label for="email">Email: </label>
                        <input required type="email" name="email" class="form-control" id="email"
                               placeholder="Email"
                               @if (isset($item))
                               value="{{$item->email}}"
                                @endif>
                    </div>


                    <div class="form-group">
                        <label for="phone">phone: </label>
                        <input required type="text" name="phone" class="form-control" id="phone"
                               placeholder="phone"
                               @if (isset($item))
                               value="{{$item->phone}}"
                                @endif>
                    </div>

                    <div class="form-group">
                        <label for="contact">country: </label>
                        <input required type="text" name="country" class="form-control" id="country"
                               placeholder="country"
                               @if (isset($item))
                               value="{{$item->country}}"
                                @endif>
                    </div>

                        <div class="form-group">
                            <label for="contact">fax: </label>
                            <input required type="text" name="fax" class="form-control" id="fax"
                                   placeholder="fax"
                                   @if (isset($item))
                                   value="{{$item->fax}}"
                                    @endif>
                        </div>


                        <div class="form-group">
                            <label for="address">address: </label>
                            <input required type="text" name="address" class="form-control" id="address"
                                   placeholder="address"
                                   @if (isset($item))
                                   value="{{$item->address}}"
                                    @endif>
                        </div>

                    <button type="submit" class="btn btn-primary">@if (isset($item))
                            Update
                        @else
                            Save
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