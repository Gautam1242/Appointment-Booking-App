<?php
include '../config/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from patient where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:viewpatient.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>