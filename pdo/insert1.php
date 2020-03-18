<?php
    /**
     * PDO 预处理 insert
     */
    $user = 'root';
    $pass = '123456abc';
    $dbh = new PDO('mysql:host=localhost;dbname=1906open', $user, $pass);
    // var_dump($dbh);

    // $sql = "insert into p_users (`cname`,`username`,`tel`,`email`) values ('test008','test008','12345098909','test008@qq.com')";


    $cname = "test008";
    $username = "test008";
    $tel = "12309845678";
    $email = "test008@qq.com";
    // 预处理
    $stmt = $dbh->prepare("insert into p_users (`cname`,`username`,`tel`,`email`) values (:cname,:username,:tel,:email)");
    // 绑定参数
    $stmt->bindParam(':cname', $cname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    // 执行sql
    $stmt->execute();

    // 执行sql语句
    //$res = $dbh->exec($sql);
    // $res = $dbh->query($sql);  //以对象的形式返回结果集
    $id = $dbh->lastInsertId();   //返回自增id
    // var_dump($res);
    echo '自增id:'.$id;
?>