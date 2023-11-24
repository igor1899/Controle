<?php
    define('HOST', 'monorail.proxy.rlwy.net');
    define('USER', 'root');
    define('PASS', '4-2CCD3g-DE4hH-aC5cc--EddEEE3fEc');
    define('BASE', 'railway');
    define('MYSQLPORT', '54663');

    
    $mysqli = new MySQLi(HOST,USER,PASS,BASE, MYSQLPORT);
    
// Verificar a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}
?>
