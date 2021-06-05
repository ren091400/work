<body>
<style>
table{border-collapse:collapse; width:100%;}
th,td{border:solid 1px #666; padding:10px;}
.center{text-align:center;}
    body{
        background:greenyellow;

</style>

<h1 align="center">学生信息管理系统</h1>
<p><a href="xuesheng_add.php">添加学生</a></p>
<?php
include_once('conn.php');
$result=mysqli_query($res,'select xuesheng.*,banji.name banji from xuesheng,banji where xuesheng.classid = banji.id');
echo '<table>';
echo '<tr><th>序号</th><th>姓名</th><th>班级</th><th>生日</th><th>操作</th></tr>';
while($row = mysqli_fetch_assoc($result)){
	echo '<tr>';
	echo '<td class="center">'.$row['id'].'</td>';
	echo '<td class="center">'.$row['name'].'</td>';
	echo '<td class="center">'.$row['banji'].'</td>';
	echo '<td class="center">'.$row['birthday'].'</td>';
	echo '<td class="center">';
	echo '<a href="xuesheng_bianji.php?id='.$row['id'].'">编辑</a> ';
	echo '<a href="xuesheng_del.php?id='.$row['id'].'" onclick="return confirm(\'确认删除id='.$row['id'].'的数据吗？\');">删除</a>';
	echo '</td>';
	echo '</tr>';
}
echo '</table>';
?>
</body>