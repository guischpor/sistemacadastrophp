<?php 
include_once 'conexao.php';

//busca todos os dados da tabela
$querySelect = $link -> query( 'select * from tb_clientes' );
while ( $registros = $querySelect -> fetch_assoc() ) {
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];

    echo "<tr>";
        echo "<td>$nome</td>";
        echo "<td>$email</td>";
        echo "<td>$telefone</td>";
        echo "<td>
                <a href='editar.php ? id=$id' class='waves-effect waves-light btn blue'>
                    <i class='material-icons'>edit</i>
                </a>
             </td>";
        echo "<td>
                <a href='banco_de_dados/delete.php ? id=$id' class='waves-effect waves-light btn red'>
                    <i class='material-icons'>delete</i>
                </a>
            </td>";
    echo "</tr>";
}