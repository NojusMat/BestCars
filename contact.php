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

<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" class="form-control" name="name">
<div id="nameHelp" class="form-text">Please enter your full name.</div>
</p>
<br>

<p>
<div class="mb-3">
<label for="email" class="form-label">Email address</label><br>
<input type="text" class="form-control" name="email" > 
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</p>
</div>
<br>

<p>
<label for='address'>Address:</label> <br>
<input type="text"  class="form-control"name="address"> 
<div id="addressHelp" class="form-text">We'll never share your Address with anyone else.</div>
</p>
<br>

<label for='ecode'>Eire Code:</label> <br>
<input type="text" class="form-control" name="ecode"> 
<div id="addressHelp" class="form-text">Please enter your eire code in the following format A12 B123</div>
</p>
<br>

<label for='city'>City:</label> <br>
<input type="text" class="form-control" name="city"> 
<div id="addressHelp" class="form-text">Please enter your City</div>
</p>
<br>

<label for="region">Choose a region:</label>
<br>
  <select id="region"  class="form-control" name="region">
    <option value="Cork">Cork</option>
    <option value="Galway">Galway</option>
    <option value="Mayo">Mayo</option>
    <option value="Donegal">Donegal</option>
    <option value="Kerry">Kerry</option>
    <option value="Tipperary">Tipperary</option>
    <option value="Clare">Clare</option>
    <option value="Tyrone">Tyrone</option>
    <option value="Antrim">Antrim</option>
    <option value="Cavan">Cavan</option>
    <option value="Dublin">Dublin</option>
    <option value="Other">Other</option>
  </select>
  <div id="regionHelp" class="form-text">Please select a region above</div>
<p>

<br>

<label for="phone">Enter a phone number:</label><br>
<input type="tel"  class="form-control"id="phone" name="phone" placeholder="086-111-2233" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
<div id="telephoneHelp" class="form-text">Enter the phone number in the following format 123-456-7890</div>
<br>


<label for="satisfaction" class="form-label">How Satisfied Where you with our service</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">


<label for='message'>Message:</label> 
<textarea name="message" class="form-control"></textarea>
</p>


<input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit"><br>
</form>

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
