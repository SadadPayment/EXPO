@extends('adminlte::page')

@section('title', 'Exhibitors')

@section('content_header')
    <h1>Exhibitors: </h1>
@stop

@section('content')
    <div class="col-xs-12">
        <div class="box box-primary box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->Name_ar : 'Add News' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('Subscribers.update', $item->id)}}"
                      @else
                      action="{{ route('Subscribers.store')}}"
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
                        <img src="{{asset('/images/Subscribers/')}}/{{$item->image}}" height="50" width="50">

                        {{--<img src="{{$item->image}}" height="20" width="20">--}}
                        @endif
                        {{--<p class="help-block">elp tExample block-level hext here.</p>--}}
                    </div>

                    <div class="form-group col-md-6">
                        <label for="halls">Halls: </label>
                        <select id="halls" name="halls" class="form-control form-control-sm">
                            @if (isset($item))
                                {{--value="{{$item->halls}}"--}}
                                <option value="{{$item->halls}}">
                                    {{--@endif>--}}

                                    {{--@if($item->halls)--}}
                                    {{$item->halls}}
                                    {{--@else--}}
                                    {{--null--}}
                                    @endif
                                </option>
                                <option value="halls_one">halls_one</option>
                                <option value="halls_two">halls_two</option>
                                <option value="halls_three">halls_three</option>
                                <option value="halls_fore">halls_fore</option>
                                <option value="halls_five">halls_five</option>
                                <option value="halls_six">halls_six</option>
                                <option value="out">out</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="website">Website: </label>
                        <input required type="text" name="website" class="form-control" id="website"
                               placeholder="examples https://sadad.com"
                               @if (isset($item))
                               value="{{$item->website}}"
                                @endif>
                    </div>

                    {{--Producrt--}}

                    <div class="container">
                        {{--<h2>Title Tabs</h2>--}}
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#product1">Product Arabic</a></li>
                            <li><a data-toggle="tab" href="#product2">Product English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="product1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="product_ar">product Ar: </label>
                                    <input required type="text" class="form-control" name="product_ar" id="product_ar"
                                           placeholder="product_ar"
                                           @if (isset($item))
                                           value="{{$item->product_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="product2" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="product_en">product En: </label>
                                    <input required type="text" name="product_en" class="form-control" id="product_en"
                                           placeholder="product_en"
                                           @if (isset($item))
                                           value="{{$item->product_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Product End--}}


                    {{--activity--}}

                    <div class="container">
                        {{--<h2>Title Tabs</h2>--}}
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#activity1">Activity Arabic</a></li>
                            <li><a data-toggle="tab" href="#activity2">Activity English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="activity1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="activity_ar">Activity Ar: </label>
                                    <input required type="text" class="form-control" name="activity_ar" id="activity_ar"
                                           placeholder="activity_ar"
                                           @if (isset($item))
                                           value="{{$item->activity_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="activity2" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="activity_en">Activity En: </label>
                                    <input required type="text" name="activity_en" class="form-control" id="activity_en"
                                           placeholder="activity_en"
                                           @if (isset($item))
                                           value="{{$item->activity_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--activity Ends--}}
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