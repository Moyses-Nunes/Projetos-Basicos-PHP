<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            $c1->rabiscar();
            print_r($c1);
           
        ?>
        </pre>
    </body>
</html>
