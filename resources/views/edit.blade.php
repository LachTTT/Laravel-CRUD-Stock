<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mt-4">
        <h2>Edit Item</h2>
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Item Name:</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $item->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" name="stock" id="stock" class="form-control"
                    value="{{ old('stock', $item->stock) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
</x-layout>
