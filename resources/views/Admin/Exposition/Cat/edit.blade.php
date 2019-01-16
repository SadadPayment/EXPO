<?php
/**
 * Created by PhpStorm.
 * User: ppain
 * Date: 08/01/19
 * Time: 02:51 م
 */
?>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Exposition: </h1>
@stop

@section('content')

    <div class="">
        <div class="box box-danger box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->Name_en : 'Add Category of Exposition' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('CatExposition.update', $item->id)}}"
                      @else
                      action="{{ route('CatExposition.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="container">
                        <ul class="nav nav-tabs col-md-4">
                            <li><a data-toggle="tab" href="#CatName1">Name Arabic</a></li>
                            <li><a data-toggle="tab" href="#CatName2">Name English</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="CatName1" class="tab-pane fade">
                                <div class="form-group col-md-4">
                                    <label for="Name_ar">Name_ar: </label>
                                    <input type="text" class="form-control " name="Name_ar" id="Name_ar"
                                           placeholder="Name_ar"
                                           @if (isset($item))
                                           value="{{$item->Name_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="CatName2" class="tab-pane fade">
                                <div class="form-group col-md-4">
                                    <label for="Name_en">Name_en: </label>
                                    <input type="text" name="Name_en" class="form-control" id="Name_en"
                                           placeholder="Name_en"
                                           @if (isset($item))
                                           value="{{$item->Name_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <ul class="nav nav-tabs col-md-4">
                            <li><a data-toggle="tab" href="#Description1">Description Arabic</a></li>
                            <li><a data-toggle="tab" href="#Description2">Description English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="Description1" class="tab-pane fade">
                                <div class="form-group col-md-4">
                                    <label for="description_ar">الشرح بالعربي: </label>
                                    <input type="text" class="form-control" name="description_ar"
                                           id="description_ar"
                                           placeholder="الشرح بالعربي"
                                           @if (isset($item))
                                           value="{{$item->description_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="Description2" class="tab-pane fade">
                                <div class="form-group col-md-4">
                                    <label for="description_en">Description by English: </label>
                                    <input type="text" name="description_en" class="form-control"
                                           id="description_en"
                                           placeholder="Description by English"
                                           @if (isset($item))
                                           value="{{$item->description_en}}"
                                            @endif>
                                </div>
                            </div>
                        </div>
                    </div>


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



@stop


@section('css')
    {{--<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js">--}}
@stop

@section('js')
    {{--<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"> </script>--}}

@stop