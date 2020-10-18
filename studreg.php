<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$email=$_POST["email"];
$password=$_POST["password"];
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$blood=$_POST["blood"];
$semester=$_POST["semester"];
$batch=$_POST["batch"];
$qu="insert into student (emailid,password,name,address,phone,bloodgroup,semester,batch)values('$email','$password','$name','$address',$phone,'$blood',$semester,'$batch')";
if(mysqli_query($con,$qu))
{
   echo "<script> alert('data entered successfully')</script>";
   echo "<script>location.href='login.html'</script>";
}
else
{
    echo "<script> alert('Unable to save data!!!')</script>";
   echo "<script>location.href='studreg.html'</script>";
}
mysqli_close($con);
?> 