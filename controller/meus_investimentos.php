<?php
require_once("../models/Banco.php");
require_once("../models/Investimentos.php");
require_once("../models/InvestimentosDAO.php");
?>

<?php
$obj = InvestimentosDAO::getInstance()->searchinvestimentos();
?>