<?php


class mainController{

    function get_all_users(){
        $user = new DbConnection();
        $pdo = $user->get_db();
        $sql= "SELECT * FROM users";
        $query=$pdo->prepare($sql);
        $query->execute();
        $result= $query->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($result);
    //    echo json_encode(apache_request_headers());
        exit;
    }
    function get_data($data){
        echo json_encode($data);
        echo 'test';
    }


}
