<?php

class Usuario {
    public string $nome;
    public string $sobrenome;
    public string $e_mail;
    public string $senha;
    public string $investimento;
    public string $tipoUsuario;
    public string $perfil;
    public string $nascimento;
    public string $cpf;

    public function __construct(string $nome, string $sobrenome, string $e_mail, string $senha, string $nascimento,string $cpf){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->e_mail = $e_mail;
        $this->senha = $senha;
        $this->investimento = 0;
        $this->tipoUsuario = 0;
        $this->nascimento = date("Y-m-d");
        $this->cpf = $cpf;
    }

}







?>