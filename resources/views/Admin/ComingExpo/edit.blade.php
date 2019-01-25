<?php
/**
 * Created by PhpStorm.
 * User: ppain
 * Date: 09/01/19
 * Time: 03:30 م
 */
?>
@extends('adminlte::page')

@section('title', 'Coming Expo')

@section('content_header')
    <h1>Coming Expo: </h1>
@stop

@section('content')
    {{--<div class="row">--}}


    <div class="col-xs-8">
        <div class="box box-primary box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->Name_en : 'Add Coming Expo' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('ComingExpo.update', $item->id)}}"
                      @else
                      action="{{ route('ComingExpo.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="container">


                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Name1">Name Arabic</a></li>
                            <li><a data-toggle="tab" href="#Name2">Name English</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="Name1" class="tab-pane fade">
                                <div class="form-group">
                                    <label for="Name_ar">Name Ar: </label>
                                    <input required type="text" class="form-control " name="Name_ar" id="Name_ar"
                                           placeholder="Name_ar"
                                           @if (isset($item))
                                           value="{{$item->Name_ar}}"
                                            @endif>
                                </div>
                            </div>

                            <div id="Name2" class="tab-pane fade">
                                <div class="form-group col-md-6">
                                    <label for="Name_en">Name En: </label>
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
                        <label for="file_upload">File Upload: </label>
                        <input type="file" name="file_upload" class="form-control" id="file_upload"
                               @if (!isset($item))
                               required
                               @endif
                               @if (isset($item))
                               value="{{$item->file_upload}}">
                        <a href="{{asset('/files/coming/')}}/{{$item->file_upload}}"><span class="fa fa-file"></span>
                        </a>
                        @endif
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
@stop


@section('css')
    {{--<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js">--}}
@stop

@section('js')
    {{--<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"> </script>--}}

@stop
