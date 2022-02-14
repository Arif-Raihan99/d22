<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?pages=products" class="navbar-brand">LoGo</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=products" class="nav-link">All-Products</a></li>
            <?php foreach ($categories as $category) { ?>
                <li class="nav-item"><a href="action.php?pages=cat-products&&category_id=<?php echo $category['id'] ?>" class="nav-link"><?php echo $category['name']?></a></li>
            <?php } ?>
        </ul>
    </div>
</nav>
