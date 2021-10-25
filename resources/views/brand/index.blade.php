@extends('auth.spp')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Brands Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('brand.create') }}"> Create New Brand</a>
            </div>
        </div>
    </div>


            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif


            <table class="table table-bordered padding-top:4px">
            <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
            </tr>
                @foreach ($brands as $brand )
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $brand->brand_name }}</td>
                    <td>
                    <a class="btn btn-info" href="{{ route('brand.show',$brand->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('brand.edit',$brand->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['brand.destroy', $brand->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>


{{-- {!! $brand->render() !!} --}}


@endsection
