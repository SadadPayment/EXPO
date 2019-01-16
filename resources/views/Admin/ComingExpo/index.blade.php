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
    <h1>Coming Expo</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif($message = Session::get('field'))
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
    @endif
@stop

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Name Ar</th>
            <th scope="col">Name En</th>
            <th scope="col">Files</th>
            <th scope="col">edit\delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($ComingExpo as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Name_ar}}</td>
                <td>{{$item->Name_en}}</td>
                <td><a href="{{asset('/files/coming/')}}/{{$item->file_upload}}"><span class="fa fa-file"></span></a></td>

                <td>
                    <a class="btn btn-waring btn-xs" href="ComingExpo/{{$item->id}}/edit">
                        <i class="fa fa-edit"></i></a>
                    <form method="post" action="ComingExpo/{{$item->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop
