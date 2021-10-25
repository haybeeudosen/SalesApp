@extends('auth.spp')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Supplier</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('supplier.index') }}"> Back</a>
            </div>
        </div>
    </div>



        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Supplier Name:</strong>
                    {{ $supplier->supplier_name }}
                </div>
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $supplier->address}}
                </div>
                <div class="form-group">
                    <strong>Phone number:</strong>
                    {{ $supplier->phone_number }}
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $supplier->email }}
                </div>
                <div class="form-group">
                    <strong>Organisation Name:</strong>
                    {{ $supplier->organisation_name }}
                </div>
            </div>
        </div>

@endsection
