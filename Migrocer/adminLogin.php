<?php 
	if (isset($_POST['submit'])) {
		$username = $_POST ['username'];

		$password = $_POST['password'];

		if ($username == "admin@MIGrocer.com" && $password == "adminMIG") {
			$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

			mysqli_select_db($con, "migrocer");
			?>

			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<link rel="shortcut icon" type="image/JPEG" href="images/mig1.png">
				<title>Admin|Paid Orders</title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<link rel="stylesheet" href="locationStyle.css">
			</head>
			<body>

						<section class="container content-section col-md-10 col-xm-4 ">
						  <header class="main-header">
						    <hr>
						            <h1 class="band-name band-name-large" style="font-size: 6.5vw;">Pending Orders</h1>
						   
						</nav>
						</header>
						</section>

		<?php

		$sql = "SELECT * FROM goods WHERE status = 'paid'";

		if($goody = mysqli_query($con, $sql)){

		if ($goody->num_rows > 0) {
		while ($row = mysqli_fetch_array($goody)){

						$mygoods= $row['goods'];
						$mytotal = $row['total'];
						$_SESSION["orderId"] = $row['id'];

						// echo $mytotal;
						
						
						$mygoods_ar = explode(',', $mygoods);

					

					$thegoods = count($mygoods_ar);

						$i =1;
					?>

					<div class="jumbotron">
						  <h1 style="color:black; font-size: 5.0vw;" class="display-4">Order no: 
						  	<?php echo $_SESSION["orderId"] ?>
						  </h1>
					<?php
					foreach($mygoods_ar as $value) {
						
						
						?>
						
						  <p style="color:black; ">
						  	<?php echo $i."."."&nbsp"; print $value; ?></p>
						
						<?php
							$i = $i+1;
					}

					// $_SESSION["orderId"] = $id;
					?>

					<hr class="my-4">
						  <h5 style="color:black;">Products(<?php echo $i?> items):  <span style="color:red;">$ <?php echo $mytotal ?></span></br>Delivery charges:   Free
						  </h5>
						  <hr class="my-3">
						  <h5 style="color:black;">Amount Payable:  <span style="color:red;" id="payable">$ <?php echo $mytotal ?></span></h5></br>
						 

                        </div>

                      <?php }
                       }}?>
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
						
					</script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
					<script src="https://www.paypal.com/sdk/js?client-id=AYJq1D9kqlhiQJtrPZwAv5f9ihKgNoQ_bXLL0I27dOI8gAg6Srh0Gc83QdVq32qeT9DjfcdZDT7FW0Va&disable-funding=credit,card"></script>
					<script src="pay/index.js"></script>
				</body>
				</html>
		<?php
		}
	}
?>