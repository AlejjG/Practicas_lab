<?php
error_reporting(0);
if (isset($_POST['btn'])){
$numero1 = $_POST['caja1'];
$numero2 = $_POST['caja2'];
$numero1 =(int) $numero1;
$numero2 =(int) $numero2;
$resultado = $numero1 + $numero2;
$valor = $resultado;
echo $valor;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <title>Practica 1 || Includes con PHP</title>
    
</head>
<body>
<script scr="js/bootstrap.bundle.min.js"></script>
    <!-- navbar -->
    <?php include "include/navbar.php"?>
    <!-- terminanavbar -->
    <?php include "include/menu.php"?>
    

    <div class="col-lg-12">
        <div class="row">
            <h1 class="text-center py-2">Sumas</h1>
        </div>
        <div class="row">
            <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="text" name="caja1" required>
            <input type="text" name="caja2" required>
            <input type="submit" name="btn" value="calcular">

           </form>
        </div>
    </div>
   
</body>
</html>