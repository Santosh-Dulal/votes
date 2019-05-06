
@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('View all Events')}}
                </div>
            </div>
            <div class="box-body">
                <table class="table table-primary table table-bordered">
                    <thead>
                        <tr>
                                <th>Event Name</th>
                                <th>Event Description</th>
                                <th>Event Start</th>
                                <th>Event End</th>
                                <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{$event->name}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->start}}</td>
                                <td>{{$event->end}}</td>
                                <td>
                                         <div class="btn-group">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="{{route('event.edit',[$event->id])}}">Edit</a></li>
                                                <li><a href="#">View</a></li>
                                                <li><a href="{{route('event.destroy',[$event->id])}}">Delete</a></li>
                                             </ul>
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

