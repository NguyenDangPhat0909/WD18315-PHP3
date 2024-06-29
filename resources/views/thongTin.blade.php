<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Thông Tin</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Xin Chào Các Bạn</h1>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã Sinh Viên</th>
                    <th scope="col">Tên Sinh Viên</th>
                    <th scope="col">Giới Tính</th>
                    <th scope="col">Lớp</th>
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
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
