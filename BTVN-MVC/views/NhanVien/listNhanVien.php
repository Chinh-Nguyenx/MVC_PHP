<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Ten nhan vien</td>
        <td>Luong</td>
        <td>Hoat dong xoa</td>
        <td>Hoat dong them</td>
        <td>Hoat dong sua</td>
    </tr><?php foreach ($users as $value) {?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['ten_nv'] ?></td>
        <td><?php echo $value['luong'] ?></td>
        <td><a href="?url=remove-nv&id=<?php echo $value['id']; ?>">Xoa</a></td>
        <td><a href="?url=form-add">Them moi</a></td>
        <td><a href="?url=find_up&id=<?php echo $value['id']; ?>">Update</a></td>
        
    </tr><?php }?>
</table>
</body>
</html>
