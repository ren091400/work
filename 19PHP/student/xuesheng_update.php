<body>
<style>
    body{
        background:greenyellow;
</style>
<?php
header("Content-type:text/html;charset=utf-8");
include_once('conn.php');
$row = mysqli_query($res,'update xuesheng set name="'.$_POST['name'].'",classid='.$_POST['banji'].',birthday="'.$_POST['birthday'].'" where id = '.$_POST['id']);
if($row){
	echo '<h1>OK</h1>';
	echo '<a href="index.php">返回列表</a>';
}
else{
	echo 'ERROR';
}
?>
</body>
