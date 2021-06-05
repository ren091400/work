<?php
include_once("asd.php");
$name=$_POST['user'];
$pass=$_POST['pass'];
header("Content-type:text/html;charset=utf-8");

if(mysqli_num_rows(mysqli_query($res,"select name  from user WHERE name ='$name'"))>0){
    $sql="select pass  from user WHERE pass ='$pass'";
    $result=mysqli_query($res,$sql);
    if (mysqli_num_rows($result)>0){
        echo "<script>alert('密码不能与近期密码相同');</script>";
    }else{
        $sql="UPDATE user SET pass='$pass' WHERE name ='$name'";
        $result=mysqli_query($res,$sql);
            echo "修改成功请<a href='小米登录.html'>登录</a>";
        }
    }else{
    echo "账号不存在请<a href='注册.html'>注册</a>";

}

