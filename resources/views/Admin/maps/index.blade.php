@extends('adminlte::page')

@section('title', 'Maps')

@section('content_header')
    <h1>Maps</h1>
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
            <th scope="col">image</th>
            <th scope="col">Edit/delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($eMap as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img src="{{asset('/images/maps/')}}/{{$item->image}}" height="60" width="60"></td>
                <td>
                    <a class="btn btn-waring btn-xs" href="Maps/{{$item->id}}/edit">
                        <i class="fa fa-edit"></i></a>
                    <form method="post" action="Maps/{{$item->id}}">
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