<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
        <?php include('dibuja_menu.php'); ?>
        <h2>Modificar personas</h2>
        <div class="grid-x">
        <div class="cell small-6">
            <?php 
                include("conexion.php");
                $bd  = conectar();
                if (!$bd) return;
                $victima = $_POST["victima"];
                $sql = "select * from personas where ideper ='$victima'";
                $res = mysqli_query($bd,$sql);
                $arr = mysqli_fetch_array($res);
            ?>

        <form action="modificar3.php" method="post">
            <label for="txtid">Identificación </label>
            <input type="number" name="txtid" id="txtid" required value="<?php echo $arr[0] ?>">
            <input type="hidden" name="txtid2" id="txtid2" required value="<?php echo $arr[0] ?>">
            <label for="txtnom">Nombres completos </label>
            <input type="text" name="txtnom" id="txtnom" required maxlength="50" value="<?php echo $arr[1] ?>">
             <label for="txtgen">Genero</label>
             <?php 
                 if ($arr[2]=="F"){
                    echo "Masculino <input type='radio' name='txtgen' value='M'>";
                    echo "Femenino  <input type='radio' name='txtgen' value='F' checked><br>";
                 }
                 else{
                    echo "Masculino <input type='radio' name='txtgen' value='M' checked>";
                    echo "Femenino  <input type='radio' name='txtgen' value='F'><br>";
                 }
             ?>
            
            <label for="txteda">Edad</label> 
            <input type="number" name="txteda" id="txteda" required min="0" max="120" value="<?php echo $arr[3] ?>">
            <hr>
            <input type="submit" value="Actualizar Datos" class="button primary">
        </form>
                 <?php
                    mysqli_close($bd); 
                 ?>
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
