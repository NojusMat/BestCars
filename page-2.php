<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM services';
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
    <link href="mystyle.css" rel="stylesheet">
  
  </head>
  <body>
    
  <?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Our Services</h1>
<p>Here are some of our most popular services that we provide!</p>

    <section>
        <!-- display a table of products -->
        <table class="table table-hover table-dark">
          
  <thead>
    <tr>
                <th>Service ID</th>
                <th>Service Name</th>
                <th>Cost Per Day</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['services_id']; ?></td>
                <td><?php echo $product['service_name']; ?></td>
                <td><?php echo $product['service_cost_per_day']; ?></td>
            </tr>
            <?php endforeach; ?>
  </tbody>
</table>
    </section>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php';?>
  </body>
</html>
