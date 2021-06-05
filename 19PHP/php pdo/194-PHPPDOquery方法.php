<?php
echo "<pre>";
$dbms = "mysql";
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "account_pdo_db";
$dsn = "$dbms:host=$server;dbname=$dbname";
try {
    $pdo = new PDO ( $dsn, $username, $password );
    echo "<p>PDO连接MySQL数据库服务器成功</p>";
    $result = $pdo->query ( "select * from account" );
    foreach ( $result as $row ) {
        var_dump ( $row );
    }
    $pdo = null;
} catch ( PDOException $e ) {
    echo "PDO连接MySQL数据库服务器失败";
    die ();
}
?>
