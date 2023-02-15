<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM instrument';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor($products);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="header.css" rel="stylesheet">
  </head>
  <body>
  
  <?php include 'includes/header.php';?>

<main class="container">

  <div class="starter-template text-center">
    <h1>Our Products</h1>
  </div>

<div id="datatable">
</div>

  <section>
        <!-- display a table of products -->
        <table class="table table-hover table-dark">
          
  <thead>
    <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['instrument_id']; ?></td>
                <td><?php echo $product['instrument_name']; ?></td>
                <td><?php echo $product['unit_price']; ?></td>
                <td><?php echo $product['instrument_description']; ?></td>
            </tr>
            <?php endforeach; ?>
  </tbody>
</table>
    </section>
    <div id="carouselExampleIndicators" class="carousel slide">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/photo 1.jpg" class="d-block w-10" alt="guitar1">
    </div>
    <div class="carousel-item">
      <img src="images/photo 3.jpg" class="d-block w-10" alt="guitar2">
    </div>
    <div class="carousel-item">
      <img src="images/photo 6.jpg" class="d-block w-10" alt="guitar3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php';?>
  </body>
</html>
