<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
</head>
<body>
    <h1>Xin Chào Các Bạn</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listProduct as $value):?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><?=$value['name']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
