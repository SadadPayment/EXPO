@extends('adminlte::page')

@section('title', 'Exposition Category')

@section('content_header')
    <h1>Dashboard</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@stop

@section('content')
    <a href="CatExposition/create" class="btn btn-facebook"><span class="ion ion-android-add"></span> </a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Name Ar</th>
            <th scope="col">Name En</th>
            <th scope="col">Create At</th>
            <th scope="col">edit\delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Name_ar}}</td>
                <td>{{$item->Name_en}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a class="btn btn-waring btn-xs" href="CatExposition/{{$item->id}}/edit">
                        <i class="fa fa-edit"></i></a>
                    <form method="post" action="CatExposition/{{$item->id}}">
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