<?php
date_default_timezone_set("Asia/shanghai");
var_dump($_FILES);
//php在文件上传的过程中存储的名字
$tmp_name=count($_FILES['myfile']['tmp_name']);
for ($i=0;$i<$tmp_name;$i++){
    move_uploaded_file($_FILES['myfile']['tmp_name'][$i],"upload/".date("ymdhis").rand(0,999).'.txt');
}

//move_uploaded_file($temp_name[0],"myfile.txt");


//$file=$_POST['myfile[]'];
//var_dump($file);

//var_dump(file("2.txt"));
//fopen();创建
//fwrite();写入
//fclose();关闭
//读取单字符 - fgetc()，读取单行文件 - fgets()， 读取文件 - fread()
//

//readfile读取
    //bool copy(string $source,string $dest)---复制
    //bool rename(string $oldname,string $newname)--重命名
    //bool unlink(string $filename)--删除
    //int filesize(string $filename)--获取文件大小
//$name=fopen("w/5.txt", "r+");
//fwrite($name,"g狗瑞");
//fclose($name);
//使用 opendir() 函数打开指定目录，closedir([resource $dir_handle])关闭目录
