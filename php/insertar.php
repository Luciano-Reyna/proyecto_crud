
	<?php
			include 'conectar.php';
			$titulo=$_POST['titulo_text'];
			$noticia=$_POST['noticia_text'];
			$insertar="INSERT INTO crud (id, titulo, noticia) VALUES (NULL, '$titulo', '$noticia')";

			if (!$conn) {
			    die("No se pudo conectar: " . mysqli_connect_error());
			}else{
					echo mysqli_query($conn,$insertar);
			}
			mysqli_close($conn);
		
	?>
