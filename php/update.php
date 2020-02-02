
	<?php
			include 'conectar.php';
			$titulo=$_POST['titulo_text'];
			$noticia=$_POST['noticia_text'];
			$id=$_POST['id'];
			$update="UPDATE crud SET titulo='$titulo',noticia='$noticia' WHERE id=$id";
			if (!$conn) {
			    die("No se pudo conectar: " . mysqli_connect_error());
			}else{
					echo mysqli_query($conn,$update);
			}
			mysqli_close($conn);
		
	?>
