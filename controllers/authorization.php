<?php

if($_POST['email']==='test@gmail.com' &&
    $_POST['password']==='test'){
    session_start();
    $_SESSION['auth']=true;
    setcookie('email',$_POST['email']);
    header('location: /protected');

}else{
    header('location: /login?email=' . $_POST['email']);
}
