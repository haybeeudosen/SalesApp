@extends('auth.spp')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
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
            <th>Product Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Supplier</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th width="280px">Action</th>
            </tr>
                @foreach ($products as $product )
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->category->category_name }}</td>
                    <td>{{ $product->brand->brand_name }}</td>
                    <td>{{ $product->supplier->supplier_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                    <a class="btn btn-info" href="{{ route('product.show',$product->id ) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['product.destroy',$product->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>


{{-- {!! $product->render() !!} --}}


@endsection
