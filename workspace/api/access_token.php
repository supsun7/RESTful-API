<?php

function access_token_check($access_token){
    $status = false;
    include ("../db.php");
    $result = mysql_query("SELECT accsses_t FROM users WHERE accsses_t='$access_token'",$db);
    $myrow = mysql_fetch_array($result);
    if ($myrow['accsses_t']==$access_token) {
        $status = true;
    }
    return $status;
}
?>