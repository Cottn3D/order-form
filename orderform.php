<!DOCTYPE html>
<html lang="en">
    <!-- Carson Schwab -->
        <!-- 29 Mar 2022 -->
             <!-- ISTE 646 - Exercise 8 - PHP Forms -->

<!-- 
	RUN XAMPP SERVER THEN PASTE LINK 
	http://localhost/pizza_form/orderform.php 
-->

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/pizza.css" />
	<script type="text/javascript" src="assets/script/pizza.js"></script>
</head>
<body>

	<div id="wrapper">

	<h1>Eat more Pizza!</h1>
	<p><img src="assets/img/hotpizza.png"></p>
	<div id="container">
		<h2>Order a Delicious Pizza!</h2>
	
		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName"  /></p>
			<p>ID:  <input type="text"  name="customerID"  /></p>
			<p> Check the size of Pizza you would like to order:<br />
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
			</p>

			<p> Select the toppings you want on your pizza:<br />
				<input type="radio" name="toppings" value="0" id="0-toppings" checked="true"/><label for="0-toppings">No Extra Toppings<label><br/>
				<input type="radio" name="toppings" value="2" id="1-toppings"/><label for="1-toppings">One Topping<label><br/>
				<input type="radio" name="toppings" value="3" id="2-toppings"/><label for="2-toppings">Two Toppings<label><br/>
				<input type="radio" name="toppings" value="3.75" id="3-toppings"/><label for="3-toppings">Three Toppings<label>
			</p>
			<p>
				<input type="submit" name="Submit" value=" Send Form"/>
			</p>
		</form>
	</div> 
	<footer>Dan's Pizza Shoppe &reg;</footer>
</body>
</html>