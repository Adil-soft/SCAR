<?php 
   include("generar_claves_aleatorias.php");
   include("insertar_clave_usuario_sql.php");
   include_once("config-sql.php");
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use  PHPMailer\PHPMailer\SMTP;
   require 'PHPMailer/Exception.php';
   require 'PHPMailer/PHPMailer.php';
   require 'PHPMailer/SMTP.php';
  
  
    $mail = new PHPMailer(true);
    try {
        //configurar el servidor de correo SCAR APPIAM:           
        $mail->isSMTP();                                    
        $mail->Host = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'adil.infosoftware@gmail.com';                    
        $mail->Password   = 'giencueyldlvdaxw';                           
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                    
    
        //correo del asistente:
        $mail->setFrom('adil.infosoftware@gmail.com', 'SCAR APPIAM');
        $mail->addAddress('i52hihia@uco.es', 'Joe User');           
        $mail->addReplyTo('adil.infsoftware@gmail.com', 'Information');
    } catch (Exception $e) {
        echo "Por favor revise usted su conexion,Problema de envio del correo: {$mail->ErrorInfo}";
    }
    //comprobar el metodo post:
    if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $resolucion = $_POST['aprobar-asistencia'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo=$_POST['correo'];
        $sexo= $_POST['sexo'];
        $dirigirse_como = ($sexo == 'hombre') ? 'Don' : 'Do&ntilde;a';
        $estimado = ($sexo == 'hombre') ? 'Estimado' : 'Estimada';
        $id_persona=$_POST['id'];
        
        
        if($resolucion=='aprobado'){
             //generar clave de acceso a la APPAIAM:
            $clave= generar_claves_sesion_appiam();
            //Contenido del correo:
            //generar nombre de usario de acceso a la APPAIAM:
            $obtener_usuario=explode('@', $correo);
            $usaurio =$obtener_usuario[0];
            $mail->isHTML(true);                                
            $mail->Subject="SCAR APPAIAM:Accesso Permitido";
            //definir el mensaje accesso permitido al asistente:
            $mail->Body='<html>
            <head>
                <title>credenciales De Acceso Al Recinto</title>
            </head>
            <body>
            <p>'.$estimado.' '. $dirigirse_como.' '.$nombre.': </p>
             <p>Desde el departamento de Control de Acceso a Recintos, tenemos el honor de comunicarle a usted que su solicitud de acceso al evento ha sido aprobada.</p>
             <p>Le facilitamos a usted sus credenciales de acceso a la APPIAM :</p>
             <p>Usuario:'.' '.$usaurio.'
             <p>Clave de acceso:'.' '.$clave.'
             <p>Ahora puedes iniciar sesi&oacute;en utilizando tus credenciales y acceder a su identificac&oacute;n numerica.</p>
            <p>Por cualquier duda o pregunta, no dudes en ponerte en contacto con nuestro equipo de soporte.</p>
            <p>Reciba usted un cordial saludo.</p>
            <p>El Equipo de [SCAR APPIAM]</p>
            </body>
            </html>';
            $mail->send();
            //insertar los credinciales de usuario a la base de datos:
            echo "Hola aqui";
            echo $id_persona;
            insertar_datos_sesion_appaiam($conn, $id_persona, $usaurio, $clave);
            header("Location:correo_enviado_exito.php");
            exit();
        }else if($resolucion=='denegado'){
             //Contenido del correo:
             $mail->isHTML(true);                                
             $mail->Subject="SCAR APPAIAM:Accesso Denegado";
             //definir el mensaje accesso permitido al asistente:
             $mail->Body='<html>
             <head>
                 <title>Acceso Denegado al Evento</title>
             </head>
             <body>
             <p>'.$estimado.' '. $dirigirse_como.' '.$nombre.': </p>
              <p>Desde el departamento de Control de Acceso a Recintos, lamentamos comunicarle a usted que su solicitud de acceso al evento ha sido Denegado.</p> 
             <p>Por cualquier duda o pregunta, no dudes en ponerte en contacto con nuestro equipo de soporte.</p>
             <p>Reciba usted un cordial saludo.</p>
             <p>El Equipo de [SCAR APPIAM]</p>
             </body>
             </html>';
             $mail->send();
             header("Location:correo_enviado_denegado.php");
             exit();
         }else if($resolucion=='prohibido'){
            echo $nombre;
            echo $apellido;
            //Contenido del correo:
            $mail->isHTML(true);                                
            $mail->Subject="SCAR APPAIAM:Accesso Prohibido";
            //definir el mensaje accesso permitido al asistente:
            $mail->Body='
            <html>
            <head>
                <title>Acceso Prohibido al Evento</title>
            </head>
            <body>
             <p>'.$estimado.' '. $dirigirse_como.' '.$nombre.': </p>
             <p>Desde el departamento de Control de Acceso a Recintos, lamentamos comunicarle a usted que debido a no cumplir las normas de control de acceso a recintos se encuentra en la lista de prohibido acceso.</p> 
            <p>Por cualquier duda o pregunta, no dudes en ponerte en contacto con nuestro equipo de soporte.</p>
            <p>Reciba usted un cordial saludo.</p>
            <p>El Equipo de [SCAR APPIAM]</p>
            </body>
            </html>';
            $mail->send();
            header("Location:correo_enviado_prohibido.php");
            exit();
        }
        //cerrar conexion:
        $conn=NULL;
    }
?>