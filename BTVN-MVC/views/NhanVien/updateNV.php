<?php extract($nhanviens);?>
<h1>Update nhan vien</h1>
<form action="?url=update-nv" method="post">
    Ten nhan vien
    <div>
        <input type="text" name="ten_nv" value="<?php echo $ten_nv ?>">
    </div>
    Luong
    <div>
        <input type="text" name="luong" value="<?php echo $luong ?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="sua" value="update">
    </div>
</form>
