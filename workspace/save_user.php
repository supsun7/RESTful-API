<html>
<head> <meta charset="utf-8"></head><body><?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['adress'])) { $adress=$_POST['adress']; if ($adress =='') { unset($adress);} }
    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    
    require("function.php");
    $login = clear_string($login);
    $password = clear_string($password);
    $adress = clear_string($adress);
    $name = clear_string($name);
    
    
     include ("db.php");
    $result = mysql_query("SELECT u_id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['u_id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (`login`, `password`, `adress`, `fio`) VALUES('$login', '$password', '$adress', '$name');");

    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='panel.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?></body></html>