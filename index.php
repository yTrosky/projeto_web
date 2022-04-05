<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa -> setNome("Thiago Cruz Machado");
echo $pessoa -> getNome();

?>
