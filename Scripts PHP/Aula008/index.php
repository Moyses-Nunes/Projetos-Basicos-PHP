<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        $p = array();
        $p[0] = new Pessoa("Moysés", 18, "masculino");
        $l = array();
        $l[0] = new Livro("Poeira em alto mar", "Chimbinha", 205, $p[0]->getNome());
        $l[0]->abrir();
        $l[0]->avancarPag();
        $l[0]->avancarPag();
        $l[0]->avancarPag();
        $l[0]->detalhes();
        ?>
    </body>
</html>
