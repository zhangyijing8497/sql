<?php
    $user = 'root';
    $pass = '123456abc';
    $dbh = new PDO('mysql:host=localhost;dbname=1906open', $user, $pass);
    // var_dump($dbh);

    $sql = "update p_users set cname='abcabc',username='abcabc',tel='29384782541',email='abcabc@qq.com' where id=18";
    // 执行sql语句
   $res = $dbh->exec($sql);
   var_dump($res);
?>