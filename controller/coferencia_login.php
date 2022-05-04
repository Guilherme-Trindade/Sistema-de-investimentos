<?php
require_once("../models/Banco.php");
require_once("../models/Usuario.php");
require_once("../models/UsuarioDao.php");
?>

<?php
$e_mailcheck = $_POST["e_mail"];
$senhacheck = $_POST["senha"];

$obj = UsuarioDao::getInstance()->findbyemail($e_mailcheck);

session_start();

if($senhacheck == $obj->senha){
    $_SESSION['logado'] = true;
    $_SESSION["e_mail"] = $e_mailcheck;
    $_SESSION["tipoUsuario"] = $obj->tipoUsuario;
    $_SESSION["investimento"] = $obj->investimento;
    header('Location: ../view/meus_investimento.php');
}else{
    $_SESSION["erro_login"] = "login invalido, senha ou e-mail errados";
    header('Location: ../view/login.php');}

?>