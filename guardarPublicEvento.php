<?php 
   require("update-public-sql-evento.php");
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
                     <h2>El Evento Ha sido Publicado con Exito</h2>
                     
                  </div>
               </div>
            </div>
         <div class="row">
    </div>
    <div class="col-md-12">
        <form method="post" action="publicarEventos.php">
            <div class="form-group">
                <label for="nombre">ID del evento</label>
               <input type="number" name="id" id="idevento" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
               <label for="Titulo">Titulo del evento</label>
               <input type="text" name="nombre" id="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha del evento</label>
                <input type="date" name="fecha" id="fecha" value="<?php if(isset($_POST['fecha'])) echo $_POST['fecha']; ?>"  class="form-control" readonly>
            </div>
            <div class="form-group">
               <label for="Responsable">Responsable del evento</label>
               <input type="text" name="responsable" id="responsable" value="<?php if(isset($_POST['responsable'])) echo $_POST['responsable']; ?>" class="form-control" readonly>
            </div>
             <div class="form-group">
                <label for="direccion">Dirección</label>
               <input type="text" name="direccion" id="direccion"  value="<?php if(isset($_POST['direccion'])) echo $_POST['direccion']; ?>"class="form-control" readonly>
             </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
               <textarea name="descripcion" id="descripcion" class="form-control" readonly><?php if(isset($_POST['descripcion'])) echo $_POST['descripcion']; ?></textarea>
            </div>
            <div>
                <label for="publicarsino" name="publicarsino">Publicado</label>
                <input type="text" name="publicarsino" id="publicarsino"  value="<?php if(isset($_POST['publicarsino'])) echo $_POST['publicarsino']; ?>"class="form-control" readonly>
            </div><br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Volver a Publicar Eventos">
                <a class="btn btn-primary" href="index.html">Pagina de inicio</a>
             </div>
      </form>
               </div>
            </div>
         </div>
      </div>

   </body>