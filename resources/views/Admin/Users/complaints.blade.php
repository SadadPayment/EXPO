@extends('adminlte::page')

@section('title', 'Complaints')

@section('content_header')
    <h1>Dashboard</h1>
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
            <th scope="col">Claim Title</th>
            <th scope="col">Claim Topic</th>
            {{--<th scope="col">Show</th>--}}
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @php
            $count =0;
        @endphp
        @foreach($Complaints as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Username}}</td>
                <td>{{$item->claim_title}}</td>
                <td>{{$item->claim_topic}}</td>
                {{--<td>--}}
                {{--<button type="button" class="btn btn-info btn-sm" data-toggle="modal"--}}
                {{--data-target="#myModal{{$count}}">--}}
                {{--Show--}}
                {{--</button>--}}
                {{--</td>--}}
                <td>
                    {{--<a class="btn btn-waring btn-xs" href="Complaints/{{$item->id}}/edit">--}}
                        {{--<i class="fa fa-edit"></i></a>--}}
                    <form method="post" action="Complaints/{{$item->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @php
                $count ++;
            @endphp

            {{--<div id="myModal{{$count}}" class="modal fade" role="dialog">--}}
            {{--<div class="modal-dialog">--}}

            {{--<!-- Modal content-->--}}
            {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
            {{--<h4 class="modal-title">Modal Header</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
            {{--<p>{{$item->Username}}</p>--}}
            {{--<p>{{$item->claim_title}}</p>--}}
            {{--<p>{{$item->claim_topic}}</p>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--</div>--}}
        @endforeach
        </tbody>
    </table>


    <!-- Modal -->


@stop