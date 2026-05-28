@extends('layouts.vuexy.vuexy')
@section('page-title', 'Create Sales Transaction')
@section('content')
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Sales Transaction</h5>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="no_transaction" class="form-label font-bold text-slate-600">No.
                                    Transaction</label>
                                <input type="text" name="no_transaction" id="no_transaction" class="form-control"
                                    placeholder="Enter transaction number">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="date" class="form-label font-bold text-slate-600">Date</label>
                                <input type="date" name="date" id="date" class="form-control"
                                    placeholder="Masukkan tanggal transaksi">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="customer_id" class="form-label font-bold text-slate-600">Customer</label>
                                <select name="customer_id" id="customer_id" class="form-select">
                                    <option value="">Choose Customer</option>
                                    @foreach ($dataCustomer as $dataCustomers)
                                        <option value="{{ $dataCustomers->id }}">{{ $dataCustomers->customer_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="fas fa-shopping-cart" style="font-size:90px"></i>
                            </div>
                            <div class="font-size:85px">
                                Rp . 20.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="product_id" class="form-label font-bold text-slate-600">Product</label>
                <select name="product_id" id="product_id" class="form-select">
                    <option value="">Choose Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"

                            data-productcode={{""$product->product_code""}}
                            data-productname={{""$product->product_name""}}
                            data-productprice={{""$product->product_price""}}
                            >
                            {{ $product->product_name }}
                        </option>
                    @endforeach
                </select>

                <button type="button" class="btn btn-success mt-2" id="btnAdd">Add Product</button>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="tabelDetail">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </form>
@endsection
@push('myscript')
    <script>
        $(function() {
            $("#btnAdd").click(function(e){
                e.preventDefault();
                let productSelected = $("#product_id option:selected");
                let productCode = productSelected.attr('data-productcode');
                let productName = productSelected.attr('data-productname');
                let productPrice = productSelected.attr('data-productprice');
                let row = `<tr>
                    <td>${productCode}</td>
                    <td>${productName}</td>
                    <td>${productPrice}</td>
                    <td></td>
                    <td>Total</td>
                </tr>`;
                $("#tabelDetail tbody").append(row);
            });
        });
    </script>
