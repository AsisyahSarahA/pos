@extends('layouts.vuexy.vuexy')

@section('page-title', 'Data Kategori')

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
                    {{-- Button Tambah Kategori --}}
                    <a href="javascript:void(0)" id="btnTambahData" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#categoryModal">
                        Tambah Kategori
                    </a>

                    {{-- Form Search --}}
                    <form action="{{ route('categories.index') }}" method="GET">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="input-group" style="width: 300px;">
                                <span class="input-group-text">
                                    <i class="ti ti-search"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Search..." name="category_name"
                                    value="{{ request('category_name') }}">
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
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
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
<div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="category_name" class="form-label font-bold text-slate-600">Nama Kategori</label>
                            <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Masukkan nama kategori" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Simpan Kategori</button>
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
            $("#categoryModal").modal('show');
            $('#title-modal').html('Tambah Kategori');
        });
    })
</script>
@endpush
