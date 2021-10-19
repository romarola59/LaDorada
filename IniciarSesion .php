
<?php
     $Servidor= "localhost";
     $usuario='root';
     $Contraseña= " ";
     $basededatos= "Formularios";

     $Enlacce= mysqli_connect($Servidor, $usuario, $Contraseña,$basededatos);
     if (!$enlace){
       echo"Error en la conexión con el servidor";
     }
?>


<!DOCTYPE HTML>
<html lang="ES" >
    <head>
          <meta charset="utf-8"/>
          <title><IniciarSesion</Input:b></title>
          <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
          
           <meta name="author" content="Rosamrl"/>
           <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante"/>
             <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
             <LINK REL=StyleSheet HREF="CSS/Master.css" TYPE="text/css" MEDIA=screen>
             </head>
    <body>       
      <header>
                <h1> La Dorada</h1>
        <nav class="navegacion">
          <ul class="menu">
            <li><a href="IniciarSesion.html">Iniciar Sesión</a></li>
            <li><a href="Index.html">Inicio</a></li>
            <li><a href="Nosotros.html">Nosotros</a></li>
            <li><a href="Productos.html">Productos</a>
              <ul class="submenu">
                <li><a href="Empanadas.html">Tapas de empanadas</a></li>
                <li><a href="Pascualina.html">Tapas de pascualinas</a></li>
              </ul>
            </li>
            <li><a href="Contactodist.html">Distribuidores</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Cerrar Sesión</a></li>
            
          </ul>
        </nav>

      </header>
       
      <div class="cont_principal">

        <div class="cont_centrar">
        <div class="cont_login">
          <form action="">
          <div class="cont_tabs_login">
            <ul class='ul_tabs'>
              <li class="active"><a href="#" onclick="sign_in()">Iniciar Sesión</a>
              <span class="linea_bajo_nom"></span>
              </li>
              <li><a href="#up" onclick="sign_up()">Registrarse</a><span class="linea_bajo_nom"></span>
              </li>
            </ul>
            </div>
        <div class="cont_text_inputs">
            <input type="text" class="input_form_sign " placeholder="NOMBRE" name="name_us" />
          
          <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email_us" />
          <input type="text" class="input_form_sign d_block active_inp" placeholder="DIRECCIÓN" name="addresS_us" />
          <input type="password" class="input_form_sign d_block  active_inp" placeholder="CONTRASEÑA" name="pass_us" />  
         <input type="password" class="input_form_sign" placeholder="CONFIRMAR CONTRASEÑA" name="conf_pass_us" />
          
          <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
      <div class="terms_and_cons d_none">
      
        
          </div>
            </div>
      <div class="cont_btn">
           <button class="btn_sign">SIGN IN</button>
            
            </div>
            
          </form>
          </div>
          
        </div>
        
      
      </div>

       
          <script src = "js/IniciarSesion.js"></script> 

        
    </body>    
          
          
          
</html>     

<?php
   if(ISSET($_POST['Registrarse'])){
              $NOMBRE= $_POST["name_us"];
              $EMAIL= $_POST["email_us"];
              $DIRECCIÓN= $_POST["addresS_us"];
              $CONTRASEÑA= $_POST["pass_us"];
              $CONFIRMACION CONTRASEÑA = $_POST["conf_pass_us"];
              $id_us = rand(1,99);

              $insertarDatos= "INSERT INTO usuarios VALUES ('$NOMBRE',"
                                                            '$EMAIL',
                                                             '$DIRECCIÓN',
                                                             '$CONTRASEÑA',
                                                             '$CONFIRMACION CONTRASEÑA',
                                                             '$id_us')";

                $ejecutarinsertarDatos= mysqli($enlace, $insertarDatos);
                  if(!ejecutarinsertar){
                    echo "error en la linea de sql";
                  }


              
   }