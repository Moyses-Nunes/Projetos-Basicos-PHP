<?php

interface Publicacao {
    function abrir();
    function fechar();
    function folhear();
    function avancarPag();
    function voltarPag();
}
