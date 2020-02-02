
	<?php
			include 'conectar.php';
			$id=$_POST['id'];
			$delete="DELETE FROM crud WHERE id=$id";
			if (!$conn) {
			    die("No se pudo conectar: " . mysqli_connect_error());
			}else{
					echo mysqli_query($conn,$delete);
			}
			mysqli_close($conn);
		
	?>
