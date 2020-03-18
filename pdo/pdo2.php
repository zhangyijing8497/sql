<?php
    /**
     * PDO预处理
     */
    $user = 'root';
    $pass = '123456abc';
    $dbh = new PDO('mysql:host=localhost;dbname=1906open', $user, $pass);
    // var_dump($dbh);

    $id = $_GET['id'];
    echo "未处理的参数:".$id;

    // $sql = "select * from p_users where id=?";

    // 预处理
    $stmt = $dbh->prepare("select * from p_users where id=?");
    // 绑定参数
    $stmt->bindParam(1, $id);
    // 执行sql
    $stmt->execute();

    // 遍历
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<pre>';print_r($row);echo '</pre>';
    }

?>