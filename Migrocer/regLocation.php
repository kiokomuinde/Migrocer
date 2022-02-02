<?php

if (isset($_POST['submit'])) {
session_start();


$name = $_POST ['name'];

$phone= $_POST['phone'];

$email = $_POST['email'];

$city = $_POST['city'];

$estate= $_POST['estate'];

$street = $_POST['street'];


if ($name && $phone && $email && $city && $estate && $street){

	#if (preg_match("/^[_\.0-9a-zA-z-]+@([0-9a-zA-z-][0-9a-zA-z-]+\.)+[0-9a-zA-z](2,6)$/i",$email)){


		if (is_numeric($phone)){


			if((strlen($phone) == 11 && $phone[0] == 0)){

				$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

				mysqli_select_db($con, "migrocer");
				
				$status = "unpaid";

				$order = mysqli_query (
					$con, "SELECT phone FROM goods WHERE phone = '$phone' and status = '$status'");
				
				$rphone = mysqli_query (
					$con, "SELECT phone FROM goods WHERE phone = '$phone'");
				$checkphone = mysqli_num_rows ($rphone);

				$order = mysqli_query (
					$con, "SELECT phone FROM goods WHERE phone = '$phone' and status = '$status'");
					$checkOrder = mysqli_num_rows ($order);

				if ($checkphone ==0){


					?>
				
					<script>
						alert("Sorry! The phone number <?php echo $phone ?> does not match the one you gave at the cart");
						window.location.assign("userSignup.html");
					</script>
				
				<?php
				}else if ($checkOrder ==0){?>

					<script>
						alert("You dont have unpaid order");
						window.location.assign("landing.php");
					</script>
				<?php
				}else{?>

					<!DOCTYPE html>
						<html lang="en">
						<head>
						    <meta charset="UTF-8">
						    <meta name="viewport" content="width=device-width, initial-scale=1.0">
						    <meta http-equiv="X-UA-Compatible" content="ie=edge">
						    <link rel="shortcut icon" type="image/JPEG" href="images/mig1.png">
						    <title>Payments|MI Grocer</title>
						    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
						    <link rel="stylesheet" href="locationStyle.css">
						</head>
						<body>

						<section class="container content-section col-md-10 col-xm-4 ">
						  <header class="main-header">
						    <hr>
						            <h1 class="band-name band-name-large" style="font-size: 6.5vw;">MI Grocer`</h1>
						   
						</nav>
						</header>
						</section>

					<?php

					$goody = mysqli_query(
					$con,"SELECT * FROM goods WHERE phone = $phone and status = '$status'");
					
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
						  <h1 style="color:black;" class="display-4">Order no: 
						  	<?php echo $_SESSION["orderId"] ?>
						  </h1>
					<?php
					foreach($mygoods_ar as $value) {
						
						
						?>
						
						  <p style="color:black;">
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
						  <div class="btn btn-lg" id="paypal-payment-button">
						  </div>

                        </div>
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
						
					</script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
					<script src="https://www.paypal.com/sdk/js?client-id=AYJq1D9kqlhiQJtrPZwAv5f9ihKgNoQ_bXLL0I27dOI8gAg6Srh0Gc83QdVq32qeT9DjfcdZDT7FW0Va&disable-funding=credit,card"></script>
					<script src="pay/index.js"></script>

				<footer class=" footer landingfoot p-4 footer-success">
		            <div class="container">
				      	<div class="row">      
					        <div class="col-6 col-sm-6 col-md-3">
					            <h5 class="linkh">LET US HELP YOU</h5>
                					<ul class="flinks">
	                    				<li><a href="#" class="">Help Center</a></li>
	                    				<li><a href="#" class="">Delivery</a></li>
	                    				<li><a href="#" class="">Return Policy</a></li>                                         
                    				</ul>

					        </div>
					        <div class="col-6 col-sm-6 col-md-3">
					                <h5 class="linkh">ABOUT MI GROCER</h5>
                					<ul class="flinks">
	                    				<li><a href="#" class="">About us</a></li>
	                    				<li><a href="#" class="">Terms & Conditions</a></li>
	                    				<li><a href="#" class="">Priacy policy</a></li>
        
                    
                					</ul>

					        </div>
		      


					        <div class="col-6 col-sm-6 col-md-3">
					                 <h5 class="linkh">MI Grocer UK</h5>
                					 <ul class="flinks">
                    					<li><a href="#" class="">London</a></li>
                    					<li><a href="#" class="">Bournemouth</a></li>
                   	 					<li><a href="#" class="">Southampton</a></li>
                    					<li><a href="#" class="">Portsmouth</a></li>
                    
                    
                					</ul>

					        </div>


					        <div class="col-6 col-sm-6 col-md-3">
					               
					                <h5 class="linkh">PAYMENT METHODS</h5>
                					<ul class="flinks">
                    					<li><a href="https://www.paypal.com/home" class="">Paypal</a></li>
                    
                    
                					</ul>

					        </div>
		      			</div>
        
				        <div class="row mt-2 bgf ">
				            <div  class="col-md-12 text-center">
						        <div class="copy">
							        <p id="copyhenry" >Copyright &copy;<script type="document.write(newDate().
							          getFullYear());"></script>

			                                All Rights Reserved|!|</p>
	                			</div>

	                		</div>  
	        			</div>
        			</div>
    			</footer>


			</body>
		</html>
					<?php


					
					}
					


$rphone = mysqli_query (
	$con, "SELECT phone FROM users WHERE phone = '$phone'");
	$checkphone = mysqli_num_rows ($rphone);

	if ($checkphone ==0){
		mysqli_query ($con, "INSERT INTO users (
		name, phone, email, city, estate, street) values ('$name', '$phone', '$email', '$city', '$estate', '$street')");
	}else{

		mysqli_query ($con,"UPDATE users SET name='$name', email='$email', phone='$phone', city='$city', estate='$estate', street='$street' WHERE phone=$phone");
	}

$registered = mysqli_affected_rows($con);


mysqli_close($con);
// echo "You have been registered successfully";

// include "home.php";

// header("Refresh:3; url=userSignup.html");
					}


}else{?>
	<script>
		alert("Sorry! The phone number <?php echo $phone ?> is too short or too long");
		window.location.assign("userSignup.html");
	</script>
    <!-- echo "Sorry! The Id number ".$phone." is either too short or too long"; -->
    <!-- header("Refresh:10; url=userSignup.php");  -->

<?php

}


  

}else{ 

	?>

    <script>
		alert("Sorry! The phone  number you entered <?php echo $id ?> is not a number");
		// window.location.assign("userSignup.php");
	</script>
	

 <?php }
}else{ ?>

	<script>
		alert("Sorry! Please fill in all the feilds");
		// window.location.assign("userSignup.php");
	</script>

<?php

}
}?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>