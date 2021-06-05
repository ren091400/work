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
    var_dump ( $result->fetchAll (PDO::FETCH_NUM) );
    
    echo "<hr />";
    $result = $pdo->query ( "select * from account" );
    var_dump ( $result->fetchAll ( PDO::FETCH_ASSOC ) );
    
    $pdo = null;
} catch ( PDOException $e ) {
    echo "<p>PDO连接MySQL数据库服务器失败</p>";
    die ();
}
?>
