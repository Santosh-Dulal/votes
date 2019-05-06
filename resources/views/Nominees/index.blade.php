@section('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Show nominess')}}
                </div>

            </div>
            <div class="box-body">
                <div class="table table-primary table table-bordered">
                    <thead>
                        <tr>
                            <th>Nominees</th>
                        </tr>
                    </thead>
                    <tbody>
                            {{--  @foreach ($nomis as $nomi)
                                <tr>
                                    <td>$nomi->is_nominee</td>
                                </tr>

                            @endforeach  --}}
                    </tbody>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
