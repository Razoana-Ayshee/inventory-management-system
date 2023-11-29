{{session('message') ?? ""}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


<a href="{{ route('products.add') }}">
    <button style="padding: 10px; margin: 10px; cursor: pointer;"> Add New Product</button>
</a>
<a href="{{ route('user-dashboard') }}">
    <button style="padding: 10px; margin: 10px; cursor: pointer;"> Dashboard</button>
</a>
<h2>Product List</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}} </td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>
                <div style="display: flex; gap: 10px;">
                    <a href="{{ route('products.edit',$product->id) }}">
                        <button style="padding: 10px; margin: 10px; cursor: pointer;"> update</button>
                    </a>

                    <form action="{{ route('products.delete',$product->id) }}" method="post">
                        @csrf
                        {{method_field('delete')}}
                        <button style="padding: 10px; margin: 10px; cursor: pointer;"> delete</button>
                    </form>
                </div>

            </td>
        </tr>
    @endforeach


    <!-- Add more rows as needed -->
    </tbody>
</table>

</body>
</html>
