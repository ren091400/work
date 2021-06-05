<?php
//mysqli_connect('127.0.0.1','root', '');
//mysqli_select_db('student');
//mysqli_query('set names utf8');
header("Content-type:text/html;charset=utf-8");
$res=mysqli_connect("127.0.0.1","root","","student");
mysqli_query($res,"set names utf8");
//mysqli_set_charset($res,"utf-8");
if(!$res){
    echo mysqli_error("连接失败");
}