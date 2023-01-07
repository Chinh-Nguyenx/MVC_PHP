<?php
require_once "models/db.php";
function getUser()
{
    $sql = "select * from user";
    return getData($sql);
}
function deleteUser()
{
    $id = $_GET['id'];
    $sql = "delete from user where id=$id";
    getData($sql, false);
}
function addUser($ten_nv,$luong){
    $sql = "insert into user(ten_nv,luong) values ('$ten_nv','$luong')";
    getData($sql, false);
}
function updateUser($id,$ten_nv,$luong){
    $sql= "update user set ten_nv='".$ten_nv."',luong='".$luong."' where id=".$id;   
    getData($sql,false);
}

function getUserone($id)
{
    $sql = "select * from user where id=".$id;
    return getData($sql,false);
}
