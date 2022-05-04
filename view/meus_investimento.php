<?php
session_start();
if(( ! $_SESSION['logado'] ))
{
  header('location:login.php');
  }
?>

<?php
include "../inc/cabecalho.php";
?>

<body class="bg-light">
  <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
              <a class="navbar-brand text-light" href="../view/login.php">TrindadeBank</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active ml-5 mr-5">
                    <button type="button" class=" rounded btn-outline-light text-white"><a class="nav-link" href="../view/meus_investimento.php">Meus Investimetos <span class="sr-only">(Página atual)</span></a></button> 
                    </li>
                    <li class="nav-item active ml-5 mr-5">
                    <button type="button" class=" rounded btn-outline-light text-white"><a class="nav-link" href="../view/investir.php">Investir <span class="sr-only">(Página atual)</span></a></button> 
                    </li>
                    <li class="nav-item active ml-5 mr-5">
                    <button type="button" class=" rounded btn-outline-light text-white"><a class="nav-link" href="../view/Depositar&Sacar.php">Depositar/Sacar <span class="sr-only">(Página atual)</span></a></button> 
                    </li>
                        <?php
                          if ($_SESSION["tipoUsuario"] == 1){?>
                            <li class="nav-item active ml-5 mr-5">
                             <button type="button" class=" rounded btn-outline-light text-white"><a class="nav-link" href="../view/clientes.php">Clientes<span class="sr-only">(Página atual)</span></a></button> 
                            </li>
                              <?php ;}?>
                    <li class="nav-item active ml-5 mr-5">
                      <a class="nav-link text-white" href="../view/informacoes_cliente.php">Ola, <b><?php echo $_SESSION["e_mail"]; ?></b> seja bem vindo <span class="sr-only">(Página atual)</span></a>
                    </li>
                  </ul>
              </div>
          </nav>
  </header>

  <section>

      <div class="container">

        <div class="col-12 mt-5">
          <div class="bg-white rounded p-3">
            <span class="text-black-50"><b>#$obj->id</b></span><h3 class=""></h3>
            <hr>
            <div class="row justify-content-between">
              <span class="pl-3"><b>Valor Inicial:</b></span><span><b>Data do Investimento:$obj->data_invest</b></span><span class="pr-3"><b>Data de vencimento:</b></span>
            </div>
            
          </div>

        </div>

      </div>

  </section>





</body>

<?php
include "../inc/rodape.php";
?>