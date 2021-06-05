<?php
include_once("asd.php");
$name=$_POST['user'];
$pass=$_POST['pass'];
header("Content-type:text/html;charset=utf-8");
if(mysqli_num_rows(mysqli_query($res,"select name  from user WHERE name ='$name'"))>0){
    echo "该账号已经存在，请<a href='小米登录.html'>登录</a>";
}else{
    $sql="INSERT INTO user (name,pass )VALUES ('$name','$pass')";//加引号不加会自动识别为sql中的英文
    $result=mysqli_query($res,$sql);
    if ($result){
        echo "注册成功，请<a href='xiaomi.html'>登录</a>";
    }
}