<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$email=$_POST["email"];
$password=$_POST["password"];
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$blood=$_POST["blood"];
$joindate=$_POST["joindate"];

$qu="insert into teacher (emailid,password,name,address,phone,bloodgroup,joindate)values('$email','$password','$name','$address',$phone,'$blood','$joindate')";
if(mysqli_query($con,$qu))
{
    echo "<script> alert('data entered successfully')</script>";
    echo "<script>location.href='login.html'</script>";
 }
 else
 {
     echo "<script> alert('Unable to save data!!!')</script>";
    echo "<script>location.href='teacherreg.html'</script>";
 }
mysqli_close($con);
?> 