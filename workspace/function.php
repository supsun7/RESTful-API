<?php
function clear_string($s){
    $s = stripslashes($s);
    $s = htmlspecialchars($s);
    $s = trim($s);
    return $s;
}

?>