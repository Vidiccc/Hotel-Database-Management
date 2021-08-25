<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="phpDecoration.css">
	<title>Show</title>
</head>
<body>
	<header>
	<nav>
		<a href="#" class="active">Home</a> 		
		<a href="#">About Us</a> 	
		<a href="#">Service</a> 	
		<a href="#">Cuisine</a>		
		<a href="#">Booking</a>		
		<div id="login-container">
			<button id="login-button" onclick="document.getElementById('id01').style.display='block'">Login</button>
		</div>
	</nav>
	</header>

	<!-- Login Form -->
	<div id="id01" class="modal">
	<form class="modal-content animate" action="hotelDataManagement.html" method="post">
		  <div class="imgcontainer">
	      	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		    <img src="https://i.pinimg.com/originals/da/b9/13/dab913ab4fec9a9cb5b38b6ce8c00902.png" alt="Avatar" class="avatar">
		  </div>

	      <div class="container">
		    <label for="username"><b>Username</b></label>
	      	<input class="login-input" type="text" placeholder="Enter Username" name="username" required>

	      	<label for="psw"><b>Password</b></label>
	      	<input class="login-input" type="password" placeholder="Enter Password" name="psw" required>
		        
	      	<button type="submit">Login</button>
	      	<label>
	          <input type="checkbox" checked="checked" name="remember"> Remember me
	      	</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
  		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  		  <span class="psw">Forgot <a href="#">password?</a></span>
		</div>
		</form>
	</div>

	<!-- Front Page -->
	<div id="text-box1">
	<h1 id="title">DATABASE SHOW TABLE</h1> <hr id="hr">
	<p id="sub-title">Welcome</p>
	</div>

	<?php
	$type = $_POST["showType"];
	// connect to server
	$con = mysqli_connect("localhost","group1","group1");
	if ($con->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}

	// use database
	$db_selected = mysqli_select_db($con, "hotel");
	if (!$db_selected) {
		echo "Failed to select DB. <br>";
	}

	//create SQL query

	if($type == 'all'){
		$sql1 = "select * from customer";
		$sql2 = "select * from order_list";
		$sql3 = "select * from product";
		$sql4 = "select * from branch";
		$sql5 = "select * from offers";
		$sql6 = "select * from contains";
	}
	else if($type == 'customer'){
		$sql = "select * from " .$type;
	}
	else {
		$sql = "select * from " .$type;
	}


	//execute SQL query
	if($type == 'all') {
		$db_handler1 = mysqli_query($con, $sql1);
		$db_handler2 = mysqli_query($con, $sql2);
		$db_handler3 = mysqli_query($con, $sql3);
		$db_handler4 = mysqli_query($con, $sql4);
		$db_handler5 = mysqli_query($con, $sql5);
		$db_handler6 = mysqli_query($con, $sql6);
		if (!$db_handler1) {
			echo"<br>";	
			echo "Failed to get data1.<br>";
		  	echo "Error updating record: " . $con->error;
		}
		if (!$db_handler2) {
			echo"<br>";	
			echo "Failed to get data2.<br>";
		  	echo "Error updating record: " . $con->error;
		}
		if (!$db_handler3) {
			echo"<br>";	
			echo "Failed to get data3.<br>";
		  	echo "Error updating record: " . $con->error;
		}
		if (!$db_handler4) {
			echo"<br>";	
			echo "Failed to get data4.<br>";
		  	echo "Error updating record: " . $con->error;
		}
		if (!$db_handler5) {
			echo"<br>";	
			echo "Failed to get data5.<br>";
		  	echo "Error updating record: " . $con->error;
		}
		if (!$db_handler6) {
			echo"<br>";	
			echo "Failed to get data6.<br>";
		  	echo "Error updating record: " . $con->error;
		}
		?>
		
		<p>Search For All Tables <br>
		Here is your data you looking for.</p>
		<h2>Customer:</h2>

		<?php
		// output tables
		echo "<table id='customers'>
			<tr>
				<th>customer_id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>number</th>
				<th>gender</th>
				<th>street</th>
				<th>city</th>
				<th>state</th>
				<th>country</th>
				<th>contact</th>
				<th>email</th>
				<th>dob</th>
				<th>point</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler1,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["customer_id"] . "</td>";
				echo "<td>" . $row["first_name"] . "</td>";
				echo "<td>" . $row["last_name"] . "</td>";
				echo "<td>" . $row["personal_number"] . "</td>";
				echo "<td>" . $row["gender"] . "</td>";
				echo "<td>" . $row["street"] . "</td>";
				echo "<td>" . $row["city"] . "</td>";
				echo "<td>" . $row["state"] . "</td>";
				echo "<td>" . $row["country"] . "</td>";
				echo "<td>" . $row["contact"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["dob"] . "</td>";
				echo "<td>" . $row["point"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo"<br>";

			echo "<h2>Order_list:</h2>";
			echo "<table border=’1’>
			<tr>
				<th>order_id</th>
				<th>type</th>
				<th>payment_type</th>
				<th>payment_status</th>
				<th>order_date</th>
				<th>check_in</th>
				<th>check_out</th>
				<th>status</th>
				<th>total_cost</th>
				<th>note</th>
				<th>customer_id</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler2,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["order_id"] . "</td>";
				echo "<td>" . $row["type"] . "</td>";
				echo "<td>" . $row["payment_type"] . "</td>";
				echo "<td>" . $row["payment_status"] . "</td>";
				echo "<td>" . $row["order_date"] . "</td>";
				echo "<td>" . $row["checkin"] . "</td>";
				echo "<td>" . $row["checout"] . "</td>";
				echo "<td>" . $row["status"] . "</td>";
				echo "<td>" . $row["total_cost"] . "</td>";
				echo "<td>" . $row["note"] . "</td>";
				echo "<td>" . $row["customer_id"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo"<br>";

			echo "<h2>Product:</h2>";
			echo "<table border=’1’>
			<tr>
				<th>product_id</th>
				<th>name</th>
				<th>type</th>
				<th>time</th>
				<th>quantity</th>
				<th>price</th>
				<th>discount</th>
				<th>product_details</th>
				<th>status</th>
				<th>note</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler3,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["product_id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["type"] . "</td>";
				echo "<td>" . $row["time"] . "</td>";
				echo "<td>" . $row["quantity"] . "</td>";
				echo "<td>" . $row["price"] . "</td>";
				echo "<td>" . $row["discount"] . "</td>";
				echo "<td>" . $row["product_details"] . "</td>";
				echo "<td>" . $row["status"] . "</td>";
				echo "<td>" . $row["note"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo"<br>";
			
			echo "<h2>Branch:</h2>";
			echo "<table border=’1’>
			<tr>
				<th>branch_id</th>
				<th>name</th>
				<th>contact</th>
				<th>street</th>
				<th>city</th>
				<th>state</th>
				<th>country</th>
				<th>contact</th>
				<th>manager_fname</th>
				<th>manager_lname</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler4,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["branch_id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["contact"] . "</td>";
				echo "<td>" . $row["street"] . "</td>";
				echo "<td>" . $row["city"] . "</td>";
				echo "<td>" . $row["state"] . "</td>";
				echo "<td>" . $row["country"] . "</td>";
				echo "<td>" . $row["contact"] . "</td>";
				echo "<td>" . $row["manager_fname"] . "</td>";
				echo "<td>" . $row["manager_lname"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo"<br>";
			
			echo "<h2>Offers:</h2>";
			echo "<table border=’1’>
			<tr>
				<th>product_id</th>
				<th>branch_id</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler5,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["product_id"] . "</td>";
				echo "<td>" . $row["branch_id"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo"<br>";
			
			echo "<h2>Contains:</h2>";
			echo "<table border=’1’>
			<tr>
				<th>order_id</th>
				<th>product_id</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler6,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["order_id"] . "</td>";
				echo "<td>" . $row["product_id"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		mysqli_free_result($db_handler1);
		mysqli_free_result($db_handler2);
		mysqli_free_result($db_handler3);
		mysqli_free_result($db_handler4);
		mysqli_free_result($db_handler5);
		mysqli_free_result($db_handler6);
	}
	else {
		$db_handler = mysqli_query($con, $sql);
		if (!$db_handler) {
			echo"<br>";	
			echo "Failed to get data.<br>";
		  	echo "Error updating record: " . $con->error;
		}

		// output to table
		if($type == 'customer') {
			echo "<h2>Search for: Customer</h2>";

			echo "<table border=’1’>
			<tr>
				<th>customer_id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>number</th>
				<th>gender</th>
				<th>street</th>
				<th>city</th>
				<th>state</th>
				<th>country</th>
				<th>contact</th>
				<th>email</th>
				<th>dob</th>
				<th>point</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["customer_id"] . "</td>";
				echo "<td>" . $row["first_name"] . "</td>";
				echo "<td>" . $row["last_name"] . "</td>";
				echo "<td>" . $row["personal_number"] . "</td>";
				echo "<td>" . $row["gender"] . "</td>";
				echo "<td>" . $row["street"] . "</td>";
				echo "<td>" . $row["city"] . "</td>";
				echo "<td>" . $row["state"] . "</td>";
				echo "<td>" . $row["country"] . "</td>";
				echo "<td>" . $row["contact"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["dob"] . "</td>";
				echo "<td>" . $row["point"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} elseif ($type == 'order_list') {
			echo "<h2>Search for: Order list</h2>";

			echo "<table border=’1’>
			<tr>
				<th>order_id</th>
				<th>type</th>
				<th>payment_type</th>
				<th>payment_status</th>
				<th>order_date</th>
				<th>check_in</th>
				<th>check_out</th>
				<th>status</th>
				<th>total_cost</th>
				<th>note</th>
				<th>customer_id</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["order_id"] . "</td>";
				echo "<td>" . $row["type"] . "</td>";
				echo "<td>" . $row["payment_type"] . "</td>";
				echo "<td>" . $row["payment_status"] . "</td>";
				echo "<td>" . $row["order_date"] . "</td>";
				echo "<td>" . $row["checkin"] . "</td>";
				echo "<td>" . $row["checout"] . "</td>";
				echo "<td>" . $row["status"] . "</td>";
				echo "<td>" . $row["total_cost"] . "</td>";
				echo "<td>" . $row["note"] . "</td>";
				echo "<td>" . $row["customer_id"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} elseif ($type == 'product'){
			echo "<h2>Search for: Product</h2>";

			echo "<table border=’1’>
			<tr>
				<th>product_id</th>
				<th>name</th>
				<th>type</th>
				<th>time</th>
				<th>quantity</th>
				<th>price</th>
				<th>discount</th>
				<th>product_details</th>
				<th>status</th>
				<th>note</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["product_id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["type"] . "</td>";
				echo "<td>" . $row["time"] . "</td>";
				echo "<td>" . $row["quantity"] . "</td>";
				echo "<td>" . $row["price"] . "</td>";
				echo "<td>" . $row["discount"] . "</td>";
				echo "<td>" . $row["product_details"] . "</td>";
				echo "<td>" . $row["status"] . "</td>";
				echo "<td>" . $row["note"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} elseif ($type == 'branch'){
			echo "<h2>Search for: Branch</h2>";

			echo "<table border=’1’>
			<tr>
				<th>branch_id</th>
				<th>name</th>
				<th>contact</th>
				<th>street</th>
				<th>city</th>
				<th>state</th>
				<th>country</th>
				<th>contact</th>
				<th>manager_fname</th>
				<th>manager_lname</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["branch_id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["contact"] . "</td>";
				echo "<td>" . $row["street"] . "</td>";
				echo "<td>" . $row["city"] . "</td>";
				echo "<td>" . $row["state"] . "</td>";
				echo "<td>" . $row["country"] . "</td>";
				echo "<td>" . $row["contact"] . "</td>";
				echo "<td>" . $row["manager_fname"] . "</td>";
				echo "<td>" . $row["manager_lname"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} elseif ($type == 'offers'){
			echo "<h2>Search for: Offers</h2>";

			echo "<table border=’1’>
			<tr>
				<th>product_id</th>
				<th>branch_id</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["product_id"] . "</td>";
				echo "<td>" . $row["branch_id"] . "</td>";
				echo "</tr>";
			}
			echo"</table>";
		} else{
		echo "<h2>Search for: Contains</h2>";

			echo "<table border=’1’>
			<tr>
				<th>order_id</th>
				<th>product_id</th>
			</tr>";

			while($row = mysqli_fetch_array($db_handler,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>" . $row["order_id"] . "</td>";
				echo "<td>" . $row["product_id"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
	}
		mysqli_free_result($db_handler);
	}


	//close connection
	mysqli_close($con);
	?>
</body>
</html>

