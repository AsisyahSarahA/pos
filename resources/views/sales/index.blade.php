@extends('layouts.vuexy.vuexy')

@section('page-title', 'Data Sales')

@section('content')


    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="uppercase">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">

                        {{-- Button Tambah Sales --}}
                        <a href="{{ route('sales.create') }}" id="btnTambahData" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#productModal">
                            Tambah Sales
                        </a>

                        {{-- Form Search & Filter --}}


                    </div>
                </thead>
                </form>
        </div>
        <tr>
            <th>No. Transaction</th>
            <th>Customer Code</th>
            <th>Date</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {{-- {{ $dataproduk->links() }} --}}
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
                $('#loadForm').load("{{ route('sales.create') }}");
                $('#titlemodal').text('Tambah Data Sales');
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
