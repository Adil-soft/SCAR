<?php
    require("config-sql.php");
    require("leer-datos-matriculado-sql.php");
    $fila=Leer_dato_matriculado($conn);
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
                     <h2 >Bievenido AL SCAR APPAIAM</h2>
                     
                  </div>
    </div>
      
    
    </header>
    <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Datos de Matricula</h2>
                     
                  </div>
               </div>
            </div>
         <div class="row">
    </div>
    <div class="col-md-12">
        <form method="post" action="resolucion-asistencia.php">
            <div class="form-group">
               <label for="imagen">Imagen del Asistente</label>
                <input type="text" name="idpersona" id="idpersona" class="form-control" value="<?php echo $fila['dni_nie_pasaporte']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="id">DNI/NIE/PASSAPORTE</label>
                <input type="text" name="idpersona" id="idpersona" class="form-control" value="<?php echo $fila['dni_nie_pasaporte']; ?>" readonly>
             </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila['nombre']; ?>" readonly>
                </div>
                <div class="col">
                    <label for="apellido">Apellido</label>
                     <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $fila['apellido']; ?>" readonly>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                    <label for="profesion">profesión</label>
                    <input type="text" name="profesion" id="profesion" class="form-control" value="<?php echo $fila['profesion']; ?>" readonly>
                </div>
                <div class="col">
                    <label for="correo">Correo Electronico</label>
                     <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $fila['correo']; ?>" readonly>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                <label for="sexo">Sexo</label>
                     <input type="text" name="sexo" id="sexo" class="form-control" value="<?php echo $fila['sexo']; ?>" readonly>
                </div>
                <div class="col">
                    <label for="edad">Edad</label>
                     <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $fila['edad']; ?>" readonly>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="aprobar-asistencia">Verificar Asistencia</label>
                    <select id="aprobar-asistencia" name="aprobar-asistencia">
                         <option value="aprobado">Permitir Acceso</option>
                         <option value="denegado">Denegar Acceso</option>
                         <option value="prohibido">Persona en Lista de Prohibido Acceso</option>
                    </select>
            </div>
            <div class="form-group">
                  <input id="id" name="id" value="<?php echo $fila['id']; ?>" hidden>
            </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Aprobar Asistencia">
                 <a class="btn btn-primary" href="publicidadEventos.php">Pagina de inicio</a>
             </div>
        </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>