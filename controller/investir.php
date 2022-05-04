<?php
require_once("../models/Banco.php");
require_once("../models/Investimentos.php");
require_once("../models/InvestimentosDAO.php");
?>

<?php
$lista_fundos = InvestimentosDAO::getInstance()->buscarfundos();
?>



