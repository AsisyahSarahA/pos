@extends('layouts.vuexy.vuexy')

@section('page-title', 'Data Supplier')

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
                    {{-- Button Tambah Supplier --}}
                    <a href="javascript:void(0)" id="btnTambahData" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#supplierModal">
                        Tambah Supplier
                    </a>

                    {{-- Form Search --}}
                    <form action="{{ route('suppliers.index') }}" method="GET">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="input-group" style="width: 300px;">
                                <span class="input-group-text">
                                    <i class="ti ti-search"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Search..." name="supplier_name"
                                    value="{{ request('supplier_name') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Cari
                            </button>
                        </div>
                    </form>
                </div>
            </thead>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Supplier</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $supplier->supplier_code }}</td>
                    <td>{{ $supplier->supplier_name }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>
                        <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- modal --}}
<div class="modal fade" id="supplierModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('suppliers.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal">Tambah Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="supplier_name" class="form-label font-bold text-slate-600">Nama Supplier</label>
                            <input type="text" name="supplier_name" id="supplier_name" class="form-control" placeholder="Masukkan nama supplier" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="supplier_code" class="form-label font-bold text-slate-600">Kode Supplier</label>
                            <input type="text" name="supplier_code" id="supplier_code" class="form-control" placeholder="SUP-XXX" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label font-bold text-slate-600">Telepon</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="08XXXXXXXX" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label font-bold text-slate-600">Alamat</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Alamat supplier" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Simpan Supplier</button>
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
            $("#supplierModal").modal('show');
            $('#title-modal').html('Tambah Supplier');
        });
    })
</script>
@endpush
