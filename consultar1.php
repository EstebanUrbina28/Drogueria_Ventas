<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
    <?php include('dibuja_menu.php'); ?>
    <div class="grid-x">
      
      <div class="cell small-6">
        <h2>Consulta de personas por genero</h2>
        <form action="consultar2.php" method="get">
          <label for="txtid">Seleccione el Genero de la persona </label>
            <select name ="lstgen" id="lstgen">
                <option value = "M">Masculino</option>
                <option value = "F">Femenino</option>
            </select>
          <hr>
          <input type="submit" value="Consultar Datos" class="button primary">
        </form>


      </div>
      <div class="cell small-6">
      </div>

    </div>



    



  </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>