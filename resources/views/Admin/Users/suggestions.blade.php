@extends('adminlte::page')

@section('title', 'Suggestions')

@section('content_header')
    <h1>Suggestions</h1>
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
            <th scope="col">Username</th>
            <th scope="col">Suggest Title</th>
            <th scope="col">Suggest Topic</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Suggestions as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Username}}</td>
                <td>{{$item->suggest_title}}</td>
                <td>{{$item->suggest_topic}}</td>
                <td>
                    <form method="post" action="Suggestions/{{$item->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        @if(!$Suggestions)
            <h1>No Data !</h1>
        @endif
        </tbody>
    </table>
@stop