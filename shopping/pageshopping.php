<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>

	<div>  -->
		<table border="1px;">
			<?php 
				include_once('shoppingcart.php');
				$oMiCrudsito = new CRUD();
				$records = $oMiCrudsito->readAll();

			/*	if(isset($_REQUEST['insert'])){
				$obj=new Crud("192.168.56.101","ismaelalejandro","67226722","hw");
				extract($_REQUEST);
	
				$obj->insert();
				}

				if(isset($_REQUEST['update'])){
				$obj=new Crud("192.168.56.101","ismaelalejandro","67226722","hw");
				extract($_REQUEST);
	
				$obj->update();
				}*/

			

				//print_r($records);

				echo "
				<th>Item ID</th>
				<th>Item</th>
				<th>Description</th>
				<th>Price</th>
				<th>Delete</th>
				<th>Update</th>";
				while($row = $records->fetch(PDO::FETCH_OBJ)){
					//print_r($row);

					echo "<tr>";
						echo "<td>" . $row->item_id . "</td>";
						echo "<td>" . $row->item_name . "</td>";
						echo "<td>" . $row->description . "</td>";
						echo "<td>" . $row->item_price . "</td>";
						echo "<td><a href='delete.php?id=" . $row->item_id . "'>Delete</a></td>";
						echo "<td><a href='form.php?id=" . $row->item_id . "'>UPDATE</a></td>";
					echo "</tr><br/>";

				}


			?>
		</table>

		<br/>
		<a href="form.php">Insert New Item</a>

<!--	</div> 

	

</body> -->