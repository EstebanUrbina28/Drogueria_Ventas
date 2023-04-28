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
        <h3>Ingreso Productos</h3>
        <form action="insertPro.php" method="POST">
          <label for="txtid">Id Pedido </label>
          <input type="number" name="txtidp" id="txtidp" required>
          <label for="txtmed">Medicamentos</label>
          <select name ="lstmed" id="lstmed">
             <option value="Simvastatina">Simvastatina </option>
             <option value="Aspirina">Aspirina</option>
             <option value="Omeprazol"> Omeprazol  </option>
             <option value="Lezotiroxina Sodica"> Lezotiroxina Sodica </option>
             <option value="Ramipril"> Ramipril</option>
             <option value="Amlodipina"> Amlodipina</option>
             <option value="Paracetamol"> Paracetamol </option>
             <option value="Atorvastatina"> Atorvastatina </option>
             <option value="Salbutamol"> Salbutamol </option>
             <option value="Lansoprazol"> Lansoprazol </option>
             <option value="Hidrocloruro"> Hidrocloruro</option>
             <option value="Colecalciferol"> Colecalciferol</option>
             <option value="Bisoprolol dumarato"> Bisoprolol dumarato </option>
             <option value="Citalopram Hidrobomuro"> Citalopram Hidrobomuro </option>
             <option value="Amoxicilina"> Amoxicilina </option>
             <option value="Amitriptina"> Amitriptina </option>
             <option value="Warfanina Sodica"> Warfanina Sodica </option>
             <option value="Botella De Agua"> Botella De Agua </option>
             <option value="Nivela Tarro"> Nivela Tarro </option>
             <option value="Bloqueador SolarUmbrella 70"> Bloqueador SolarUmbrella 70 </option>
          </select>
          <label for="txteda">Cantidad</label>
          <input type="number" name="txtcan" id="txtcan" required max="100" value="1">
          <?php
             date_default_timezone_set('America/Mexico_City');
             $fecha=date("Y-m-d ");
     
            ?>
          <label for="txtfecha">Fecha Vencimiento </label>
          <input type="Date"txtid" id="txtfecha" required vaulue="<?=$fecha?>">
          <label for="txtvalor">Precio </label>
          <input type="number" name="txtvalor" id="txtvalor" required max="200000" value="5000">
          <label for="txtip">Tipo Medicamento</label>
          <select name ="lstip" id="lstip">
             <option value="Analgesico"> Analgesico </option>
             <option value="Antialérgicos"> Antialérgicos</option>
             <option value="Antidiarreicos y laxantes"> Antidiarreicos y laxantes </option>
             <option value="Antiinfecciosos"> Antiinfecciosos </option>
             <option value="Antiinflamatorios"> Antiinflamatorios </option>
             <option value="Antipiréticos"> Antipiréticos </option>
             <option value="Antitusivos y mucolíticos"> Antitusivos y mucolíticos </option>
          </select>
          <hr>
          <input type="submit" value="Ingresar Datos" class="button primary">
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