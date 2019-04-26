@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        {{__('Make Votes')}}
                    </div>
                </div>
                <div class="box-body">
                    <form method="post" action="{{route('votes.store','$vote->id')}}">
                    @csrf
                            <div class="form-group">
                                <label for="name">Vote Nominee</label>
                                <select id="name" class="form-control select2" multiple="multiple" name="votes[]" placeholder="Select any four nominees to vote">
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>


                            </div>
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
