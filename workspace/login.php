<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
    <title>Вход</title>
   <?php       require "header.php";
   ?>
   <style>  .form form {
  width: 300px;
  margin: 0 auto;
  padding-top: 20px;
}</style>
    </head>
    <body>
       
    
    <div class="form" style="margin-top:20%;">
<form class="form-horizontal" role="form" method="POST" action="testreg.php">
  <div class="form-group">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Логин" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Пароль" name="password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-sm">Войти</button>
    </div>
  </div>  
</form>
</div><!-- form  -->
    
     </body>
    </html>