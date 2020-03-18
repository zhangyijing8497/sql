<?php
    $user = 'root';
    $pass = '123456abc';
    $dbh = new PDO('mysql:host=localhost;dbname=1906open', $user, $pass);
    // var_dump($dbh);

    $id = $_GET['id'];
    echo "未处理的参数:".$id;echo '</br>';
    $id = intval($_GET['id']);
    echo "处理后的参数:".$id;echo '</br>';

    // $sql = "select * from p_users";
    $sql = "select * from p_users where id={$id}";

    $res = $dbh->query($sql);

    while($row = $res->fetch(PDO::FETCH_ASSOC)){
        echo '<pre>';print_r($row);echo '</pre>';
    }

?>