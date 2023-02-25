<?php

if($_POST['email']==='test@gmail.com' &&
    $_POST['password']==='test'){
    session_start();
    $_SESSION['auth']=true;
    setcookie('email',$_POST['email']);
    header('location: /index/protected');

}else{
    header('location: /index/login?email=' . $_POST['email']);
}
