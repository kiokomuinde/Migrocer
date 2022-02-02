<?php
	session_start();
	if ($_SESSION["orderId"] ==NULL) {?> 

		<script >
		window.location.assign("landing.php");
		</script>


		<?php
	}
	$id = $_SESSION["orderId"];
	$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "migrocer");

	$goody = mysqli_query(
					$con,"SELECT * FROM goods WHERE id = $id");
					
		while ($row = mysqli_fetch_array($goody)){

			$goods= $row['goods'];
			$total = $row['total'];
			$id = $row['id'];
		}

		mysqli_query ($con, "INSERT INTO delivered (
		id, goods, total) values ('$id', '$goods','$total')");

		mysqli_query ($con, "DELETE FROM goods WHERE id = $id");
 ?>

 <script>
	alert("Thank you for shopping with us. See you soon!");
	window.location.assign("landing.php");
</script>

<?php  ?>
