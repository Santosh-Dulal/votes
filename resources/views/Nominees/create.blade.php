@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/select2.min.css')}}>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Select Nominees')}}
                </div>
            </div>
            @include('includes.message')
                <div class="box-body">
    	    <form method="post" action="{{route('nomis.store','$nominee->id')}}">
                @csrf
                     <select class="form-control select2 " name="nominees[]" multiple="multiple" >
                                 @foreach ($users as $user)
                                 <option value="{{$user->id}}">{{$user->name}}</option>
                                 @endforeach

                    </select>
                    <hr>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>

        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{asset('dist/js/select2.min.js')}}"></script>
<script>
 $('.select2').select2();

</script>
@endsection






