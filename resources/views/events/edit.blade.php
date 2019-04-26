@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        {{__('Edit Event')}}
                    </div>
                
                </div>
                <form method="post" action="">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" placeholder="Enter event name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" placeholder="Enter event description"></textarea>
                    </div>
                      <div class="form-group">
                            <label>Event Start Date</label>

                            <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" placeholder="Select event start date" name="start">
                    </div>
                    <div class="form-group">
                            <label>Event Start Date</label>

                            <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" placeholder="Select event start date" name="start">
                    </div>
                    <hr>
                     <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                     </div>


                </form>
            </div>
            
        </div>
    </div>
@endsection