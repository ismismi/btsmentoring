<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
</head>

<body>

	<?php include_once('shopping_cart.php') 

	/*while($row = $records->fetch(PDO::FETCH_OBJ)){
					//print_r($row);

						$itemId = $row->item_id
						$row->item_name
						$row->item_price

				} */

	?>

	<form method="post" action='actions.php'>
		<input type="hidden" name="id" value="<?php if ($itemId > 0) { echo $itemId;} else {echo 0;} ?>"/>
		<label>Item Name<input type="text" name="itemName" value="Item"/><br/>
		<label>Price(Numeric with decimal)<input type="text" name="itemPrice" value="Price"/><br/>
		<input type="submit" name="submit" value="submit"/>
	</form>

</body>