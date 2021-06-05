<?php
$filename =$_GET['filename'];//获取文件参数
header("Content-Disposition:attachement;filename".$filename);//告诉浏览器以附件方式处理
header('Content-Length:'.filename($filename));
readfile($filename);