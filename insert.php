<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="phpDecoration.css">
	<title>Insert</title>
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
	<h1 id="title">DATABASE UPDATE</h1> <hr id="hr">
	<p id="sub-title">Welcome</p>
	</div>


<?php
//get input value
$type = $_POST["itype"];
$id = $_POST["uid"];
$att2 = $_POST["uatt2"];

if($type == 'customer'){
	$att3 = $_POST["uatt3"];
	$att4 = $_POST["uatt4"];
	$att5 = $_POST["uatt5"];
	$att6 = $_POST["uatt6"];
	$att7 = $_POST["uatt7"];
	$att8 = $_POST["uatt8"];
	$att9 = $_POST["uatt9"];
	$att10 = $_POST["uatt10"];
	$att11 = $_POST["uatt11"];
	$att12 = $_POST["uatt12"];
	$att13 = $_POST["uatt13"];
}
else if($type == 'order_list'){
	$att3 = $_POST["uatt3"];
	$att4 = $_POST["uatt4"];
	$att5 = $_POST["uatt5"];
	$att6 = $_POST["uatt6"];
	$att7 = $_POST["uatt7"];
	$att8 = $_POST["uatt8"];
	$att9 = $_POST["uatt9"];
	$att10 = $_POST["uatt10"];
	$att11 = $_POST["uatt11"];
}
else if($type == 'product') {
	$att3 = $_POST["uatt3"];
	$att4 = $_POST["uatt4"];
	$att5 = $_POST["uatt5"];
	$att6 = $_POST["uatt6"];
	$att7 = $_POST["uatt7"];
	$att8 = $_POST["uatt8"];
	$att9 = $_POST["uatt9"];
	$att10 = $_POST["uatt10"];
}
else if($type == 'branch') {
	$att3 = $_POST["uatt3"];
	$att4 = $_POST["uatt4"];
	$att5 = $_POST["uatt5"];
	$att6 = $_POST["uatt6"];
	$att7 = $_POST["uatt7"];
	$att8 = $_POST["uatt8"];
	$att9 = $_POST["uatt9"];
}

//create SQL query
if($type == 'customer'){
	$sql = "insert into customer values (".$id.", '".$att2."', '".$att3."', ".$att4.", '".$att5."', '".$att6."', '".$att7."', '".$att8."', '".$att9."', '".$att10."', '".$att11."', '".$att12."', ".$att13.")";
	$sql2 = "select * from " .$type;
}
else if($type == 'order_list'){
	$sql = "insert into order_list values (".$id.", '".$att2."', '".$att3."', '".$att4."' , '".$att5."', '".$att6."', '".$att7."', '".$att8."', ".$att9.",  '".$att10."', ".$att11.")";
	$sql2 = "select * from " .$type;
}
else if($type == 'product') {
	$sql =  "insert into product values ( ".$id.", '".$att2."', '".$att3."', '".$att4."', ".$att5.", '".$att6."', '".$att7."', '".$att8."', '".$att9."',  '".$att10."')";
	$sql2 = "select * from " .$type;
}
else if($type == 'branch') {
	$sql = "insert into branch values (".$id.", '".$att2."', '".$att3."', '".$att4."', '".$att5."', '".$att6."', '".$att7."', '".$att8."', '".$att9."')";
	$sql2 = "select * from " .$type;
}
else if($type == 'contains') {
	$sql = "insert into contains (product_id, order_id) values ( ".$id.", ".$att2.")";
	$sql2 = "select * from " .$type;
}
else if($type == 'offers') {
	$sql = "insert into offers (product_id, branch_id) values ( ".$att2.", ".$id.")";
	$sql2 = "select * from " .$type;
}

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


//execute SQL query
$db_handler = mysqli_query($con, $sql);
if (!$db_handler) {
	echo"<br>";	
	echo "Failed to get data1.<br>";
  	echo "Error updating record: " . $con->error;
}
else {
	echo "<p>Record updated successfully! </p>" ;
}

$result = mysqli_query($con, $sql2);
if (!$result) {
	echo"<br>";	
	echo "Failed to get data2.<br>";
  	echo "Error show table: " . $con->error;
}
// output to table
if($db_handler) {
	if($type == 'customer') {
		echo "<h2>customer:</h2>";
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

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
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
		echo "<h2>order_list:</h2>";
		echo "<table border=’1’>
		<tr>
			<th>order_id</th>
			<th>type</th>
			<th>payment_type</th>
			<th>payment_status</th>
			<th>order_date</th>
			<th>checkin</th>
			<th>checkout</th>
			<th>status</th>
			<th>total_cost</th>
			<th>note</th>
			<th>customer_id</th>
		</tr>";

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
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
		} elseif($type == 'product') {
		echo "<h2>product:</h2>";
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

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
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
		} elseif($type == 'branch'){
		echo "<h2>branch:</h2>";
		echo "<table border=’1’>
		<tr>
			<th>branch_id</th>
			<th>name</th>
			<th>contact</th>
			<th>street</th>
			<th>city</th>
			<th>state</th>
			<th>country</th>
			<th>manager_fname</th>
			<th>manager_lname</th>
		</tr>";

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			echo "<tr>";
			echo "<td>" . $row["branch_id"] . "</td>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["contact"] . "</td>";
			echo "<td>" . $row["street"] . "</td>";
			echo "<td>" . $row["city"] . "</td>";
			echo "<td>" . $row["state"] . "</td>";
			echo "<td>" . $row["country"] . "</td>";
			echo "<td>" . $row["manager_fname"] . "</td>";
			echo "<td>" . $row["manager_lname"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		}elseif($type == 'offers'){
		echo "<h2>offer:</h2>";
		echo "<table border=’1’>
		<tr>
			<th>product_id</th>
			<th>branch_id</th>
		</tr>";

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			echo "<tr>";
			echo "<td>" . $row["product_id"] . "</td>";
			echo "<td>" . $row["branch_id"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		}else{
		echo "<h2>contains:</h2>";
		echo "<table border=’1’>
		<tr>
			<th>order_id</th>
			<th>product_id</th>
		</tr>";

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			echo "<tr>";
			echo "<td>" . $row["order_id"] . "</td>";
			echo "<td>" . $row["product_id"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}
//mysqli_free_result($result);

//close connection
mysqli_close($con);
?>
</body>
</html>
