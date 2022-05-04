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

                <form method="POST" action="../controller/coferencia_login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" name="e_mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
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