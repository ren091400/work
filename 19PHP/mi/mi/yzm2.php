<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/3/23
 * Time: 10:43
 */
//登录:账号密码全对  登录成功
//    账号对 密码错 登录失败  --> 提示 -->继续输入密码/忘记密码(修改密码)
//    账号错 密码对 登录失败  --> 提示 -->继续输入账号/注册账号
//    账号密码全错 -->提示-->注册账号-->登录
header("Content-type:text/html;charset=utf-8");
SESSION_start();
include_once("asd.php");
$name=$_POST['user'];
$pass=$_POST['pass'];
$yzm=$_POST['yzm'];

if(mysqli_num_rows(mysqli_query($res,"select name ,pass from user WHERE name ='$name' AND pass='$pass'"))>0){
   if(strtolower($yzm)==strtolower($_SESSION['text2'])){
    echo "<script>alert('登录成功')</script>";
    }else{
        echo "<script>alert('验证码错误')</script>";
        echo "<script>history.go(-1);</script>";
    }
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "window.loacation.href='xiaomi.html'";
    echo "</script>";
}else{
    if(mysqli_num_rows(mysqli_query($res,"select name  from user WHERE name ='$name'"))==0){
        echo "<a href='注册.html'>账号不存在，点我注册</a>";
    }else{
        if(mysqli_num_rows(mysqli_query($res,"select name  from user WHERE name ='$name'"))>0){
            echo "<a href='forget.html'>忘记密码，点我修改</a>";
        }
    }
}
//查询数据库
mysqli_close($res);