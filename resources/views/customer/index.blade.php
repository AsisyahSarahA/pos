@extends('layouts.vuexy.vuexy')

@section('page-title', 'Data Customer')

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
                    {{-- Button Tambah Customer --}}
                    <a href="javascript:void(0)" id="btnTambahData" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#customerModal">
                        Tambah Customer
                    </a>

                    {{-- Form Search --}}
                    <form action="{{ route('customers.index') }}" method="GET">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="input-group" style="width: 300px;">
                                <span class="input-group-text">
                                    <i class="ti ti-search"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Search..." name="customer_name"
                                    value="{{ request('customer_name') }}">
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
                    <th>Kode Customer</th>
                    <th>Nama Customer</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $customer->customer_code }}</td>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
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
<div class="modal fade" id="customerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal">Tambah Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="customer_name" class="form-label font-bold text-slate-600">Nama Customer</label>
                            <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Masukkan nama customer" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="customer_code" class="form-label font-bold text-slate-600">Kode Customer</label>
                            <input type="text" name="customer_code" id="customer_code" class="form-control" placeholder="CUS-XXX" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label font-bold text-slate-600">Telepon</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="08XXXXXXXX" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label font-bold text-slate-600">Alamat</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Alamat customer" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Simpan Customer</button>
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
            $("#customerModal").modal('show');
            $('#title-modal').html('Tambah Customer');
        });
    })
</script>
@endpush
