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
            <th scope="col">Title Ar</th>
            <th scope="col">Title En</th>
            <th scope="col">Image</th>
            <th scope="col">edit\delete</th>

        </tr>
        </thead>
        <tbody>
        @if($item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title_ar}}</td>
                <td>{{$item->title_en}}</td>
                <td><img src="{{asset('/images/Setting/')}}/{{$item->image}}" height="50" width="50"></td>

                <td>
                    <a class="btn btn-waring btn-xs" href="WebSetting/{{$item->id}}/edit">
                        <i class="fa fa-edit"></i></a>
                    <form method="post" action="WebSetting/{{$item->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @else
            <h2>no Setting</h2> <a href="WebSetting/create"><p class="text-light-blue">Add Setting</p></a>
            @endif
        {{--@endforeach--}}

        </tbody>
    </table>
@stop