@extends('layouts.vuexy.vuexy')

@section('page-title', 'Data Produk')

@section('content')


    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="uppercase">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">

                        {{-- Button Tambah Produk --}}
                        <a href="javascript:void(0)" id="btnTambahData" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#productModal">
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

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ request('category_id') == $category->id ? 'selected' : '' }}>
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
            @foreach ($dataproduk as $produk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $produk->product_code }}</td>
                    <td>{{ $produk->product_name }}</td>
                    <td>{{ $produk->category->category_name }}</td>
                    <td>{{ number_format($produk->price, 0, ',', '.') }}</td>
                    <td>{{ $produk->unit }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary  btnEdit"  data-id= "{{$produk->id}}" id="btnEdit">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btnDelete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $dataproduk->links() }}
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" id="loadForm">

                {{-- Content will be loaded here --}}
            </div>
        </div>
    </div>

@endsection

@push('myscript')
    <script>
        $(function() {
            $('#btnTambahData').click(function() {
                $('#productModal').modal('show');
                $('#loadForm').load("{{ route('produk.create') }}");
                $('#titlemodal').text('Tambah Data Produk');
            });


            $(".btnDelete").click(function(e) {
                e.preventDefault();
                let form = $(this).closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });


            // $(".btnEdit").click(function(e) {
            //     e.preventDefault();
            //     $.ajax({
            //         type: 'GET',
            //         // url: "{{ route('produk.edit', $produk->id) }}",
            //         // success: function(response) {
            //         //     $('#productModal').modal('show');
            //         //     $('#loadForm').html(response);
            //         //     $('#titlemodal').text('Edit DataProduk');
            //         // }
            //     })

            //     let id = $(this).attr('data-id');
            //     $('#productModal').modal('show');
            //     $('#loadForm').load("{{ route('produk.edit', ':id') }}".replace(':id', id));
            //     $('#titlemodal').text('Edit DataProduk');


                // $('#productModal').modal('show');
                // $('#loadForm').load("{{ route('produk.edit', $produk->id) }}");
                // $('#titlemodal').text('Edit DataProduk');

        })
    </script>
@endpush
