<?php include 'pages/includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
<!--            --><?php //foreach ($products as $product1)  { ?>
            <div class="col-md-8 mx-auto">
                <div class="mol-md-6">
                    <img src="assets/img/<?php echo $productDetails['image'] ?>" alt="" class="img-fluid">
                </div>
                <div class="mol-md-6">
                    <div class="card card-body">
                        <h5><?php echo $productDetails['name'] ?></h5>
                        <h5>TK. <?php echo $productDetails['price'] ?></h5>
                        <h5><?php echo $productDetails['description'] ?></h5>
                        <a href="" class="btn btn-success">Order Now</a>
                    </div>
                </div>
            </div>
<!--            --><?php //} ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'?>
