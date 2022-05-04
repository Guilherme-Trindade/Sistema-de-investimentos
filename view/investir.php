<?php
session_start();
if ((!$_SESSION['logado'])) {
  header('location:login.php');
}
?>

<?php
include "../inc/cabecalho.php";
include_once "../controller/investir.php";
include_once "../models/InvestimentosDAO.php";
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
          if ($_SESSION["tipoUsuario"] == 1) { ?>
            <li class="nav-item active ml-5 mr-5">
              <button type="button" class=" rounded btn-outline-light text-white"><a class="nav-link" href="../view/clientes.php">Clientes<span class="sr-only">(Página atual)</span></a></button>
            </li>
          <?php ;
          } ?>
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
              <?php foreach($lista_fundos as $fundo){ ?>
    
                  <div class="row">
                    <div class="accordion" id="accordionExample">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <h3><?php echo $fundo->nome ?></h3>
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                <form action="../controller/investir.php" method="POST">
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Valor a Investir">
                                      </div>
                                      <button type="submit" class="btn btn-outline-danger">Investir</button>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                          
                    </div>



                  </div>
              <?php } ?>

              
           

            </div>

          </div>
      
  </section>
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

<?php
include "../inc/rodape.php";
?>