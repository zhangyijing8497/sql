<?php
    // 使用mysqli 连接mysql数据库
    $mysqli = new mysqli("localhost", "root", "123456abc", "1906open");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '</br>';

    


?>