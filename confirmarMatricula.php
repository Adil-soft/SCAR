<?php 
   $semaforo =0;
  include_once("config-sql.php");
  include("validar-imagen.php");
  $foto ='foto';
   $valido = validar_foto_identificacion($foto);
   if( $valido==1 ){
      echo "si";
      if(empty($_POST['nombre']) || empty($_POST['apellido']) || 
         empty($_POST['edad']) || empty($_POST['correo']) || empty($_POST['profesion']) 
         || empty($_POST['idpersona'])){
           
            header('location:matricula.php');
      }else{
         $directorioTemporal= $_FILES['foto']['tmp_name'];
         $nombreImagenOriginal =$_FILES['foto']['name'];
         echo $nombreImagenOriginal;
         echo "directorio temp";
         echo $directorioTemporal;
         $directorio="images/";
         $destino= $directorio.$nombreImagenOriginal;
         //subir la imagen al directorio del proyecto scar:
         move_uploaded_file($directorioTemporal,$destino);
         //move_uploaded_file($directorioTemporal,'images/'.$nombreImagenOriginal);
         chmod('images/'.$nombreImagenOriginal, 0777);
      }
     
   }else{
           ;
            if($semaforo==0 && $valido==0){
          echo "<script>
            function validarImagen() {
            if (confirm('Por favor Insertar una imagen DE Identificacion valido con el sistema SCAR.')){
               window.location.href = 'matricula.php';
                  $.ajax({
                           type: 'POST',
                           url: 'matricula.php',
                           data: { },
                           success: function(response) {
                              alert(response);
                             
                   });
            }
         }
              
         </script>";
         $semaforo=1;
       
      }
   echo "hola10";
   if($semaforo==1){
       echo "hola11";
       header('location:matricula.php');
   }
     
     
      
}
  
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
                        <a href="servicios.php"><img src="images/logofin1.png" alt="#" /></a>
                     </div>
    </div>
    <div class="col-md-10 offset-md-3">
                  <div class="titlepage">
                     <h2 >Bienvenido A Nuestro Evento</h2>
                     
                  </div>
    </div>
      
    
    </header>
    <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Matricula</h2>
                     
                  </div>
               </div>
            </div>
         <div class="row">
    </div>
    <div class="col-md-12">
        <form method="post" action="guardar-matricula.php">
            <div class="form-group">
                <label for="id">DNI/NIE/PASSAPORTE</label>
                <input type="text" name="idpersona" id="idpersona" class="form-control" value="<?php if(isset($_POST['idpersona'])) echo $_POST['idpersona']; ?>">
             </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                    <label for="Titulo">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>">
                </div>
                <div class="col">
                    <label for="apellido">Apellido</label>
                     <input type="text" name="apellido" id="apellido" class="form-control" value="<?php if(isset($_POST['apellido'])) echo $_POST['apellido']; ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                    <label for="profesion">profesión</label>
                    <input type="text" name="profesion" id="profesion" class="form-control" value="<?php if(isset($_POST['profesion'])) echo $_POST['profesion']; ?>">
                </div>
                <div class="col">
                    <label for="correo">Correo Electronico</label>
                     <input type="text" name="correo" id="correo" class="form-control" value="<?php if(isset($_POST['correo'])) echo $_POST['correo']; ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                <label for="sexo">Sexo</label>
                     <input type="text" name="sexo" id="sexo" class="form-control" value="<?php if(isset($_POST['sexo'])) echo $_POST['sexo']; ?>">
                </div>
                <div class="col">
                    <label for="edad">Edad</label>
                     <input type="number" name="edad" id="edad" class="form-control" value="<?php if(isset($_POST['edad'])) echo $_POST['edad']; ?>">
                </div>
              </div><br>
              <div>
                <label for="foto">Subir Foto:</label>
                 <input type="text" id="foto" name="foto"  value="<?php if(isset($_FILES['foto']['name'])) echo $_FILES['foto']['name']; ?>" readonly>
              </div>
            </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Confirmar">
                 <a class="btn btn-primary" href="publicidadEventos.php">Pagina de inicio</a>
             </div>
        </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>