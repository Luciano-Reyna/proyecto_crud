
	<?php
			include 'conectar.php';
			$consulta="SELECT * FROM crud WHERE 1";
		/*	$titulo=$_POST['titulo_text'];
			$noticia=$_POST['noticia_text'];*/

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}else{
				
					$result=mysqli_query($conn,$consulta);
					if($result){
						while ($row =mysqli_fetch_assoc($result)) { 
							echo "<script>noticias_add('".$row['titulo']."','".$row['noticia']."','".$row['id']."')</script>"; 
						} 
					}else{
						echo "false";
					}
			}
			mysqli_close($conn);
		
	?>
