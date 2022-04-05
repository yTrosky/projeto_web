<?php
require_once("pessoa.class.php");
require_once("empresa.class.php");

$pessoa = new Pessoa();
$pessoa -> setNome("Thiago Cruz Machado");
echo $pessoa -> getNome();

$empresa = new Empresa();
$empresa -> setRazaoSocial("Escola XPTO LTDA");
echo $empresa -> getRazaoSocial();

?>
