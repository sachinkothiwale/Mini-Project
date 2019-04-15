<?php

$uname=$_POST['email'];
$pass=$_POST['pass'];

if(isset($_POST['login']))
{
  if($uname=='harshad@gmail.com')
  {
    if($pass=='harshad')
    {
      header('Location: home.html');
    }
    else
     {
        header('Location: login.html');
    }
  }
  else {
        header('Location: login.html');
  }
}

 ?>
