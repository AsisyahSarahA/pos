@extends('layouts.vuexy.vuexy')

@section('page-title', 'Data Produk')

@section('content')


<div class="card">
    <div class="card-body">
        <table class="table">
            <thead class="uppercase">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">

                    {{-- Button Tambah Produk --}}
                    <a href="javascript:void(0)" id="btnTambahData" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#productModal">
                        Tambah Produk
                    </a>

                    {{-- Form Search & Filter --}}
                    <form action="{{ route('produk.index') }}" method="GET">
                        <div class="d-flex align-items-center gap-2 flex-wrap">

                            {{-- Search --}}
                            <div class="input-group" style="width: 300px;">
                                <span class="input-group-text">
                                    <i class="ti ti-search"></i>
                                </span>

                                <input type="text" class="form-control" placeholder="Search..." name="product_name"
                                    value="{{ request('product_name') }}">

                                {{-- <button type="submit" class="btn btn-primary">
                                    Cari
                                </button> --}}
                            </div>

                            {{-- Filter Category --}}
                            <div class="d-flex align-items-center gap-2">

                                <select name="category_id" id="select2Basic" class="select2 form-select"
                                    style="width: 220px;">
                                    <option value="">Categories</option>

                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category_id')==$category->id ?
                                        'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-primary">
                                    Filter
                                </button>

                            </div>

                        </div>
                    </form>

                </div>
            </thead>
            </form>
    </div>
    <tr>
        <th>No</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Satuan</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @foreach($dataproduk as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->product_code }}</td>
            <td>{{ $produk->product_name }}</td>
            <td>{{ $produk->category->category_name }}</td>
            <td>{{ number_format($produk->price, 0, ',', '.') }}</td>
            <td>{{ $produk->unit }}</td>
            <td>
                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

{{-- modal --}}
<div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="product_name" class="form-label font-bold text-slate-600">Nama Produk</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Masukkan nama produk" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="product_code" class="form-label font-bold text-slate-600">Kode Produk</label>
                            <input type="text" name="product_code" id="product_code" class="form-control" placeholder="PRD-XXX" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label font-bold text-slate-600">Harga (Rp)</label>
                            <input type="number" name="price" id="price" class="form-control" placeholder="0" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="unit" class="form-label font-bold text-slate-600">Satuan</label>
                            <input type="text" name="unit" id="unit" class="form-control" placeholder="Pcs/Box/Kg" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="category_id" class="form-label font-bold text-slate-600">Kategori</label>
                            <select name="category_id" id="category_id" class="form-select" required>
                                <option value="">Pilih Kategori</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Simpan Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('myscript')
<script>
    $(function () {
        $('#btnTambahData').click(function(e){
            e.preventDefault();
            $("#productModal").modal('show');
            // $('#loadForm'.load("{{ route('produk.create') }}"))
            $('#title-modal').html('Tambah Produk');
            
        });
    })
</script>
@endpush