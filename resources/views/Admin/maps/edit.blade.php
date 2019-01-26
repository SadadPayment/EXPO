<?php
/**
 * Created by PhpStorm.
 * User: ppain
 * Date: 09/01/19
 * Time: 03:30 م
 */
?>
@extends('adminlte::page')

@section('title', 'Archive')

@section('content_header')
    <h1>Maps: </h1>
@stop

@section('content')
    {{--<div class="row">--}}


    <div class="col-xs-8">
        <div class="box box-primary box-solid">

            <div class="box-header with-border">
                <h3 class="box-title">
                    <span><i class="fa fa-edit"></i></span>
                    <span>{{ isset($item)? 'Edit ' . $item->id : 'Add Map' }}</span>
                </h3>
            </div>

            <div class="box-body ">

                <form method="post" enctype="multipart/form-data"
                      @if (isset($item)) action="{{route('Maps.update', $item->id)}}"
                      @else
                      action="{{ route('Maps.store')}}"
                        @endif>
                    @if(isset($item))
                        {{ method_field('PATCH') }}
                        @method('PATCH')
                    @endif
                    @csrf

                    <div class="form-group col-md-6">
                        <label for="id">Id: </label>
                        <input type="number" name="id" class="form-control" id="id"
                               @if (!isset($item))
                               required
                               @endif
                               @if (isset($item))
                               value="{{$item->id}}">
                        @endif
                    </div>


                    <div class="form-group col-md-6">
                        <label for="image">Image Upload: </label>
                        <input type="file" name="image" class="form-control" id="image"
                               @if (!isset($item))
                               required
                               @endif
                               @if (isset($item))
                               value="{{$item->image}}">
                        <img src="{{asset('/images/maps/')}}/{{$item->image}}" height="50" width="50">
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

    {{--Exposition Cat:--}}

    {{--</div>--}}
@stop


@section('css')
    {{--<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js">--}}
@stop

@section('js')
    {{--<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"> </script>--}}

@stop
