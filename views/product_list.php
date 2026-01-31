<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
        </tr>

        <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['name'] ?></td>
            <td><?= number_format($p['price']) ?> đ</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
