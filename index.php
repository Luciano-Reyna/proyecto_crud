<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>CRUD Noticia</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body class="p-3 mb-2 bg-light text-dark" >
			<section class="main " id="principal">

			</section>


			<div id="botones">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >Eliminar Noticia</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="boton_agregar" >Añadir Noticia</button>

			</div>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Añadir noticia</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="datos_enviar" method="POST" >
			          <div class="form-group">
			            <label for="recipient-name" class="col-form-label">Titulo:</label>
			            <input type="text" class="form-control" id="recipient-name" name="titulo_text" placeholder="Titulo de la noticia">
			          </div>
			          <div class="form-group">
			            <label for="message-text" class="col-form-label">Noticia:</label>
			            <textarea class="form-control" id="message-text" name="noticia_text" placeholder="Descripcion de la noticia..."></textarea>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close" >Cerrar</button>
				        <button type="button" class="btn btn-primary" id="add" >Guardar cambios</button>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Eliminar noticia</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<select class="form-control" id="select_noticias">
					</select>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="button" class="btn btn-primary" id="eliminar">Eliminar</button>
			      </div>
			    </div>
			  </div>
			</div>

	</body>
	<script type="text/javascript" src="js/script.js"></script>
	<?php include 'php/consultar.php'; ?>
</html>
	
