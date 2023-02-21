<?php
require_once('database.php');

// Get products
$queryCustomers = 'SELECT * FROM Customer';
$statement = $db->prepare($queryCustomers);
$statement->execute();
$customers = $statement->fetchAll();
$statement->closeCursor($customers);

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
    <h1>Customer Page</h1>

  </div>

  <section>
        <!-- display a table of products -->


        <table class="table table-hover table-dark">
  <thead>
    <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Telephone</th>
                <th>Customer Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer['customer_id']; ?></td>
                <td><?php echo $customer['customer_name']; ?></td>
                <td><?php echo $customer['customer_telephone']; ?></td>
                <td><?php echo $customer['customer_address']; ?></td>
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
