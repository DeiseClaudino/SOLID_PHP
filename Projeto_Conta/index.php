<?php
function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");
