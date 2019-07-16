<?php session_start(); ?>
<?php include_once 'includes/header.inc.php' ?>

    <?php include_once 'includes/menu.inc.php' ?>

    <!-- Formulário de Cadastro -->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
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
                    
                    <button class="btn waves-effect waves-light blue" type="submit" name="action">cadastrar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="action">limpar
                        <i class="material-icons right">clear</i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>
