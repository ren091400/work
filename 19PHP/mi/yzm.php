<?php
session_start();
//生成画布
$img=imagecreatetruecolor(100,40);
//设置画布颜色
$bg_color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
//填充颜色
imagefill($img,0,0,$bg_color);
//设置文本
$text="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQLSTUVWXYZ123456789";//设置出现的4个数字

$text2="";

for($i=0;$i<4;$i++) {
    $fontsize = 10;
    $font_color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
    //substr截取字符串
    //mt_rand();rand随机
    $str = substr($text, mt_rand(0, strlen($text) - 1), 1);

    $text2.=$str;

    $x=($i * 100 / 4) + mt_rand(5,10);
    $y=mt_rand(5,10);
    imagestring($img, $font_color, $x, $y, $str,$font_color);
}
//设置边距
for($i=1;$i<200;$i++){
    $tc_color=imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($img,rand(1,99),rand(0,30),$tc_color);
}
$_SESSION['text2']=$text2;

//for($i=1;$i<4;$i++){//干扰线段
//    $xd_color=imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
//    imageline($img,rand(0,99),rand(0,30),rand(0,99),rand(0,30),$xd_color);
//}
header('Content-type:image/png');//png像素密度比jpg高
imagepng($img);
imagedestroy();
