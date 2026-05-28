<form action="{{ route('suppliers.store') }}" method="POST" id="formSupplier">
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

<script>
    $(document).off('submit', '#formSupplier').on('submit', '#formSupplier', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            success: function(response){
                Swal.fire({
                    icon: 'success',
                    title: 'Supplier berhasil ditambahkan',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#supplierModal').modal('hide');
                location.reload();
            },
            error: function(xhr){
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi kesalahan',
                    text: xhr.responseJSON.message
                });
            }
        });
    });
</script>
