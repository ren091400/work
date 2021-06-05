<?php
//数据类型8种
const i="hello world";
echo i;
$result=define("name","zhangsan");
echo name;

for($i=1;$i<=10;$i++){
	echo $i;
	echo "<br>";
}
$i=0;
while($i++<5){
    echo "乌鸡瑞1"."<br>";
while(true){
    echo "乌鸡瑞2"."<br>";
while(true){
    echo"乌鸡瑞3"."<br>";
        continue 3;
}
        echo "乌鸡瑞2卒";
}
        echo "乌鸡瑞1卒";
}
goto b;
a:
echo "hello";
return;
b:
echo"world";
goto a;

$filename="aa.txt";//操作文本
$res=fopen($filename,"r") or die("无法打开,请查看权限");//r操作权限
