<?php
class Model{
    function OpenCon(){
        $conn = new mysqli("localhost","root","","sceg");
        return $conn;
    }
    function AddInfo($conn,$name,$dob,$phone,$email,$password )
    {
        
    }
}
?>