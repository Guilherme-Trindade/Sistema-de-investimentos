<?php

class Investimentos {
    public string $data_invest;
    public string $data_vencimento;
    public string $valor_investido;

    public function __construct(string $valor_investido){
        $this->valor_investido = 0;
        $this->data_invest = date("Y-m-d");
        $this->data_vencimento = date("Y-m-d");
    }

}

?>