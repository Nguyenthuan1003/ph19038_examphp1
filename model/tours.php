<?php
    function getTours(){
        $sql = "SELECT * FROM `tours`";
        return getAll($sql);
    }
    function getOneTour($id){
        $sql = "SELECT * FROM `tours` WHERE tour_id=".$id;
        return getOne($sql);
    }
    function insertTour($name, $img, $intro, $desc, $date, $price, $cateId){
        $sql = "INSERT INTO `tours`(`tour_name`, `image`, `intro`, `description`, `number_date`, `price`, `cate_id`)
         VALUES('".$name."','".$img."','".$intro."','".$desc."',".$date.",".$price.",".$cateId.")";
        set($sql);
    }
    function updateTour($id, $name, $img, $intro, $desc, $date, $price, $cateId){
        $sql = "UPDATE `tours` SET `tour_name`='".$name."'
        ,`image`='".$img."',`intro`='".$intro."',`description`='".$desc."'
        ,`number_date`=".$date.",`price`=".$price.",`cate_id`=".$cateId."
         WHERE tour_id=".$id;
        set($sql);
    }
    function deleteTour($id){
        $sql = "DELETE FROM `tours` WHERE tour_id=".$id;
        set($sql);
    }
?>