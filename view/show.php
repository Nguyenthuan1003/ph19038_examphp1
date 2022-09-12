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
    
<table class="table table-striped">
  <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>introduction</th>
        <th>Description</th>
        <th>Number Date</th>
        <th>Price</th>
        <th>Category</th>
        <th><a href="index.php?act=insert">Insert Tour</a></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tours as $t) : ?>
        <tr>
            <td><?=$t['tour_id']?></td>
            <td><?=$t['tour_name']?></td>
            <td><img src="<?=$t['image']?>" alt="image" width="100px"></td>
            <td><?=$t['intro']?></td>
            <td><?=$t['description']?></td>
            <td><?=$t['number_date']?></td>
            <td><?=$t['price']?></td>
            <td><?php
            foreach($cates as $c){
                if($t['cate_id'] == $c['cate_id']){
                    echo $c['cate_name'];
                }
            }
                ?>
        </td>

            <td><a href="index.php?act=edit&id=<?=$t['tour_id']?>">Update</a></br><a href="index.php?act=delete&id=<?=$t['tour_id']?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>