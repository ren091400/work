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
    echo "PDO连接MySQL数据库服务器成功";
    // 数据占位符
    $pre = $pdo->prepare ( "insert into account(username, password, email) values (?,?,?)" );
    $name = "Peter";
    $pwd = "333333";
    $pre->bindParam ( 1, $name );
    $pre->bindValue ( 2, $pwd );
    $pre->bindValue ( 3, "Peter@example.com" );
    $pre->execute ();
    
    $name = "张三";
    $pre->execute ( array (
            $name,
            "1245",
            "zhangsan@example.com" 
    ) );
    // 命名参数
    $pre = $pdo->prepare ( "insert into account(username, password, email) values (:name,:pwd,:email)" );
    $name = "老王";
    $pwd = "00544abc";
    $email = "laowang@example.com";
    $pre->bindParam ( ":name", $name );
    $pre->bindParam ( ":pwd", $pwd );
    $pre->bindParam ( ":email", $email );
    $pre->execute ();
    $name = "柴可夫斯基";
    $pre->execute ( array (
            ":name" => $name,
            ":pwd" => "love",
            ":email" => "abc@abc.com" 
    ) );
    $pdo = null;
} catch ( PDOException $e ) {
    echo "PDO连接MySQL数据库服务器失败";
    die ();
}
?>
