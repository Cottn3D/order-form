
<?php

    $customerName = filter_var($_POST['customerName'], FILTER_SANITIZE_STRING);
    $pizzaSize = filter_var($_POST['pizzaSize'], FILTER_SANITIZE_STRING);
    $toppings = filter_var($_POST['toppings'], FILTER_SANITIZE_STRING);

    // --> This is the unsantized version of above

    // $customerName = $_POST['customerName'];
    // $pizzaSize = $_POST['pizzaSize'];
    // $toppings = $_POST['toppings'];

    if($pizzaSize == "P"){
        // echo "You ordered a personal";
        $sizePrice = 3.50;

    }elseif($pizzaSize == "S"){
        // echo "You ordered a small";
        $sizePrice = 5;

    }elseif($pizzaSize == "M"){
        // echo "You ordered a medium";
        $sizePrice = 10;

    }elseif($pizzaSize == "L"){
        // echo "You ordered a large";
        $sizePrice = 13;
    }

    $preTax = ($sizePrice + $toppings);
    $tax = $preTax * .08;
    $total = $preTax + $tax;

    function money($x){
        echo number_format($x, 2);
    }

    // echo "Pre tax total: " . $preTax . "<br/>Total with tax: " . $total;
?>

<!DOCTYPE html>
<html lang="en">

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

        <!-- money() function formats value to always show two decimal places -->
        <h3><?php echo $customerName ?>'s Order: </h3>
        <p>Pizza price: $ <?php money($sizePrice) ?> </p>
        <p>Topping price: $ <?php money($toppings) ?> </p>
        <p>Tax: $ <?php money($tax) ?> </p>
        <p>Total price: $ <?php money($total) ?> </p>
	</div> 
	<footer>Dan's Pizza Shoppe &reg;</footer>
</body>
</html>