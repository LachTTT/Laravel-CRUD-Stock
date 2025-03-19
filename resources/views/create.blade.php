<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto p-2" style="width:75vw;">
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif

        <form class="row g-3" action="{{ route('items.store') }}" method="POST">
            @csrf

            <div class="col-md-6">
                <label for="name" class="form-label">Items Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Item Name" required>
            </div>
            <div class="col-md-6">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Items</button>
            </div>
        </form>
    </div>
</x-layout>
