<?php

include('shoppingcart.php');
$obj = new Crud("192.168.56.101","ismaelalejandro","67226722","Shopping");

if (isset($_POST['itemId']) && $_POST['itemId'] > 0) {
	//esto es un update
	extract($_REQUEST);
	$obj->update($itemName, $description, $itemPrice, $itemId);

} else {
	// esto es un insert
	extract($_REQUEST);	
	$obj->insert($itemName, $description, $itemPrice);
}






/*
if(isset($_REQUEST['submit'])){
	
	extract($_REQUEST);
	
	$obj->insert($itemName, $itemPrice);
	
}*/


echo "this kinda works";

?>