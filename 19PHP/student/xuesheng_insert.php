<body>
<style>
    body{
        background:greenyellow;
</style>
<?php
header("Content-type:text/html;charset=utf-8");
include_once('conn.php');
$rows = mysqli_query($res,'insert into xuesheng(name,classid,birthday) value("'.$_POST['name'].'", '.$_POST['banji'].', "'.$_POST['birthday'].'")');
if($rows){
	echo '<h1>OK</h1>';
	echo '<a href="index.php">返回列表</a>';
}
else{
	echo 'ERROR';
}
?>
</body>
