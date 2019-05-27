<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      <?php
      //esto lo debes cambiar, por una obtencion de valor en la pagina
      $elemetos = 5;
      
      //este es un archivo con los datos de la conexion.... suplanta esto!!!
      require("conectardb.php");
      /*******************************
       * CONEXION A LA BASE DE DATOS *
       *******************************/
      
      $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
      if(mysqli_connect_errno()){
          echo "Fallo al conectar con la base de datos";
          exit();
      }
      mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
      mysqli_set_charset($conexion, "utf8");
      $sql = "SELECT tx_carrera FROM `carrera` ";
      $resultados = mysqli_query($conexion, $sql);
      
      /********************************************
       * ALMACENAR INFORMACION DE BBDD A UN ARRAY *
       ********************************************/
      $datos = array(); 
      $cantidad = mysqli_num_rows($resultados); 

      while ($filas = mysqli_fetch_array($resultados)) { 
          $datos[] = $filas['tx_carrera'] ; 
      } 
      
      /*********************************
       * CONSTRUCCION DE LOS ELEMENTOS *
       *********************************/
      for($i = 0; $i < $elemetos; $i++){ 
          echo "<label><strong>" . ($i+1) . ")" . "</strong><select class='selectcontrol' title=Selecciona el Color><label>";
          echo "<option>Seleccione el Color</option>";
          for($j = 0; $j < $cantidad; $j++){ 
              echo "<option>" . $datos[$j] . "</option>";
          }
          echo "</select>";
      }
  ?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>