<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.addPostProducts')}}" method="post">
        @csrf
        TÊN: <input type="text" name="name"><br>
        GIÁ: <input type="text" name="price"><br>
        HÃNG
        <select name="category" id="">
            @foreach ($Category as $value)
                <option value="{{$value->id}}">{{$value->namecy}}</option>
            @endforeach
        </select><br>
        SỐ LƯỢT XEM: <input type="text" name="view"><br>
        <button type="submit">Thêm Mới</button>
    </form>
</body>
</html>