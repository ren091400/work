<?php
echo "<pre>";
$dbms = "mysql";
$server = "localhost";
$username = "root";
$password = "123456";
$dsn = "$dbms:host=$server";
try {
    $pdo = new PDO ( $dsn, $username, $password );
    echo "PDO连接MySQL数据库服务器成功";
    print ($pdo->exec ( "create database account_pdo_db" )) ;
    print ($pdo->exec ( "use account_pdo_db" )) ;
    print ($pdo->exec ( "set names utf8" )) ;
    print ($pdo->exec ( "create table account(id int auto_increment primary key, username varchar(50) not null, password varchar(50) not null, email  varchar(50) not null)" )) ;
    print ($pdo->exec ( "insert into account(username, password, email) values ('Jack', '123456', 'jack@example.com')" )) ;
    print ($pdo->exec ( "insert into account(username, password, email) values ('Lucy', '123456', 'lucy@example.com')" )) ;
    $pdo = null;
} catch ( PDOException $e ) {
    echo "PDO连接MySQL数据库服务器失败";
    die ();
}
?>
