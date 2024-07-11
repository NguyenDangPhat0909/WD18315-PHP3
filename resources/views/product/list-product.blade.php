<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <form action="{{ route('products.listProducts') }}" method="get">
            <input type="text" name="search" placeholder="Tìm kiếm theo tên">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
        <a href="{{route('products.addProducts')}}">Thêm Mới</a>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hãng</th>
                <th>Số Lượt Xem</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listProducts as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product -> name }}</td>
                    <td>{{ $product -> price }}</td>
                    <td>{{ $product -> namecy }}</td>
                    <td>{{ $product -> view }}</td>
                    <td>
                        <a href="{{route('products.deleteProducts', $product->id)}}">Xóa</a>
                        <a href="{{route('products.editProducts', $product->id)}}" >Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>