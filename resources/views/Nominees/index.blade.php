@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-primary table table-bordered">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Department</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $id = 1;
                        ?>
                        @foreach($nominees as $nominee)
                        <tr>
                            <td>
                                {{$id++}}
                            </td>
                            <td>{{$nominee->name}}</td>
                            <td>{{ $nominee->post}}</td>
                            <td>{{ $nominee->department }}</td>
                            <td>{{$nominee->photo}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
