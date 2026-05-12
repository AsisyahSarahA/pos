

{{-- @section('content') --}}
           <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Produk Baru</h5>
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
                    <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan Produk</button>
                </div>
            </form>
    </div>

{{-- </body>

</html> --}}

{{-- @endsection --}}
