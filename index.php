<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CSS MATERIALIZE-->
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pessoas PHP</title>
</head>
<body>

    <!-- Nav Menu -->
    <nav class="blue-grey">
        <div class="nav-wrapper container">
            <div class="brand-logo light">Sistema de Cadastro</div>
            <ul class="right">
                <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</a></li>
                <li><a href=""><i class="material-icons left">search</i>Consultas</a></li>
            </ul>
        </div>
    </nav>

    <!-- Formulário de Cadastro -->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="image/avatar-2.png" alt="[imagem]" width="100"></legend>
                <h5 class="light center">Cadastro de Clientes</h5>

                <!-- Mostra mensagens -->
                <?php 
                    if ( isset( $_SESSION['msg'] ) ) {
                        echo $_SESSION['msg'];
                        //limpa sessao
                        session_unset();
                    }
                
                
                ?>

                <!-- CAMPO NOME -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                    <label class="active" for="nome">Nome do Cliente</label>
                </div>

                <!-- CAMPO EMAIL -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlength="50" required>
                    <label class="active" for="email">Email do Cliente</label>
                </div>

                <!-- CAMPO TEL -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" required>
                    <label class="active" for="telefone">Telefone do Cliente</label>
                </div>

                <!-- Button -->
                <div class="input-field col 12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>
            </fieldset>
        </form>
    </div>

        


    <!-- Arquivos Importados JQUERY -->
    <script type="text/javascript" src="materialize/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    <!-- Inicialização JQUERY -->
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
</body>
</html>