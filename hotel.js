function update(obj) {
	var att1 = document.getElementById('uatt1');
	var att2 = document.getElementById('uatt2');
	var att3 = document.getElementById('uatt3');
	var att4 = document.getElementById('uatt4');
	var att5 = document.getElementById('uatt5');
	var att6 = document.getElementById('uatt6');
	var att7 = document.getElementById('uatt7');
	var att8 = document.getElementById('uatt8');
	var att9 = document.getElementById('uatt9');
	var att10 = document.getElementById('uatt10');
	var att11 = document.getElementById('uatt11');
	var att12 = document.getElementById('uatt12');
	var att13 = document.getElementById('uatt13');

	var value = obj.value;
  	if (value === "customer") {
    	att1.innerHTML = "<td >customer_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >New first name:</td>" 
    	+ "<td><input type='text' name='uatt2' required></td>";
    	att3.innerHTML = "<td >New last name:</td>"
		+ "<td><input type='text' name='uatt3' required></td>";
    	att4.innerHTML = "<td >Personal number:</td>"
		+ "<td><input type='number' name='uatt4' required></td>";
		att5.innerHTML = "<td >Gender:</td>"
		+ "<td><input type='text' name='uatt5' required></td>";
		att6.innerHTML = "<td >Street:</td>"
		+ "<td><input type='text' name='uatt6' required></td>";
		att7.innerHTML = "<td >City:</td>"
		+ "<td><input type='text' name='uatt7' required></td>";
		att8.innerHTML = "<td >State:</td>"
		+ "<td><input type='text' name='uatt8' required></td>";
		att9.innerHTML = "<td >Country:</td>"
		+ "<td><input type='text' name='uatt9' required></td>";
		att10.innerHTML = "<td >Contact:</td>"
		+ "<td><input type='number' name='uatt10' required></td>";
		att11.innerHTML = "<td >Email:</td>"
		+ "<td><input type='text' name='uatt11' required></td>";
		att12.innerHTML = "<td >Date of Birth:</td>"
		+ "<td><input type='date' name='uatt12' placeholder='yyyy-mm-dd' required></td>";
		att13.innerHTML = "<td >Point:</td>"
		+ "<td><input type='number' name='uatt13' required></td>";
  	}
  	else if (value === "order_list") {
    	att1.innerHTML = "<td >order_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >Type:</td>" 
    	+ "<td><input type='text' name='uatt2' required></td>";
    	att3.innerHTML = "<td >Payment type:</td>"
    	+ "<td><input type='text' name='uatt3' required></td>";
    	att4.innerHTML = "<td >Payment status:</td>"
		+ "<td><input type='text' name='uatt4' required></td>";
		att5.innerHTML = "<td >Order date:</td>" 
    	+ "<td><input type='date' name='uatt5' placeholder='yyyy-mm-dd' required></td>";
    	att6.innerHTML = "<td >Check in:</td>" 
    	+ "<td><input type='date' name='uatt6' placeholder='yyyy-mm-dd' required></td>";
    	att7.innerHTML = "<td >Check out:</td>" 
    	+ "<td><input type='date' name='uatt7' placeholder='yyyy-mm-dd' required></td>";
    	att8.innerHTML = "<td >Status:</td>" 
    	+ "<td><input type='text' name='uatt8' required></td>";
    	att9.innerHTML = "<td >Total cost:</td>" 
    	+ "<td><input type='number' name='uatt9' required></td>";
    	att10.innerHTML = "<td >Note:</td>" 
    	+ "<td><input type='text' name='uatt10' required></td>";
    	att11.innerHTML = "<td >customer_id:</td>" 
    	+ "<td><input type='number' name='uatt11' required></td>";
    	att12.innerHTML = "";
    	att13.innerHTML = "";
  	}
  	else if (value === "product") {
    	att1.innerHTML = "<td >product_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >Product name:</td>" 
    	+ "<td><input type='text' name='uatt2' required></td>";
    	att3.innerHTML = "<td >Type:</td>"
		+ "<td><input type='text' name='uatt3' required></td>";
    	att4.innerHTML = "<td >Time:</td>"
		+ "<td><input type='time' name='uatt4' required></td>";
		att5.innerHTML = "<td >Quantity:</td>"
		+ "<td><input type='number' name='uatt5' required></td>";
		att6.innerHTML = "<td >Price:</td>"
		+ "<td><input type='number' name='uatt6' required></td>";
		att7.innerHTML = "<td >Discount:</td>"
		+ "<td><input type='text' name='uatt7' required></td>";
		att8.innerHTML = "<td >Product details:</td>"
		+ "<td><input type='text' name='uatt8' required></td>";
		att9.innerHTML = "<td >Status:</td>"
		+ "<td><input type='text' name='uatt9' required></td>";
		att10.innerHTML = "<td >Note:</td>"
		+ "<td><input type='text' name='uatt10' required></td>";
		att11.innerHTML = "";
    	att12.innerHTML = "";
    	att13.innerHTML = "";
  	}
  	else if (value === "branch") {
    	att1.innerHTML = "<td >branch_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >name:</td>" 
    	+ "<td><input type='text' name='uatt2' required></td>";
    	att3.innerHTML = "<td >Contact:</td>"
		+ "<td><input type='number' name='uatt3' required></td>";
		att4.innerHTML = "<td >Street:</td>"
		+ "<td><input type='text' name='uatt4' required></td>";
		att5.innerHTML = "<td >City:</td>"
		+ "<td><input type='text' name='uatt5' required></td>";
		att6.innerHTML = "<td >State:</td>"
		+ "<td><input type='text' name='uatt6' required></td>";
		att7.innerHTML = "<td >Country:</td>"
		+ "<td><input type='text' name='uatt7' required></td>";
		att8.innerHTML = "<td >Manager first name:</td>"
		+ "<td><input type='text' name='uatt8' required></td>";
		att9.innerHTML = "<td >Manager last name:</td>"
		+ "<td><input type='text' name='uatt9' required></td>";
		att10.innerHTML = "";
		att11.innerHTML = "";
    	att12.innerHTML = "";
    	att13.innerHTML = "";
  	}
  	else if (value === "contains") {
    	att1.innerHTML = "<td >order_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >product_id:</td>" 
    	+ "<td><input type='number' name='uatt2' required></td>";
    	att3.innerHTML = "<p>Please select the order_id to update product id!</p>";
    	att4.innerHTML = "";
    	att5.innerHTML = "";
		att6.innerHTML = "";
    	att7.innerHTML = "";
    	att8.innerHTML = "";
    	att9.innerHTML = "";
    	att10.innerHTML = "";
		att11.innerHTML = "";
    	att12.innerHTML = "";
    	att13.innerHTML = "";
    }
    else if (value === "offers") {
    	att1.innerHTML = "<td >product_id:</td>" 
		+ "<td><input type='number' name='uid' required></td>";
		att2.innerHTML = "<td >branch_id:</td>" 
		+ "<td><input type='number' name='uatt2' required></td>";
		att3.innerHTML = "<td>Please select the branch_id to update product id!</td>";
    	att4.innerHTML = "";
    	att5.innerHTML = "";
		att6.innerHTML = "";
    	att7.innerHTML = "";
    	att8.innerHTML = "";
    	att9.innerHTML = "";
    	att10.innerHTML = "";
		att11.innerHTML = "";
    	att12.innerHTML = "";
    	att13.innerHTML = "";
    }
}


