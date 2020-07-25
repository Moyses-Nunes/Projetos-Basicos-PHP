<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            
            $c1 = new ContaBanco();
            $c1->abrirConta("cc");
            $c1->setDono("Jubileu");
            $c1->setNumConta(1111);
            
            $c2 = new ContaBanco();
            $c2->abrirConta("cp");
            $c2->setDono("Creuza");
            $c2->setNumConta(2222);
            
            $c1->depositar(300);
            
            $c2->depositar(500);
            $c2->sacar(100);
            
            print_r($c1);
            print_r($c2);
        ?>
        </pre>
    </body>
</html>
