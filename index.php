<?php
include("constant.php");

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title><?php echo Constant::getTitulo(); ?></title>
        <link rel="stylesheet" href="css/admin.css" />
        <script src="js/jqv2.1.0.js"></script>
        <script src="js/admin.js"></script>
        
    </head>

    <body>

        <div id="header">
            <font size=4><?php echo Constant::getTitulo(); ?></font>
        </div>
        
        <div id="mainarea">
            <form name="form1" method="post">
                <div id='cantidad'>
                    <textarea id='retirar' name='retirar'></textarea>
                </div>
                <div id='boton'>
                    <img src="img/pesos.jpg" width="100px" height="100px">
                </div>
                
                <div id='indicador1'>
                    <?php echo Constant::getCantidad(); ?><img src="img/flecha.gif" width="50px" height="50px">
                </div>
                <div id='indicador2'>
                    <?php echo Constant::getPresiona(); ?><img src="img/flecha.gif" width="50px" height="50px">
                </div>
                <div id='efectivo'>
                  billetuquis 
                </div>
                
                 <div id='calcular'>
                </div>
                

            </form>
        </div>

        <div id="footer">
           
        </div>



    </body>

</html>