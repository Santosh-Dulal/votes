@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    <div class="row">
     <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">{{$users_count}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
    </div>

     <div class="row">
     <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Votes</span>
                            <span class="info-box-number">{{$votes_count}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
    </div>
    <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Max Votes</span>
                            <span class="info-box-number">{{$votes}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
    </div>
    </div>

@stop


