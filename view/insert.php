<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>INSERT TUOR</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-6">
                <label for="">Introduction</label>
                <input type="text" class="form-control" name="intro">
            </div>
            <div class="col-md-6">
                <label for="">Description</label>
                <input type="text" class="form-control" name="desc">
            </div>
            <div class="col-md-6">
                <label for="">Number date</label>
                <input type="number" class="form-control" name="date">
            </div>
            <div class="col-md-6">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="col-md-6">
                <label for="">Category</label>
                <select name="cate" id="" class="form-control">
                    <?php foreach($cate as $c) : ?>
                        <option value="<?=$c['cate_id']?>"><?=$c['cate_name']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <input type="submit" value="Insert" class="btn btn-primary" name="save">
        <a href="index.php" class="btn btn-primary">Về trang chủ</a>
    </form>    
<?php 
    if(isset($err)){
        foreach($err as $e){
            echo $e . '<br>';
        }
    }
    if(isset($message)){
        echo $message;
    }
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>