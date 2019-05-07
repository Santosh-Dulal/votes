@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('View all Users')}}
                </div>
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
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->post}}</td>
                                <td>{{$user->department}}</td>
                                <td>{{$user->photo}}</td>
                                <td>@if($user->type==1){{"Super-Admin"}}@elseif($user->type==2){{"Admin"}}@else{{"User"}}@endif</td>
                                <td>{{$user->bio}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="{{route('users.edit',[$user->id])}}">Edit</a></li>
                                                <li><a href="{{route('users.show',$user->id)}}">View</a></li>
                                                <li>
                                                        <form method="post" action="{{route('users.destroy',[$user->id])}}">
                                                                @csrf
                                                                @method('DELETE')
                                                               <button type="submit">Deleted</button>
                                                        </form>
                                                </li>

                                             </ul>
                            </div>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
