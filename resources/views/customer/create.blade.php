<form action="{{ route('customers.store') }}" method="POST" id="formCustomer">
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

<script>
    $(document).off('submit', '#formCustomer').on('submit', '#formCustomer', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            success: function(response){
                Swal.fire({
                    icon: 'success',
                    title: 'Customer berhasil ditambahkan',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#customerModal').modal('hide');
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
