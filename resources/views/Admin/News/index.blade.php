@extends('adminlte::page')

@section('title', 'News')

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
            <th scope="col">Tile ar</th>
            <th scope="col">Image</th>
            <th scope="col">Topic ar</th>
            <th scope="col">Date</th>
            <th scope="col">تعديل\حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($News as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Title_ar}}</td>
                <td><img src="{{asset('/images/News/')}}/{{$item->image}}" height="50" width="50"></td>
                <td>{{$item->topic_ar}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a class="btn btn-waring btn-xs" href="News/{{$item->id}}/edit">
                        <i class="fa fa-edit"></i></a>
                    <form method="post" action="News/{{$item->id}}">
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