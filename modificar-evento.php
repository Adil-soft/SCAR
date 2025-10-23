<?php
   require_once("config-sql.php");
   include_once("LeerFilasql.php");
   $fila=Leer_fila($conn)
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
                     <h2>Modificar Evento</h2>
                     
                  </div>
               </div>
            </div>
         <div class="row">
    </div>
    <div class="col-md-12">
        <form method="post" action="guardarModificacion.php">
            <div class="form-group">
                <label for="id">ID del evento</label>
                <input type="number" name="id" id="idevento" class="form-control" value="<?php echo $fila['id']?>">
             </div>
            <div class="form-group">
                <label for="Titulo">Titulo del evento</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila['nombre']?>">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha del evento</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $fila['fecha']?>">
            </div>
            <div class="form-group">
                <label for="Responsable">Responsable del evento</label>
                <input type="text" name="responsable" id="responsable" class="form-control" value="<?php echo $fila['responsable']?>">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $fila['direccion']?>">
            </div>
             <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" cols="5" rows="5" id="descripcion" class="form-control"><?php echo $fila['descripcion']?></textarea>
                </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">
                 <a class="btn btn-primary" href="index.html">Pagina de inicio</a>
             </div>
        </form>
               </div>
            </div>
         </div>
      </div>

   </body>