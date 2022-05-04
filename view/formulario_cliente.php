<?php
include "../inc/cabecalho.php";
?>
<body class="bg-primary">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-light" href="../view/login.php">TrindadeBank</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                <button type="button" class=" rounded btn-outline-light text-white"><a class="nav-link" href="../view/formulario_cliente.php">Registrar Usuario <span class="sr-only">(Página atual)</span></a></button> 
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="row">

        <div class="col-2">

        </div>
        
        <div class="col-8 pt-5 pl-5">
            <div class="bg-white mt-5 p-5 rounded">

                <form action="../controller/salvar_user.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="e_mail" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Nome</label>
                        <input type="text" class="form-control" name= "nome" id="inputAddress" placeholder="nome">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Sobrenome</label>
                        <input type="text" class="form-control" name= "sobrenome" id="inputAddress2" placeholder="Sobrenome">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">CPF</label>
                        <input type="text" class="form-control" name= "cpf" id="inputCity">
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputCEP">Nacimento</label>
                        <input type="text" class="form-control" name= "nacimento" id="inputCEP">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Clique em mim
                        </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>

            </div>
            
        </div>

        <div class="col-2">

        </div>
    </section>

</body>

<?php
include "../inc/rodape.php";
?>