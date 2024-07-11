<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.updateProducts', $data->id)}}" method="post">
        @csrf
        @method('PATCH')
        TÊN: <input type="text" name="name" value="{{$data->name}}"><br>
        GIÁ: <input type="text" name="price" value="{{$data->price}}"><br>
        HÃNG
        <select name="category_id" id="">
            @foreach ($category as $item)
            <option value="{{ $item->id }}" {{ $data->category_id == $item->id ? 'selected' : '' }}>{{ $item->namecy }}</option>
            @endforeach
        </select><br>
        SỐ LƯỢT XEM: <input type="text" name="view" value="{{$data->view}}"><br>
        <button type="submit">Sửa</button>
    </form>
</body>
</html>