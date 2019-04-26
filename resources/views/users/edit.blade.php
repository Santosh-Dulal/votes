@extends('adminlte::page')

@section('js')
    
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
     <script>
        $('#lfm').filemanager('image');
     </script>

@endsection

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                        {{__('Edit Users')}}
                </div>
            </div>
            @include('includes.message')
                <div class="box=body">
                        <form method="post" action="{{route('users.update',[$users->id])}}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" name="name" class="form-control" type="text" placeholder="Enter user name" value="{{$users->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email" placeholder="Enter user email" value={{$users->email}}>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="text" name="password" placeholder="Enter password" value="{{$users->password}}">
                            </div>
                            <div class="form-group">
                                <label for="post">Post</label>
                                <input id="post" class="form-control" type="text" name="post" placeholder="Enter user post" value="{{$users->post}}">
                            </div>
                            <div class="form-group">
                                <label for="department">Department*</label>
                                <input id="department" class="form-control" type="text" name="department" placeholder="Enter user department" value="{{$users->department}}">
                            </div>
                            <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo" multiple="multiple">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                            <div class="form-group">
                                <label for="bio">User Bio</label>
                                <textarea id="bio" class="form-control" rows="3" name="bio" placeholder="Enter user bio.">{{$users->bio}}</textarea>
                            </div>
                                <div class="checkbox">
                                <strong> Staff Type</strong></br>
                                    <input type="radio" name="type" value="0" checked="checked":null>Super-Admin
                                     <input type="radio" name="type" value="1" checked="checked":null>Admin
                                    <input type="radio" name="type" value="2" checked="checked":null>User
                                </div>

                                <div class="form-group">
                                <label for="is_nominee">Is_Nominee</label>
                                <input id="is_nominee" class="form-control" type="text" name="is_nominee" placeholder="Enter user email">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                                
                        </form>
                </div>
        </div>
    </div>
</div>
    
@endsection