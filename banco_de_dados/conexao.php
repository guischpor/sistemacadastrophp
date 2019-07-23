<?php
//conexão com banco de dados
$utf8 = header( "Content-Type: text/html; charset=utf-8" );

$localhost = 'sql200.main-hosting.eu';
$user = 'u285936505_sys';
$password = 'wallaBEway@4545';
$db_name = 'u285936505_sys';

$link = new mysqli( $localhost, $user, $password, $db_name );
$link -> set_charset( 'utf8' );