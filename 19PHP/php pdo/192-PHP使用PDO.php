<?php
$dbms = "mysql";
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "thkphp5";
$dsn = "$dbms:host=$server;dbname=$dbname";
try {
    var_dump($dsn);
    $pdo = new PDO ( $dsn, $username, $password );
    echo "PDO连接MySQL数据库服务器成功";
    $pdo = NULL;
} catch ( PDOException $e ) {
    echo "PDO连接MySQL数据库服务器失败";
    die ();
}
?>
