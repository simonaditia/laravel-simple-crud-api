<h1>List Products</h1>
<a href="/products/create">Create</a>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>