<?php
include '../models/mydb.php';
session_start();
if(isset($_REQUEST['login'])){
    $_SESSION['email'] = $_REQUEST['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->login($conObj, $_REQUEST['email'], $_REQUEST['password']);
    if($result == TRUE)
    {
        echo "login success";
       header("Location: ../view/homepage.php");
    }
}
?>