function insert(obj) { 
	var att1 = document.getElementById('iatt1');
	var att2 = document.getElementById('iatt2');
	var att3 = document.getElementById('iatt3');
	var att4 = document.getElementById('iatt4');
	var att5 = document.getElementById('iatt5');
	var att6 = document.getElementById('iatt6');
	var att7 = document.getElementById('iatt7');
	var att8 = document.getElementById('iatt8');
	var att9 = document.getElementById('iatt9');
	var att10 = document.getElementById('iatt10');
	var att11 = document.getElementById('iatt11');
	var att12 = document.getElementById('iatt12');
	var att13 = document.getElementById('iatt13');
	
	var value = obj.value;
	if (value === "customer") {
		att1.innerHTML = "<td >customer_id:</td>" 
		+ "<td><input type='number' name='uid' required></td>";
		att2.innerHTML = "<td >New first name:</td>" 
		+ "<td><input type='text' name='uatt2' required></td>";
		att3.innerHTML = "<td >New last name:</td>"
		+ "<td><input type='text' name='uatt3' required></td>";
		att4.innerHTML = "<td >Personal number:</td>"
		+ "<td><input type='number' name='uatt4' required></td>";
		att5.innerHTML = "<td >Gender:</td>"
		+ "<td><input type='text' name='uatt5' required></td>";
		att6.innerHTML = "<td >Street:</td>"
		+ "<td><input type='text' name='uatt6' required></td>";
		att7.innerHTML = "<td >City:</td>"
		+ "<td><input type='text' name='uatt7' required></td>";
		att8.innerHTML = "<td >State:</td>"
		+ "<td><input type='text' name='uatt8' required></td>";
		att9.innerHTML = "<td >Country:</td>"
		+ "<td><input type='text' name='uatt9' required></td>";
		att10.innerHTML = "<td >Contact:</td>"
		+ "<td><input type='number' name='uatt10' required></td>";
		att11.innerHTML = "<td >Email:</td>"
		+ "<td><input type='text' name='uatt11' required></td>";
		att12.innerHTML = "<td >Date of Birth:</td>"
		+ "<td><input type='date' name='uatt12' placeholder='yyyy-mm-dd' required></td>";
		att13.innerHTML = "<td >Point:</td>"
		+ "<td><input type='number' name='uatt13' required></td>";
	}
	else if (value === "order_list") {
    	att1.innerHTML = "<td >order_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >Type:</td>" 
    	+ "<td><input type='text' name='uatt2' required></td>";
    	att3.innerHTML = "<td >Payment type:</td>"
    	+ "<td><input type='text' name='uatt3' required></td>";
    	att4.innerHTML = "<td >Payment status:</td>"
		+ "<td><input type='text' name='uatt4' required></td>";
		att5.innerHTML = "<td >Order date:</td>" 
    	+ "<td><input type='date' name='uatt5' placeholder='yyyy-mm-dd' required></td>";
    	att6.innerHTML = "<td >Check in:</td>" 
    	+ "<td><input type='date' name='uatt6' placeholder='yyyy-mm-dd' required></td>";
    	att7.innerHTML = "<td >Check out:</td>" 
    	+ "<td><input type='date' name='uatt7' placeholder='yyyy-mm-dd' required></td>";
    	att8.innerHTML = "<td >Status:</td>" 
    	+ "<td><input type='text' name='uatt8' required></td>";
    	att9.innerHTML = "<td >Total cost:</td>" 
    	+ "<td><input type='number' name='uatt9' required></td>";
    	att10.innerHTML = "<td >Note:</td>" 
    	+ "<td><input type='text' name='uatt10' required></td>";
    	att11.innerHTML = "<td >customer_id:</td>" 
    	+ "<td><input type='number' name='uatt11' required></td>";
    	att12.innerHTML = "";
    	att13.innerHTML = "";
  	}
	else if (value === "product") {
		att1.innerHTML = "<td >product_id:</td>" 
		+ "<td><input type='number' name='uid' required></td>";
		att2.innerHTML = "<td >Product name:</td>" 
		+ "<td><input type='text' name='uatt2' required></td>";
		att3.innerHTML = "<td >Type:</td>"
		+ "<td><input type='text' name='uatt3' required></td>";
		att4.innerHTML = "<td >Time:</td>"
		+ "<td><input type='time' name='uatt4' required></td>";
		att5.innerHTML = "<td >Quantity:</td>"
		+ "<td><input type='number' name='uatt5' required></td>";
		att6.innerHTML = "<td >Price:</td>"
		+ "<td><input type='number' name='uatt6' required></td>";
		att7.innerHTML = "<td >Discount:</td>"
		+ "<td><input type='text' name='uatt7' required></td>";
		att8.innerHTML = "<td >Product details:</td>"
		+ "<td><input type='text' name='uatt8' required></td>";
		att9.innerHTML = "<td >Status:</td>"
		+ "<td><input type='text' name='uatt9' required></td>";
		att10.innerHTML = "<td >Note:</td>"
		+ "<td><input type='text' name='uatt10' required></td>";
		att11.innerHTML = "";
		att12.innerHTML = "";
		att13.innerHTML = "";
	}
	else if (value === "branch") {
		att1.innerHTML = "<td >branch_id:</td>" 
		+ "<td><input type='number' name='uid' required></td>";
		att2.innerHTML = "<td >name:</td>" 
		+ "<td><input type='text' name='uatt2' required></td>";
		att3.innerHTML = "<td >Contact:</td>"
		+ "<td><input type='number' name='uatt3' required></td>";
		att4.innerHTML = "<td >Street:</td>"
		+ "<td><input type='text' name='uatt4' required></td>";
		att5.innerHTML = "<td >City:</td>"
		+ "<td><input type='text' name='uatt5' required></td>";
		att6.innerHTML = "<td >State:</td>"
		+ "<td><input type='text' name='uatt6' required></td>";
		att7.innerHTML = "<td >Country:</td>"
		+ "<td><input type='text' name='uatt7' required></td>";
		att8.innerHTML = "<td >Manager first name:</td>"
		+ "<td><input type='text' name='uatt8' required></td>";
		att9.innerHTML = "<td >Manager last name:</td>"
		+ "<td><input type='text' name='uatt9' required></td>";
		att10.innerHTML = "";
		att11.innerHTML = "";
		att12.innerHTML = "";
		att13.innerHTML = "";
	}
	else if (value === "contains") {
		att1.innerHTML = "<td >order_id:</td>" 
		+ "<td><input type='number' name='uid' required></td>";
		att2.innerHTML = "<td >product_id:</td>" 
		+ "<td><input type='number' name='uatt2' required></td>";
		att3.innerHTML = "";
		att4.innerHTML = "";
		att5.innerHTML = "";
		att6.innerHTML = "";
		att7.innerHTML = "";
		att8.innerHTML = "";
		att9.innerHTML = "";
		att10.innerHTML = "";
		att11.innerHTML = "";
		att12.innerHTML = "";
		att13.innerHTML = "";
	}
	else if (value === "offers") {
		att1.innerHTML = "<td >product_id:</td>" 
		+ "<td><input type='number' name='uid' required></td>";
		att2.innerHTML = "<td >branch_id:</td>" 
		+ "<td><input type='number' name='uatt2' required></td>";
		att3.innerHTML = "";
		att4.innerHTML = "";
		att5.innerHTML = "";
		att6.innerHTML = "";
		att7.innerHTML = "";
		att8.innerHTML = "";
		att9.innerHTML = "";
		att10.innerHTML = "";
		att11.innerHTML = "";
		att12.innerHTML = "";
		att13.innerHTML = "";
	}
}

function remove(obj) { //có tổng 13 att vì bảng customer có tận 13 att
	var att1 = document.getElementById('ratt1');
	var att2 = document.getElementById('ratt2');

		var value = obj.value;
  	if (value === "customer") {
    	att1.innerHTML = "<td >customer_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "";
  	}
  	else if (value === "order_list") {
    	att1.innerHTML = "<td >order_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "";
  	}
  	else if (value === "product") {
    	att1.innerHTML = "<td >product_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "";
  	}
  	else if (value === "branch") {
    	att1.innerHTML = "<td >branch_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "";
  	}
  	else if (value === "contains") {
    	att1.innerHTML = "<td >order_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >product_id:</td>" 
    	+ "<td><input type='number' name='uatt2' required></td>";
    }
    else if (value === "offers") {
		att1.innerHTML = "<td >product_id:</td>" 
    	+ "<td><input type='number' name='uid' required></td>";
    	att2.innerHTML = "<td >branch_id:</td>" 
    	+ "<td><input type='number' name='uatt2' required></td>";
    }
}