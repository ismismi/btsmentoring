<?php

	//$con = mysqli_connect('mysql:host=192.168.56.101;dbname=Shopping', 'ismaelalejandro', '67226722');

	class CRUD 
	{
		private $pdoC;

		public function __construct(){
			$this->pdoC=new PDO('mysql:host=192.168.56.101;dbname=Shopping', 'ismaelalejandro', '67226722');
			//$this->pdoC->setAttribute;
		}

		public function readAll(){
			$aRecords = $this->pdoC->query('SELECT * FROM Items');
			//$recordsNumber = $aRecords->num_rows;

			if(isset($_REQUEST['insert_status'])){
  				echo"Your product was successfully inserted";
			}

			if(isset($_REQUEST['update_status'])){
  				echo"Your item was updated";
			}

			if(isset($_REQUEST['delete_status'])){
  				echo"Your item was deleted";
			}

			//while($row = $aRecords->fetch(PDO::FETCH_OBJ)){
			//print_r($row);
		//}

			return $aRecords;
		}

		//INSERT
		
		public function insert($itemName, $description, $itemPrice){
			$query="INSERT INTO Items SET item_name='$itemName', item_price='$itemPrice', description = '$description'";
			$result= $this->pdoC->query($query) or die(mysqli_connect_errno()."Item cannot be inserted");
	
			if($result){
				header('location:pageshopping.php?insert_status=successful');

				echo "success";	
			}
		} 

		public function update($itemName, $description, $itemPrice, $itemId){
			$query="UPDATE Items SET item_name='$itemName', item_price='$itemPrice', description = '$description' WHERE item_id='$itemId'";
			$result= $this->pdoC->query($query) or die(mysqli_connect_errno()."Cannot update");
		
			if($result){
				header('location:pageshopping.php?update_status=successful');	
				echo "Updated";
			}
		} 

		public function delete($itemId){
			$query="DELETE FROM Items WHERE item_id='$itemId'";
			$result= $this->pdoC->query($query) or die(mysqli_connect_eerno()."Can not delete");

			if($result){
				header('location:pageshopping.php?delete_status=successful');	
				echo "Item deleted";
			}
		}
/*
		public function readItem($itemId){
			$query="SELECT * FROM Items WHERE item_id = $itemId";
			$result = $this->pdoC->query($query) or die(mysqli_connect_errno()."Can not read row");

			return $result;
		}
		*/

	} 

		
/*

		public function update($clientName, $clientContact, $clientSince){
			$sql = "UPDATE clients SET client_name='$clientName', client_contact='clientContact', client_since='$clientSince'";
 			$q = $this->pdoC->prepare($sql);
 		}
 */
	