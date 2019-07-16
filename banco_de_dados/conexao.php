<?php
//conexão com banco de dados
$utf8 = header( "Content-Type: text/html; charset=utf-8" );
//link de conexao com o localhost, nome de usuario, senha, e nome do banco de dados
$link = new mysqli( 'localhost', 'root', '', 'db_cadastro' );
$link -> set_charset( 'utf8' );