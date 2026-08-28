<?php 
//FUNCTIONS
//blocks of code that can be executed to do something
// input > [functions] > output

//examples

//strtoupper('izzah')
// 'izzah' > [strtoupper] > 'IZZAH'

//formatProduct($product)
//$product > [formatProduct] > "The chiikawa charm costs  $25"

	// functions

	function sayHello($name = 'izzah', $time = 'morning'){
		echo "Good $time, $name";
	}

	//sayHello();
	//sayHello('wani');
	sayHello('nadiah', 'night');

	function formatProduct($product){
		// echo "{$product['name']} costs £{$product['price']} to buy <br />";
		return "The {$product['name']} costs £{$product['price']} to buy <br />";
	}
	
	//formatProduct(['name' => 'gold star', 'price' => 20]);

	// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
	// echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>