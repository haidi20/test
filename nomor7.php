<?php

$servername = "localhost";
$username = "root";
$password = "";
$db 	= 'bootcamp';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['name'])){
	$name = $_POST['name'];

	$sql = "INSERT INTO categories (name)
        VALUES ('".$_POST["name"]."')";

    $conn->query($sql);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<br>
			<h2>Add Category</h2>
			<form method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name Category</label>
			    <input type="input" name="name" class="form-control" placeholder="Name Category">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<br><br>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Category_name</th>
			      <th>Products</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			      <?php 
			      		$no = 1;
			      		$query = "SELECT categories.name as category_name, products.name as product_name
								  FROM categories, products
								  WHERE categories.id = products.category_id";

						$q_is = mysqli_query($conn, $query);
						 while ($row = mysqli_fetch_array($q_is)) {
						 	// var_dump($row);
					?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row['category_name']; ?></td>
				</tr>
				<?php }	?>
			  </tbody>
			</table>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- SELECT categories.name as categories_name, products.name as products_name 
								  FROM categories 
								  INNER JOIN products ON categories.id = products.category_id 
								  GROUP by categories_name -->