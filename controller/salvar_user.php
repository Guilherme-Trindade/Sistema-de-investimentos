<?php
include "../inc/cabecalho.php";
require_once("../models/Usuario.php");
require_once("../models/UsuarioDao.php");
?>

<?php
    $usuario = new Usuario($_POST["nome"],$_POST["sobrenome"],$_POST["e_mail"], $_POST["senha"],$_POST["nacimento"],$_POST["cpf"]);
    UsuarioDao::getInstance()->save($usuario);
    header('Location: ../view/login.php');





?>







<?php
include "../inc/rodape.php";
?>