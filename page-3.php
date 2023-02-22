<?php
require_once('database.php');

// Get products
$queryCustomers = 'SELECT * FROM `service_customer`;';
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
    <h1>Transactions</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>


   <section>
        <!-- display a table of products -->


        <table class="table table-hover table-dark">
  <thead>
    <tr>
                <th>Customer ID</th>
                <th>Service ID</th>
                <th>Start Date</th>
                <th>End Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer['customer_id']; ?></td>
                <td><?php echo $customer['services_id']; ?></td>
                <td><?php echo $customer['date_started']; ?></td>
                <td><?php echo $customer['date_ended']; ?></td>
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
