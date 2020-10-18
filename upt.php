<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $id = $_GET['a'];
    $s = mysqli_query($con,"update teacher set status=1 where emailid='$id'");
    header("Location:statusteacher.php");
?>