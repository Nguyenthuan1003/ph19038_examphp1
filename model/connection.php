<?php

    function connection(){
        try {
            $conn = new PDO("mysql: host=localhost; dbname=ph19038_examphp1; charset=utf8", $username="root", $password="");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }
    function getAll($sql){
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getOne($sql){
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    function set($sql){
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>