<body>
<style>
    body{
        background:greenyellow;
</style>
<h1>添加学生信息</h1>

<?php

include_once('conn.php');
$result = mysqli_query($res,'select * from banji');
?>
<form action="xuesheng_insert.php" method="post">
	<p>姓名：<input type="text" name="name"></p>
	<p>班级：<select name="banji">

			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
			?>
			 </select>
	</p>
	<p>生日：<input type="text" name="birthday"></p>
	<p><input type="submit"></p>
</form>
</body>