<?php 
session_start();
// user login 
include("../config/db_con.php");

// if(isset($_POST['login'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     //$password = md5($password);
//     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $result = mysqli_query($link, $sql);
//     $row = mysqli_fetch_array($result);
//     $count = mysqli_num_rows($result);
//     if($count == 1){
//         session_start();
//         $_SESSION['user_id'] = $row['id'];
//         $_SESSION['user_name'] = $row['name'];
//         $_SESSION['user_email'] = $row['email'];
//         $_SESSION['user_password'] = $row['password'];
//         //$_SESSION['user_role'] = $row['role'];
//         header("location: ../profile.php");
//     }else{
//         echo "<script>alert('Email or Password is incorrect!')</script>";
//     }
// }
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password =  md5($_POST['password']);
  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);
  if($count == 1){
    
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['address'] = $row['address'];
    
    header("location: ../profile.php");
  }else{
    header("location: ../login_form.php");
  }
  
}