@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
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
            <th scope="col">Image</th>
            <th scope="col">edit\delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($Exposition as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Name_ar}}</td>
                <td>{{$item->Name_en}}</td>
                <td><img src="{{asset('/images/Exposition/')}}/{{$item->image}}" height="50" width="50"></td>

                <td>
                    <a class="btn btn-waring btn-xs" href="Exposition/{{$item->id}}/edit">
                        <i class="fa fa-edit"></i></a>
                    <form method="post" action="Exposition/{{$item->id}}">
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