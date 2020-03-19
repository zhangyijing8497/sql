<?php
    // 使用mysqli 连接mysql数据库
    $mysqli = new mysqli("localhost", "root", "123456abc", "1906open");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '</br>';

    $name1 = $_GET['name'];
    echo "未处理的参数:".$name1;echo '</br>';
    $name2 = addslashes($name1);
    echo "处理后的参数:".$name2;echo '</br>';

    $sql = "select * from p_users where username='{$name2}'";

    $response = $mysqli->query($sql);

    // 遍历数据
    while($row = $response->fetch_assoc()){
        echo '<pre>';print_r($row);echo '</pre>';
    }
    

?>