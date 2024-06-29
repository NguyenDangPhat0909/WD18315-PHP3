<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Thông Tin</title>
</head>
<body>
    <h1>Xin Chào Các Bạn</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Mã Sinh Viên</th>
                <th>Tên Sinh Viên</th>
                <th>Giới Tính</th>
                <th>Lớp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($thongTin as $value):?>
                <tr>
                    <td><?=$value['MaSV']?></td>
                    <td><?=$value['Ten']?></td>
                    <td><?=$value['gioiTinh']?></td>
                    <td><?=$value['lop']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

