<?php
session_start();
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
 
    $id = $_SESSION['email'];
    $name=$_POST["name"];
    $addr=$_POST["address"];
    $ph=$_POST["phone"];
    $s = "update teacher set name='$name',address='$addr',phone='$ph' where emailid='$id'";
    if(mysqli_query($con,$s))
    {
        echo "<script> alert('data entered successfully')</script>";
        echo "<script>location.href='teachprupdate.php'</script>";
    }
    else
    {
        echo "<script> alert('Unable to enter data')</script>";
        echo "<script>location.href='teachprupdate.php'</script>";
    }
   mysqli_close($con); 
?>