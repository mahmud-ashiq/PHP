<?php
class Model{
    function OpenCon(){
        $conn= new mysqli("localhost","root","","secg");
        return $conn;
    }
    function AddPatient($conn,$name,$dob,$phone,$email,$password)
    {
        $sql ="INSERT INTO patient (name, dob, phone, email, password) VALUES ('$name','$dob','$phone','$email','$password')";
        return $conn->query($sql);   
    }
    function login($conn, $email, $password)
    {
        $sql = "SELECT email, password  FROM patient WHERE email='$email' AND password='$password'";
        return $conn->query($sql);
    }
    function ShowProfile($conn, $email)
    {
        $sql = "SELECT *  FROM patient WHERE email='$email'";
        return $conn->query($sql);
    }
    function UpdateUser($conn, $email, $name, $phone, $password)
    {
        $sql = "UPDATE patient SET name='$name', phone='$phone', password='$password'  WHERE email='$email'";
        return $conn->query($sql);
    }
    function UploadDocument($conn, $email, $photo, $nid, $medical)
    {
        $sql= "INSERT INTO documents (email, photo, nid, medical) VALUES ('$email', '$photo', '$nid', '$medical')";
        return $conn->query($sql);
    }



    
}
?>