@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Ordered Product</h4>
                            <a href="#" style="float: right" class="btn btn-dark" data-toggle="" data-target="">
                            <i class="fa fa-plus"></i>Add New Order</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Discount(%)</th>
                                        <th>Total</th>
                                        <th><a href="#" class="btn btn-sm btn-success add_more rounded-circle"><i class="fa fa-plus-circle"></i></a></th>
                                    </tr>

                                </thead>
                                <tbody class="addMoreProduct">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <select name="product_id[]" id="product_id" class="form-control product_id">
                                                @foreach ($products as $product)
                                                    <option data-price="{{$product->price}}"
                                                        value="{{$product->id}}">
                                                        {{$product->product_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="quantity[] " id="quantity" class="form-control quantity">
                                        </td>
                                        <td>
                                            <input type="number" name="price[] " id="price" class="form-control price">
                                        </td>
                                        <td>
                                            <input type="number" name="discount[] " id="discount" class="form-control discount">
                                        </td>
                                        <td>
                                            <input type="number" name="total_amount[] " id="total_amount" class="form-control total_amount">
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-danger rounded-circle"> <i class="fa fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Total <b class="total">0.00</b></h4>
                        </div>
                        <div class="card-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .modal.right .modal.dialog{
            top: 0;
            right: 0;
            margin-right: 19vh;
        }
        .modal.fade:not(.in).right .modal.dialog{
            -webkit-transform: translate3d(25%, 0, 0);
            transform: :translate3d(25%, 0, 0);
        }
    </style>
@endsection

@section('script')
    {{--<script>
        $(document).ready(function(){
            alert(1);
        })
    </script> --}}

        <script>
            $('.add_more').on('click', function(){
                var product = $('.product_id').html();
                var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;
                var tr = '<tr><td class"no"">' + numberofrow + '</td>' +
                    '<td><select class="form-control product_id" name="product_id[]">' + product + '</select></td>' +
                    '<td><input type="number" name="quantity[]" class="form-control"></td>' +
                    '<td><input type="number" name="price[]" class="form-control"></td>' +
                    '<td><input type="number" name="discount[]" class="form-control"></td>' +
                    '<td><input type="number" name="total_amount[]" class="form-control total_amount"></td>' +
                    '<td><a class="btn btn-danger btn-sm delete rounded-circle"><i class="fa fa-times-circle"></a></td>';
                    $('.addMoreProduct').append(tr);

            });
                // delete a row
            $('.addMoreProduct').delegate('.delete', 'click', function(){
                $(this).parent().parent().remove();
            })



            // calculating total amount
            function TotalAmount(){
                var total = 0;
                $('.total_amount').each(function(i, e){
                    var amount = $(this).val() - 0;
                    total += amount;
                });

                $('.total').html(total);
            }

            $('.addMoreProduct').delegate('.product_id', 'change', function(){
                var tr = $(this).parent().parent();
                var price = tr.find('product_id option:selected').attr('data-price');
                tr.find('.price').val(price);
                var quantity = tr.find('.quantity').val() - 0;
                var discount = tr.find('.discount').val() - 0;
                var price = tr.find('.price').val() - 0;
                var total_amount = (quantity * price) - ((quantity * price * discount) / 100);
                tr.find('.total_amount').val(total_amount )


            })

        </script>


@endsection
