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
      
      <div class="cell small-4">
        <h3>Reportes Parametizados</h3>
        <form id="frmReportes">
          <label for="txtnom">Nombre parcial </label>
          <input type="text" name="txtnom" id="txtnom" required maxlength="50">
          <label for="lstgen">Genero</label>
          <select name="lstgen" id="lstgen">
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
          </select>
          <hr>
          <input type="submit" value="Hacer consulta" class="button success">
        </form>


      </div>
      <div class="cell small-1"> </div>
      <div class="cell small-7" id="divSQL1"> </div>

    </div>



    



  </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>