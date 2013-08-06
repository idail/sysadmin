<?php

$link = mysql_connect('localhost', 'root', '123');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}


?>