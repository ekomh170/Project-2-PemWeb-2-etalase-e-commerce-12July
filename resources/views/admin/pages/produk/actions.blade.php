<a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
<a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
<form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;" class="form-delete">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger btn-sm btn-delete">Hapus</button>
</form>

<script>
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan bisa mengembalikan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
