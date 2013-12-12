<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
</head>

<body>

	<?php 
		include_once('shoppingcart.php');
		$obj = new Crud("192.168.56.101","ismaelalejandro","67226722","Shopping");
		$itemId = $_GET['id'];

		if (isset($_GET['id']) && $_GET['id'] > 0) {
			echo "This is an update for record #" . $_GET['id'];

			//$id    = $itemId = $row->item_id
			//$name  = $row->item_name
			//$price = $row->item_price
			//$obj->readItem($_GET['id']);
			


		} else {
			echo "This is an insert";
		}

	/*while($row = $records->fetch(PDO::FETCH_OBJ)){
					//print_r($row);

						

				} */

	?>

	<form method="post" action='actions.php'>
		<label>Item Name</label><input type="text" name="itemName" value="Item"/><br/>
		<label>Description</label><input type="text" name="description" value="Describe"/><br/>
		<label>Price(Numeric with decimal)</label><input type="text" name="itemPrice" value="Price"/><br/>
		<input type="hidden" name="itemId" value="<?php if ($itemId > 0) { echo $itemId;} else {echo 0;} ?>"/>
		<input type="submit" name="submit" value="submit"/>
	</form>

</body>