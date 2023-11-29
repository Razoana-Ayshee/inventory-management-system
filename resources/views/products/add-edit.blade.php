
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
@php($edit=isset($productEdit))
<form action="{{$edit? route('products.update',$productEdit->id):route('products.store')}}" method="POST">
    @csrf
    @if($edit){{method_field('put')}}@endif

    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" value="{{$edit? $productEdit->name :old('name')}}">

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="{{$edit? $productEdit->quantity :old('quantity')}}">

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" value="{{$edit? $productEdit->price :old('price')}}">

   <button type="submit">{{$edit? 'update' :'add'}}</button>
</form>

</body>
</html>
