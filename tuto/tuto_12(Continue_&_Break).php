<?php 

	// continue and break
	
	$products = [
		['name' => 'canmake blush', 'price' => 20],
		['name' => 'miffy plush', 'price' => 10],
		['name' => 'pink hoodie', 'price' => 15],
		['name' => 'cream puff', 'price' => 5],
		['name' => 'sugarbunnies charm', 'price' => 40],
		['name' => 'chocolate bar', 'price' => 2]
	];

	foreach($products as $product){

		if($product['name'] === 'sugarbunnies charm'){
			break;
		}

		if($product['price'] > 15){
			continue;
		}

		echo $product['name'] . '<br />';

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>