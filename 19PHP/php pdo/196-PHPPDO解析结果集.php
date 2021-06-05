<?php
$dbms = "mysql";
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "account_pdo_db";
$dsn = "$dbms:host=$server;dbname=$dbname";
try {
    $pdo = new PDO ( $dsn, $username, $password );
    echo "<p>PDO连接MySQL数据库服务器成功</p>";
    $result = $pdo->query("select * from account");
    // $row=$result->fetch();
    // echo $row[2];
    // $row=$result->fetch(PDO::FETCH_ASSOC);
    // var_dump($row);
    // $row=$result->fetch(PDO::FETCH_NUM);
    // var_dump($row);
    // $row=$result->fetch(PDO::FETCH_OBJ);
    // var_dump($row);
    // echo $row->username;
    $pdo = null;
} catch ( PDOException $e ) {
    echo "<p>PDO连接MySQL数据库服务器失败</p>";
    die ();
}
?>
