@extends('auth.spp')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index')}}">Back</a>
            </div>
        </div>
    </div>



        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
            </ul>
        </div>
        @endif



        {!! Form::model($product, ['method' => 'PATCH','route' => ['product.update', $product->id]]) !!}

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Name:</strong>
                        {!! Form::text('product_name', null, array('placeholder' => 'product Name','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group form-control">
                        <label for="brand_id">Brand:</label>
                        <select name="brand_id" id="brand_id">

                             {{-- @foreach ($brands as $brand) --}}
                                <option value="{{$product->brand->id}}">{{$product->brand->brand_name}}</option>
                            {{-- @endforeach --}}
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group form-control">
                        <label for="category_id">Category:</label>
                        <select name="category_id" id="category_id">

                            {{-- {{-- @foreach ($categories as $category) --}}
                                <option value="{{$product->category->id}}">{{$product->category->category_name}}</option>
                            {{-- @endforeach --}}
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group form-control">
                        <label for="supplier_id">Supplier:</label>
                        <select name="supplier_id" id="supplier_id">

                            {{-- {{-- @foreach ($suppliers as $supplier) --}}
                                <option value="{{$product->supplier->id}}">{{$product->supplier->supplier_name}}</option>
                            {{-- @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        {!! Form::text('quantity', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                    </div>
                </div>


            </div>
            {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

@endsection
