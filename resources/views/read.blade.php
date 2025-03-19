<x-layout>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            setTimeout(() => {
                const alertNode = document.querySelector('.alert');
                if (alertNode) {
                    const alertInstance = new bootstrap.Alert(alertNode);
                    alertInstance.close();
                }
            }, 2000);
        </script>
    @endif

    <x-slot:title>{{ $title }}</x-slot:title>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Updated</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration + ($items->currentPage() - 1) * $items->perPage() }}</th>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->updated_at->format('d/m/Y H.i') }}</td>
                    <td class="d-flex align-items-center">
                        <a href="{{ route('items.edit', $item->id) }}"
                            class="btn btn-warning d-flex justify-content-center align-items-center"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-pencil" style="font-size: 18px;"></i>
                        </a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST"
                            class="d-inline-block ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="btn btn-danger d-flex justify-content-center align-items-center"
                                style="width: 40px; height: 40px;"
                                onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="material-icons">&#xe872;</i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $items->links() }}
    </div>
</x-layout>
