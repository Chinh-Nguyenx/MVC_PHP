<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url){
    case "/":
        require_once "controllers/nhanvien.php";
        echo listUser();
        break;
    case "remove-nv":
        require_once "controllers/nhanvien.php";
        echo removeUser();
        break;
    case "add-nv":
        require_once "controllers/nhanvien.php";
        addNv();
        header("location: ?url=/");
        break;
    case "form-add":
        include_once "views/NhanVien/addNV.php";
        break;
    case "form-update":
        include_once "views/NhanVien/updateNV.php";
        break;
    case "find_up":
        require_once "controllers/nhanvien.php";
        find_nv();
        break;
    case "update-nv":
        require_once "controllers/nhanvien.php";
        updateNV();
        header("location: ?url=/");
        break;
}