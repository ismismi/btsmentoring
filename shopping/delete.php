<?php
	include_once('shoppingcart.php');
	$obj=new Crud("192.168.56.101","ismaelalejandro","67226722","Shopping");

	if(isset($_GET['id'])){	
		$obj->delete($_GET['id']);
	}
?>