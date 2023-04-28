<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="sign-in-from.scss">
</head>

<body>


  <div class="grid-container">
    <?php include('dibuja_menu.php'); ?>
    <div class="grid-x">
    
      
      <div class="cell small-6">
        <h3>Ingreso de datos - Clientes</h3>
        <form action="insertar1.php" method="POST">
          <label for="txtid">Id Usuario </label>
          <input type="number" name="txtide" id="txtide" required>
          <label for="txtnom">Nombres completos </label>
          <input type="text" name="txtnom" id="txtnom" required maxlength="50">
          <label for="txtid">Identificación </label>
          <input type="number" name="txtid" id="txtid" required>
          <label for="txtgen">Genero</label>
          Masculino <input type="radio" name="txtgen" value="M">
          Femenino <input type="radio" name="txtgen" value="F"><br>
          <label for="txteda">Telefono</label>
          <input type="number" name="txttel" id="txttel" required>
          <label for="txteda">Direccion</label>
          <input type="text" name="txtdir" id="txtdir" required>
          

          <hr>
          <input type="submit" value="Ingresar Datos" class="button primary">
          
        </form>


      </div>
      <div class="cell small-6">

    </div>


    



  </div>
   

  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>
<div data-role="footer">
            <center><p>Realizado por Esteban Urbina <br>PASTO NARIÑO<br>2021</p></center>
        </div>

</html>