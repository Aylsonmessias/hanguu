<?php
   include('conexao.php');
   session_start();
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login'])){
      header("location:login.php");
      die();
   }
?>