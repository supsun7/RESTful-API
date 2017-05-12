<html><head> <meta charset="win-1251"></head><body><?php
    session_start();//  вся процедура работает на сессиях. 
    if (isset($_POST['login'])) { $login1 = $_POST['login']; if ($login1 == '') { unset($login1);} } 
    if (isset($_POST['password'])) { $password1=$_POST['password']; if ($password1 =='') { unset($password1);} }

if (empty($login1) or empty($password1)) 
  {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
require ("function.php");
include ("db.php");
$login1 = clear_string($login1);
$password1 = clear_string($password1);
$result = mysql_query("SELECT * FROM users WHERE login='$login1'",$db); 
    $myrow = mysql_fetch_array($result);
    echo $myrow['password'];
    if (empty($myrow['password'])) 
    {
 
    exit ("Неверный логин или пароль");
    }
    else {

    if ($myrow['password']==$password1) {

    $_SESSION['login']=$myrow['login']; 
    $_SESSION['u_id']=$myrow['u_id'];
    echo "Вы успешно вошли на сайт! <a href='panel.php'>Получить access token</a>";
    }
 else {


    exit ("Неверный логин или пароль");
    }
    }
    ?></body></html>