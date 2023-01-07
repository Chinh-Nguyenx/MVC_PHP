<?php

require_once 'models/nhan_vien.php';
function listUser(){
    $users = getUser();
    include_once "views/NhanVien/listNhanVien.php";
}

function addNv()
{
    if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
        $ten_nv = $_POST['ten_nv'];
        $luong = $_POST['luong'];
        addUser($ten_nv,$luong);
    }
    
}

function removeUser(){
    deleteUser();
    header("location: ?url=/");
    die();
}

function find_nv(){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $nhanviens = getUserone($id);
    }
    include "views/NhanVien/updateNV.php";
}

function updateNV(){
    if (isset($_POST['sua'])&&($_POST['sua'])){
        $id = $_POST['id'];
        $ten_nv = $_POST['ten_nv'];
        $luong = $_POST['luong'];
        updateUser($id,$ten_nv,$luong);
    }
}
