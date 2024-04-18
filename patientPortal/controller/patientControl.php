<?php
 include '../models/mydb.php';
$name = $email = $phone  =$dob=$password= "";
$nameError = $emailError = $phoneError =$dobError=$passwordError=$hasError="";

if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
        if (!is_numeric($_REQUEST['name']) ) {
        $name = $_REQUEST['name'];
    } else {
        $nameError = "Enter only alphabets";
        $hasError=1;
    }

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email ) && strlen($email)>30)  {
            $emailError = "Enter a valid email address less than 30 characters";
            $hasError=1;
    } else {
            $email = $_REQUEST['email'];   
    }

    if (strlen($_REQUEST['phone'])==11) {
        $phone = $_REQUEST['phone'];
    } else {
        $phoneError = "Enter  11 digit phone number";
        $hasError=1;
    }
    if(!preg_match('/[^a-z0-9 _]+/i',$_REQUEST['password'])){
        $passwordError = "include special char";
        $hasError=1;
        
    } else {
            $password = $_REQUEST['password'];
    }
    if(!empty($_REQUEST['dob'])){
        $dob = $_REQUEST['dob'];
    }
    else {
        $dobError = "Enter DOB";
        $hasError=1;
    }
    if($hasError!=1){
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->AddPatient($conObj,$_REQUEST['name'],$_REQUEST['dob'],$_REQUEST['phone'],$_REQUEST['email'],$_REQUEST['password']);
        if($result === TRUE)
        {
            echo "Successfully Added";
        }
        else{
            echo "Please complete the validation";
        }
    }


}
