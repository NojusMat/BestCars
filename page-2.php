<?php
require_once('database.php');

// Get products
$queryServices = 'SELECT * FROM services';
$statement = $db->prepare($queryServices);
$statement->execute();
$services = $statement->fetchAll();
$statement->closeCursor($services);

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
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="header.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center ">
<h4>Here are some of our most popular services that we provide!</h4>
<div id="carouselExampleDark" class="carousel carousel-white slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/lighting.jpg" class="d-block w-100" alt="smol">
      <div class="carousel-caption d-none d-md-block">
        <h5>Soul Fest 2023</h5>
        <p>Here is some lighting that we did for the amazing Soul Festival This year.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/realstudio.jpg" class="d-block w-100" alt="studio">
      <div class="carousel-caption d-none d-md-block">
        <h5>Our Music Studio</h5>
        <p>Here is a picture of our state of the art music studio.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mic.jpg" class="d-block w-100" alt="lighting">
      <div class="carousel-caption d-none d-md-block">
        <h5>Microphone Set up</h5>
        <p>Here we have set up some microphones in a studio for one of our many happy clients.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1>Our Services</h1>
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

    <?php foreach ($services as $service) : ?>
            <tr>
                <td><?php echo $service['services_id']; ?></td>
                <td><?php echo $service['service_name']; ?></td>
                <td><?php echo $service['service_cost_per_day']; ?></td>
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
