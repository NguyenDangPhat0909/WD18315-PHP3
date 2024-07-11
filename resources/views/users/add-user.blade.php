<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.addPostUsers')}}" method="post">
        @csrf
        TÊN: <input type="text" name="name"><br>
        EMAIL: <input type="text" name="email"><br>
        PHÒNG BAN:
        <select name="phongban" id="">
            @foreach ($phongBan as $value)
                <option value="{{$value->id}}">{{$value->ten_donvi}}</option>
            @endforeach
        </select><br>
        TUỔI: <input type="text" name="tuoi"><br>
        <button type="submit">Thêm Mới</button>
    </form>
</body>
</html>