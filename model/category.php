<?php
    function getCategory(){
        $sql = "SELECT * FROM `categories`";
        return getAll($sql);
    }
    function getOneCategory($id){
        $sql = "SELECT * FROM `categories` WHERE cate_id=".$id;
        return getOne($sql);
    }
    function insertCategory($name){
        $sql = "INSERT INTO `categories`(`cate_name`) VALUES('".$name."')";
        set($sql);
    }
    function updateCategory($id, $name){
        $sql = "UPDATE `categories` SET `cate_name`='".$name."' WHERE cate_id=".$id;
        set($sql);
    }
    function deleteCategory($id){
        $sql = "DELETE FROM `categories` WHERE cate_id=".$id;
        set($sql);
    }
?>