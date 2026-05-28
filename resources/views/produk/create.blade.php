<form action="{{ route('produk.store') }}" method="POST" id="formProduk">
    @csrf

    <div class="modal-body ">
        <div class="modal-header">
            <h5 class="modal-title" id="titlemodal">Tambah Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="product_name" class="form-label font-bold text-slate-600">Nama Produk</label>
                <input type="text" name="product_name" id="product_name" class="form-control"
                    placeholder="Masukkan nama produk">
            </div>
            <div class="col-md-6 mb-3">
                <label for="product_code" class="form-label font-bold text-slate-600">Kode Produk</label>
                <input type="text" name="product_code" id="product_code" class="form-control" placeholder="PRD-XXX">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="price" class="form-label font-bold text-slate-600">Harga (Rp)</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="0">
            </div>
            <div class="col-md-6 mb-3">
                <label for="unit" class="form-label font-bold text-slate-600">Satuan</label>
                <input type="text" name="unit" id="unit" class="form-control" placeholder="Pcs/Box/Kg">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <label for="category_id" class="form-label font-bold text-slate-600">Kategori</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="btnSubmit" class="btn btn-primary waves-effect waves-light w-100">Simpan Produk</button>
    </div>
</form>

<script>
    $("#formProduk").submit(function() {
        let product_code = $('#product_code').val();
        let product_name = $('#product_name').val();
        let price = $('#price').val();
        let unit = $('#unit').val();
        let category_id = $('#category_id').val();

        if (product_code == "") {
            Swal.fire({
                title: 'Warning',
                icon: 'warning',
                text: 'Kode Produk wajib diisi!',
                confirmButtonText: 'OK',
                didClose: () => { $('#product_code').focus(); }
            });
            return false;
        } else if (product_name == "") {
            Swal.fire({
                title: 'Warning',
                icon: 'warning',
                text: 'Nama Produk wajib diisi!',
                confirmButtonText: 'OK',
                didClose: () => { $('#product_name').focus(); }
            });
            return false;
        } else if (category_id == "") {
            Swal.fire({
                title: 'Warning',
                icon: 'warning',
                text: 'Kategori wajib diisi!',
                confirmButtonText: 'OK',
                didClose: () => { $('#category_id').focus(); }
            });
            return false;
        } else if (price == "") {
            Swal.fire({
                title: 'Warning',
                icon: 'warning',
                text: 'Harga wajib diisi!',
                confirmButtonText: 'OK',
                didClose: () => { $('#price').focus(); }
            });
            return false;
        } else if (unit == "") {
            Swal.fire({
                title: 'Warning',
                icon: 'warning',
                text: 'Satuan wajib diisi!',
                confirmButtonText: 'OK',
                didClose: () => { $('#unit').focus(); }
            });
            return false;
        }

        $("#btnSubmit").prop("disabled", true);
        $("#btnSubmit").html("Processing...");

        
        return true; // Allow the form to submit
    });
</script>
