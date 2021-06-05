<?php
include_once ("dbconfig.php");
$name=$_POST['username'];
$pass=$_POST['pass'];

$rep=mysqli_connect(HOST,USER,PASS,DBNAME);
$sql="select zhanghao,password from user where zhanghao='$name' and password='$pass'";


if(mysqli_num_rows(mysqli_query($rep,$sql))>0){
    session_start();
    $_SESSION['username']=$name;
    $_SESSION['password']=$pass;
    echo "<script>alert('登录成功')</script>";
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "window.location.href='index.php'";
    echo "</script>";
}else{
    if(mysqli_num_rows(mysqli_query($rep,"select zhanghao from user where zhanghao='$name'"))==0){
        echo "<script>alert('账号不存在！')</script>";
        echo "<script>history.go(-1)</script>";
    }else{
        echo "<script>alert('密码错误！')</script>";
        echo "<script>history.go(-1)</script>";
    }
}