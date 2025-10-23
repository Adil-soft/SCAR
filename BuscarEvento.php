<?php
   
    include_once("config-sql.php");
    include_once("buscar-sql.php");
    
    
    
?>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SCAR</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      //funcion alert para eliminar registro de eventos:
        function eliminar_fila(id) {
            if (confirm("Alerta: esta accion implica la eliminacion del Evento de la base de datos. ¿Desea Usted continuar?")){
                  $.ajax({
                           type: "POST",
                           url: "eliminar-evento.php",
                           data: {id: id },
                           success: function(response) {
                              alert(response);
                              location.reload();
                           }
                   });
            }
         }
      </script>
   </head>
   <body>
    <header>
    <div class="col-md-2 col-sm-2">
                     <div class="logo">
                        <a href="index.html"><img src="images/logofin1.png" alt="#" /></a>
                     </div>
    </div>
    <div class="col-md-10 offset-md-3">
                  <div class="titlepage">
                     <h2 >Bienvenido Al SCAR APPIAM</h2>
                     
                  </div>
    </div>
      
    
    </header>
    <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Gestion de Eventos</h2>
                     
                  </div>
               </div>
            </div>
         <div class="row">
    </div>
    <div class="col-md-12">
    <html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<a href="crearEvento.php" class="btn btn-primary btn-sm" rol="button">Crear Evento</a>
				<form action="BuscarEvento.php" method="POST">
				<b></b><input type="text" id="buscar" name="buscar" value="insertar Id del evento"/>
            <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
				</form>
			</div><br>
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
                            <th>Nombre</th>
							<th>responsable</th>
							<th>Fecha</th>
							<th>Dirección</th>
							<th>Descripción</th>
							<th></th>
                            <th>operación</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
                    <?php while ($fils=$sql->fetch(PDO::FETCH_ASSOC)){?>
                           <tr>
                                <td><?php echo $id=$fils['id'];?></td>
								<td><?php echo $fils['nombre']; ?></td>
								<td><?php echo $fils['responsable']; ?></td>
                                <td><?php echo $fils['fecha']; ?></td>
                                <td><?php echo $fils['direccion']; ?></td>
                                <td><?php echo $fils['descripcion']; ?></td>
								<td><?php echo $row['']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                               <td><a href="modificar-evento.php?id=<?php echo $fils['id']; ?>" class="btn btn-success btn-sm rounded-pill py-0 editLink"  data-target="#editar">modificar</a></td>
								      <td><a onclick="eliminar_fila(<?php echo $fils['id']; ?>)" data-href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm rounded-pill py-0 editLink"data-toggle="modal" data-target="#confirm-delete">Eliminiar</a></td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>
   