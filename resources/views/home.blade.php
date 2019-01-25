@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    {{--<h1>Dashboard</h1>--}}
    <small>Control panel</small>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>

    <!-- Main content -->

@stop

@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$Exposition}}</h3>

                        <p>Exposition</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{asset('/Exposition')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Activity Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{asset('/users')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$Complaint}}</h3>

                        <p>User Complaint</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{asset('/Complaint')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>2</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>Setting</h3>
                        <p>Admin and Api Setting</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{asset('/WebSetting')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red-active">
                    <div class="inner">
                        <h3>Complaints</h3>
                        <p>Users Complaints</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-hackernews"></i>
                    </div>
                    <a href="{{asset('/Complaints')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-gray-light">
                    <div class="inner">
                        <h3>Suggestions</h3>
                        <p>Users Suggestions</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-information"></i>
                    </div>
                    <a href="{{asset('/Suggestions')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>


            <!-- ./col -->
        </div>
    </section>
@stop