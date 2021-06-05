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
    
    echo "<hr />";
    $result = $pdo->query ( "select * from account" );
    var_dump ( $result->fetchColumn());
    echo "<hr />";
    var_dump ( $result->fetchColumn(1));
    echo "<hr />";
    var_dump ( $result->fetchColumn(2));
    echo "<hr />";
    var_dump ( $result->fetchColumn(3));
    
    $pdo = null;
} catch ( PDOException $e ) {
    echo "<p>PDO连接MySQL数据库服务器失败</p>";
    die ();
}
?>
