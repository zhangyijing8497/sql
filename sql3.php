<?php
    // 使用mysqli 连接mysql数据库
    $mysqli = new mysqli("localhost", "root", "123456abc", "1906open");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '</br>';

    $name = $_GET['name'];
    echo "处理前的参数:".$_GET['name'];echo '</br>';
    echo "处理后的参数:".$name;echo '</br>';

    // sql语句
    $sql = "select * from p_users where username='{$name}'";
    echo $sql;echo '</br>';

    // 执行sql
    $response = $mysqli->query($sql);
    echo '<hr>';

    // 遍历数据
    while($row = $response->fetch_assoc()){
        echo '<pre>';print_r($row);echo '</pre>';
    }
?>