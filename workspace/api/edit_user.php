<?php
if (isset($_GET['access_token'])) { $access_token = $_GET['access_token']; if ($access_token == '') { unset($access_token);} }
if (isset($_GET['adress'])) { $adress = $_GET['adress']; if ($adress == '') { unset($adress);} }
if (isset($_GET['fio'])) { $fio = $_GET['fio']; if ($fio == '') { unset($fio);} }
require ("access_token.php");
include ("../db.php");
require ("../function.php");
$access_token =clear_string($access_token);
$adress =clear_string($adress);
$fio =clear_string($fio);
if (access_token_check($access_token)) {
     $result = mysql_query("UPDATE  users SET  adress =  '$adress', fio =  '$fio' WHERE accsses_t =  '$access_token'  ;",$db);
     echo "+";
}else{
    echo "-";
}

?>