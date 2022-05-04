<?php
require_once("Banco.php");
require_once("Investimentos.php");
?>

<?php

 class InvestimentosDAO{
    private static $instance;

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function buscarfundos(){
        $bucarfundo = Banco::getInstance()->query("SELECT * FROM Fundo_Investimentos", PDO::FETCH_OBJ);
        $bucarfundo->execute();
        return $bucarfundo->fetchall();
    }
    
    public function searchinvestimentos(){
        $investido = Banco::getInstance()->query("SELECT * FROM usuario_fundo", PDO::FETCH_OBJ);
        $investido->execute();
        return $investido->fetch();
    }

 }





?>