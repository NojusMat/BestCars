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
    <h1>Contact</h1>
  </div>
  <!-- Wrap the rest of the page in another container to center all the content. -->

<div id="datatable">
</div>

  <section>
        <!-- display a table of products -->
        <table class="table table-hover table-dark">
          
  <thead>
    
  </thead>
  <tbody>
    <tr>

  </tbody>
</table>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php';?>
  </body>
</html>
