<?php
require_once('database.php');

// Get products
$queryInstruments = 'SELECT * FROM instrument';
$statement = $db->prepare($queryInstruments);
$statement->execute();
$instruments = $statement->fetchAll();
$statement->closeCursor($instruments);

?>

<?php
$searchErr = '';
$instrument='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from instrument where instrument_id like '%$search%' or instrument_name like '%$search%'or unit_price like '%$search%'or instrument_description like '%$search%'");
        $stmt->execute();
        $instrument = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
?>

  
  <?php include 'includes/header.php';?>

<main class="container">
<div class="starter-template text-center">
    <h1>Top Products</h1>
  </div>
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <img class="img-fluid" src="images/photo 1.jpg" alt="Generic placeholder image" width="500" height="200">
    <h2>Best Seller</h2>
    <p>Classic series Body: Basswood Arched top Set-in neck: Okoume Fretboard: Laurel Trapeze inlays Fretboard radius: 305 mm (12") Neck profile: C Cream bindings on body and neck 22 Medium jumbo frets Scale: 628 mm
</p>
    <p><a class="btn btn-secondary" href="#" role="button">View Product</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="img-fluid" src="images/purple.jpg" alt="Generic placeholder image" width="500" height="200">
    <h2>Most Recommended</h2>
    <p>Vintage series Body: Mahogany (Entandrophragma cylindricum, Indonesian mahogany/sapele) Arched top made of AAA flamed maple Neck profile: C Fretboard radius: 305 mm (12") Scale: 628 mm Nut width: 43 mm

    </p>
    <p><a class="btn btn-secondary" href="#" role="button">View Product</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="img-fluid " src="images/photo 6.jpg" alt="Generic placeholder image" width="500" height="200">
    <h2 class="text-center ">Our Choice</h2>
    <p>Body: Mahogany Set-in neck: Mahogany Fingerboard: Macassar ebony Fingerboard inlays: Dots
    Neck profile: Fat '59 Fingerboard radius: 305 mm Scale: 628 mm Nut width: 43 mm This guitar plays sick riffs</p>
    <p><a class="btn btn-secondary" href="#" role="button">View Product</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

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

  <?php

$con = new PDO("mysql:host=localhost;dbname=year2ca2",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE instrument_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>ID</th>
				<th>NAME</th>
        <th>PRICE</th>
        <th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->instrument_id; ?></td>
				<td><?php echo $row->instrument_name;?></td>
        <td><?php echo $row->unit_price;?></td>
        <td><?php echo $row->instrument_description;?></td>
			</tr>

		</table>
<?php 
	}
		else{
			echo "Item does not exist";
		}
}

?>


    <tr>

    <?php foreach ($instruments as $instrument) : ?>
            <tr>
                <td><?php echo $instrument['instrument_id']; ?></td>
                <td><?php echo $instrument['instrument_name']; ?></td>
                <td><?php echo $instrument['unit_price']; ?></td>
                <td><?php echo $instrument['instrument_description']; ?></td>
            </tr>
            <?php endforeach; ?>
  </tbody>
</table>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php';?>
  </body>
</html>
