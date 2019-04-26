@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title"></div>
            </div>
            <div class="box-body">
                <table class="table table-primary table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Post</th>
                            <th>Department</th>
                            <th>Photo</th>
                            <th>Type</th>
                            <th>Bio</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                               
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->post}}</td>
                                    <td>{{$user->department}}</td>
                                    <td>{{$user->photo}}</td>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->bio}}</td>
                                 </tr>
                               
                            
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
            
        </div>
    </div>
@endsection