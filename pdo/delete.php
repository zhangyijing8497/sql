<?php
    $user = 'root';
    $pass = '123456abc';
    $dbh = new PDO('mysql:host=localhost;dbname=1906open', $user, $pass);
    // var_dump($dbh);

    $sql = "delete from p_users where id=15";
    // 执行sql语句
   $res = $dbh->exec($sql);
   var_dump($res);
?>