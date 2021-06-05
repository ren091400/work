<?php
include_once  ("asd.php");
header("Content-type:text/html;charset=utf-8");
$sql="select * from user";
$result=mysqli_query($res,$sql);
$data=mysqli_fetch_all($result);
echo json_encode($data);