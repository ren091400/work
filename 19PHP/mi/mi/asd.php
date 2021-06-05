<?php
//$name=$_POST['user'];
//$pass=$__POST['pass'];

$res=mysqli_connect("127.0.0.1","root","","student");
mysqli_set_charset($res,"utf-8");
if(!$res){
    echo mysqli_error("连接失败");
}