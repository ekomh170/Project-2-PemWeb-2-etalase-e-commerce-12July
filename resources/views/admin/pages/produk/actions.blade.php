<a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
<a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
<form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>
