<form action="{{ route('categories.store') }}" method="POST" id="formCategory">
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

<script>
    $(document).off('submit', '#formCategory').on('submit', '#formCategory', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            success: function(response){
                Swal.fire({
                    icon: 'success',
                    title: 'Kategori berhasil ditambahkan',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#categoryModal').modal('hide');
                location.reload(); // Since we don't have DataTable for categories yet, we reload the page
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
