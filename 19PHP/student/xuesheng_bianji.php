<body>
<style>
    body{
        background:greenyellow;
</style>

<h1>修改学生信息</h1>
<?php
header("Content-type:text/html;charset=utf-8");
include_once('conn.php');
$result = mysqli_query($res,'select * from xuesheng where id = '.$_GET['id'].' limit 1');
$row = mysqli_fetch_assoc($result);
$banji = mysqli_query($res,'select * from banji');
?>
<form action="xuesheng_update.php" method="post">
	<input type="hidden" name="id" value="<?=$row['id'] ?>">
	<p>姓名：<input type="text" name="name" value="<?=$row['name'] ?>"></p>
	<p>班级：<select name="banji">
			<?php
				while($rows = mysqli_fetch_assoc($banji)){
					echo '<option value="'.$rows['id'].'" ';
					if($row['classid'] == $rows['id']){
						echo 'selected';
					}
					echo '>'.$rows['name'].'</option>';
				}
			?>
			 </select>
	</p>
	<p>生日：<input type="text" name="birthday" value="<?=$row['birthday'] ?>"></p>
	<p><input type="submit"></p>
</form>
</body>