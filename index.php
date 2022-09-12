<?php
    require_once './model/connection.php';
    require_once './model/category.php';
    require_once './model/tours.php';

    $tours = getTours();
    $cates = getCategory();
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'insert':
                    if(isset($_POST['save'])){
                        $name = $_POST['name'];
                        $image = $_FILES['image'];
                        $intro = $_POST['intro'];
                        $desc = $_POST['desc'];
                        $date = $_POST['date'];
                        $price = $_POST['price'];
                        $cate = $_POST['cate'];
                        $dir = './update/';
                        $path = pathInfo($image['name'], PATHINFO_EXTENSION);
                        $img = ['jpg','jpeg', 'png'];
                        $err = [];
                        if(empty($name)){
                            $err['name'] = "tên không hợp lệ";
                        }
                        if($image['size'] <= 0){
                            $err['image'] = 'Bạn chưa nhập ảnh';
                        }
                        if($image['size'] >= 2036000){
                            $err['image'] = 'Dung lượng ảnh quá lớn';
                        }
                        if($image['size'] > 0){
                            if(!in_array($path, $img)){
                                $err['image'] = 'Định dạng ảnh không hợp lệ';
                            }
                        }
                        if(empty($date) || $date < 0){
                            $err['date'] = 'Số ngày bắt buộc nhập và lớn hơn 0';
                        }
                        if(empty($price) || $price < 0){
                            $err['price'] = 'Giá bắt buộc nhập và lớn hơn 0';
                        }
                        if(!array_filter($err)){
                            move_uploaded_file($image['tmp_name'], $dir.$image['name']);
                            insertTour($name, $dir.$image['name'], $intro, $desc, $date, $price, $cate);
                            $message = 'Thêm thành công';
                        }
                    }
                    $cate = getCategory();
                    include './view/insert.php';
                break;
            case 'delete':
                if(isset($_GET['id'])){
                    deleteTour($_GET['id']);
                }
                $cates = getCategory();
                $tours = getTours();
                include './view/show.php';

                break;
            case 'edit':
                if(isset($_GET['id'])){
                    $tour = getOneTour($_GET['id']);
                    $cates = getCategory();
                }
                include './view/edit.php';
                break;
            case 'update':
                if(isset($_POST['save'])){
                    $id = $_POST['id'];
                    $img_default = $_POST['image_default'];
                    $name = $_POST['name'];
                    $image = $_FILES['image'];
                    $intro = $_POST['intro'];
                    $desc = $_POST['desc'];
                    $date = $_POST['date'];
                    $price = $_POST['price'];
                    $cate = $_POST['cate'];
                    $dir = './update/';
                    $path = pathInfo($image['name'], PATHINFO_EXTENSION);
                    $img = ['jpg','jpeg', 'png'];
                    $err = [];
                    if(empty($name)){
                        $err['name'] = "tên không hợp lệ";
                    }
                    if($image['size'] >= 2036000){
                        $err['image'] = 'Dung lượng ảnh quá lớn';
                    }
                    if($image['size'] > 0){
                        if(!in_array($path, $img)){
                            $err['image'] = 'Định dạng ảnh không hợp lệ';
                        }
                    }
                    if(empty($date) || $date < 0){
                        $err['date'] = 'Số ngày bắt buộc nhập và lớn hơn 0';
                    }
                    if(empty($price) || $price < 0){
                        $err['price'] = 'Giá bắt buộc nhập và lớn hơn 0';
                    }
                    if(!array_filter($err)){
                        if($image['size'] > 0){
                            $imgName = $dir.$image['name'];
                            move_uploaded_file($image['tmp_name'], $imgName);
                        }
                        if($image['size'] <= 0){
                            $imgName = $img_default;
                        }
                        updateTour($id,$name, $imgName, $intro, $desc, $date, $price, $cate);
                        $message = 'Cập nhật thành công';
                    }
                }
                $tour = getOneTour($id);
                $cates = getCategory();
                include './view/edit.php';
                break;
            default:
                # code...
                break;
        }
    }else{
        include './view/show.php';
    }
?>