<?php
    session_start();
    
 function get_token($u_id)
 {
     include("db.php");
     $result = mysql_query("SELECT login,password FROM users WHERE u_id='$u_id'",$db);
    $myrow = mysql_fetch_array($result);
    $s= md5($myrow['login'].$myrow['password']);
    $result = mysql_query("UPDATE users SET  accsses_t = '$s' WHERE  u_id =$u_id;",$db);
    return $s;
 }
 
echo get_token($_SESSION['u_id']);
 

 
?>