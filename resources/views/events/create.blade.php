@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css
">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <div class="box-title">
                {{__('Create Events')}}
            </div>
        </div>
            <div class="box-body">
                <form method="post" action="{{route('event.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Event Name</label>
                    <input id="name" class="form-control" name="name" type="text" placeholder="Enter event name">
                </div>
               <div class="form-group">
                   <label for="description">Event Description</label>
                   <textarea id="description" class="form-control" placeholder="Enter event description" name="description"></textarea>
               </div>
               
                 <div class="form-group">
                <label>Event Start Date</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" placeholder="Select event start date" name="start">
                </div>
                <!-- /.input group -->
              </div>
                <div class="form-group">
                <label>Event End Date</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker1" placeholder="Select event end date" name="end">
                </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Create Event</button>
                  </div>

                </form>
            </div>

    </div>
        
    </div>
</div>
    
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js
    "></script>
    <script>
        $('#datepicker').datepicker({
        autoclose: true
        });
    </script>
     <script>
        $('#datepicker1').datepicker({
          
        autoclose: true
        });
    </script>

   
@endsection