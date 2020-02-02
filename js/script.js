		var agg=2;
		var id_objetos;
		$("#boton_agregar").click(function(){
				$("#exampleModalLabel").html("Añadir Noticia");
				agg=1;
				$("#recipient-name").val("");
               			$("#message-text").val("");
		});
		$(document).ready(function(){
			$("#add").click(function () {
				if(agg==1){
					var tit=$("#recipient-name").val();
					var noti=$("#message-text").val();
					var datos=$("#datos_enviar").serialize();

					if (tit==''&&noti=='') {
						alert("Por favor rellene todos los campos");
					} else {
						$.ajax({
							type:"POST",
							url:"php/insertar.php",
							data:datos,
							success:function (retorno) {
								if(retorno==1){
									alert("Datos añadidos con exito.");
									$("#recipient-name").val("");
									$("#message-text").val("");
									window.location="index.php";
								}else{
									alert("error");
								}
							}

						});
					}
				}else {
					var datos=$("#datos_enviar").serialize()+'&id='+id_objetos;
					$.ajax({
							type:"POST",
							url:"php/update.php",
							data:datos,
							success:function (retorno) {
								if(retorno==1){
									alert("Datos actualizados con exito.");
									$("#recipient-name").val("");
									$("#message-text").val("");
									window.location="index.php";
								}else{
									alert("error");
								}
							}

					});
				}
				

			});

			$("#eliminar").click(function () {
				datos="id="+$("#select_noticias").val();
				$.ajax({
							type:"POST",
							url:"php/remove.php",
							data:datos,
							success:function (retorno) {
								if(retorno==1){
									alert("Noticia eliminada.");
									window.location="index.php";
								}else{
									alert("error");
								}
							}

				});
			});
				
		});
		function probamos(b) {
				id_objetos=b.id;
				$("#exampleModalLabel").html("Actualizar Noticia");
				var a=$("#tit_"+b.id).html();
				var b=$("#not_"+b.id).html();
				$("#recipient-name").val(a);
				$("#message-text").val(b);
				agg=2;

		}
		function noticias_add(a,b,c) {
			$("#principal").append("<section class='noti jumbotron' id='"+c+"' onclick='probamos(this)' data-target='#exampleModal' data-toggle='modal'><article class='titulo'><h2 class='display-4' id='tit_"+c+"'>"+a+"</h2><hr class='my-4'></article><article class='body_noti'><p class='lead' id='not_"+c+"'>"+b+"</p></article></section>");			
			$("#select_noticias").append("<option value='"+c+"'>"+a+"</option>");
		}
