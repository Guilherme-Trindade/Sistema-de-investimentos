<?php
require_once("Banco.php");
require_once("Usuario.php");
?>

<?php
    class UsuarioDao {
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }
        public function save(Usuario $user){
            $stm = Banco::getInstance()->prepare("INSERT INTO Usuario (nome,sobrenome, e_mail, senha, nascimento, cpf,tipoUsuario, investimento) values(:nome,:sobrenome, :e_mail, :senha, :nascimento, :cpf, :tipoUsuario, :investimento)");
            $stm->bindParam("nome",$user->nome);
            $stm->bindParam("sobrenome",$user->sobrenome);
            $stm->bindParam("e_mail",$user->e_mail);
            $stm->bindParam("senha",$user->senha);
            $stm->bindParam("nascimento",$user->nascimento);
            $stm->bindParam("cpf",$user->cpf);
            $stm->bindParam("tipoUsuario",$user->tipoUsuario);
            $stm->bindParam("investimento",$user->investimento);

            $stm->execute();


        }

        public function findbyemail($e_mail){
            $resultado = Banco::getInstance()->query("SELECT senha, e_mail, tipoUsuario FROM Usuario WHERE e_mail = \"$e_mail\"", PDO::FETCH_OBJ);
            $resultado->execute();
            return $resultado->fetch();
        }
    }




?>