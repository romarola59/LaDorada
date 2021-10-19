<!DOCTYPE HTML>
<html lang="ES" >
     <head>
       <meta charset="utf-8"/>
       <title>DISTRIBUIDORES </title>
       <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
       <meta name="author" content="Rosamrl"/>
      <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante"/>
      <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
      
     </head>  
<body>  
    <header>
            <h1> La Dorada</h1>
        <nav class="navegacion">
          <ul class="menu">
            <li><a href="IniciarSesion.php">Iniciar Sesión</a></li>
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Nosotros.html">Nosotros</a></li>
            <li><a href="Productos.html">Productos</a>
                <ul class="submenu">
                   <li><a href="Empanadas.html">Tapas de empanadas</a></li>
                   <li><a href="Pascualina.html">Tapas de pascualinas</a></li>
                  
                </ul>
            </li>
            <li><a href="Contactodist.html">Distribuidores</a></li>
            <li><a href="Distribuidores.html">Contacto</a></li>
            <li><a href="#">Cerrar Sesión</a></li>
    
          </ul>
     </nav>



    </header>
    <div class="tabla">
        <table>
          <tr>
            <th>id_dist</th>
           <th>Nombre o Razón Social</th>
           <th>Correo</th>
            <th>Teléfono</th>
           <th>dirección</th>
           <th>Mensaje</th>
          </tr>
        
          <?php
          $Consulta = "select * from distribuidores";
          $ejecutarconsulta = mysqli_query($enlace,$Consulta):
          $verfilas = mysqli_num_rows();
     ?>
        </table>


    </div>





   
    <p align = "center">Estimado cliente para poder comprar necesita registrarse <a href="IniciarSesion.html">Aquí</a></p>

  </body>    

</html>     

