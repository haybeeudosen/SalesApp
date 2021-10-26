@extends('auth.spp')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Suppliers Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('supplier.create') }}"> Create New Supplier</a>
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
            <th>Supplier Name</th>
            <th>Address</th>
            <th>Phone number</th>
            <th>Email</th>
            <th>Organisation Name</th>


            <th width="280px">Action</th>
            </tr>
                @foreach ($suppliers as $supplier )
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $supplier->supplier_name }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->phone_number }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->organisation_name }}</td>
                    <td>
                    <a class="btn btn-info" href="{{ route('supplier.show',$supplier->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('supplier.edit',$supplier->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['supplier.destroy', $supplier->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>


{{-- {!! $supplier->render() !!} --}}


@endsection
