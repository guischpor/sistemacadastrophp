<?php
//conexão com banco de dados
$utf8 = header( "Content-Type: text/html; charset=utf-8" );
//link de conexao com o localhost, nome de usuario, senha, e nome do banco de dados
$link = new mysqli( 'sql200.main-hosting.eu', 'u285936505_sys', 'wallaBEway@4545', 'u285936505_sys' );
$link -> set_charset( 'utf8' );