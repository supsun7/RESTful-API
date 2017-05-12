<?php
if (isset($_GET['access_token'])) { $access_token = $_GET['access_token']; if ($access_token == '') { unset($access_token);} }
require ("access_token.php");
include ("../db.php");
require ("../function.php");
$access_token =clear_string($access_token);
if (access_token_check($access_token)) {
    $result = mysql_query("SELECT * FROM users WHERE accsses_t='$access_token'",$db);
    $myrow = mysql_fetch_array($result);
    echo '{"response":{"id":'.$myrow['u_id'].',"adress":"'.$myrow['adress'].'","fio":"'.$myrow['fio'].'"}';
}
else{
    echo '{"error"}';
}
?>