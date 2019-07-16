<?php session_start(); ?>
<?php include_once 'includes/header.inc.php' ?>
    <?php include_once 'includes/menu.inc.php' ?>

    <div class="row container">
        <div class="col s12">
            <h5 class="light">Edição de Registros</h5><hr>
    </div>

    <?php 
        include_once 'banco_de_dados/conexao.php';

        $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT );
        $querySelect = $link -> query( "select * from tb_clientes where id='$id'" );

        while( $registro = $querySelect -> fetch_assoc() ) {
            $id = $registro['id'];
            $nome = $registro['nome'];
            $email = $registro['email'];
            $telefone = $registro['telefone'];
        }
    ?>

    <!-- Formulário de Cadastro -->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="image/avatar-2.png" alt="[imagem]" width="100"></legend>
                <h5 class="light center">Alteração</h5>

                <!-- CAMPO NOME -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
                    <label class="active" for="nome">Nome do Cliente</label>
                </div>

                <!-- CAMPO EMAIL -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
                    <label class="active" for="email">Email do Cliente</label>
                </div>

                <!-- CAMPO TEL -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
                    <label class="active" for="telefone">Telefone do Cliente</label>
                </div>

                <!-- Button -->
                <div class="input-field col 12">
                    <input type="submit" value="alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>