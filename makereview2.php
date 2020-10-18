<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$email=$_POST["email"];
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$q6=$_POST["q6"];
$q7=$_POST["q7"];
$q8=$_POST["q8"];
$q9=$_POST["q9"];
$q10=$_POST["q10"];
$name=$_POST["name"];
$comment=$_POST["comment"];
if(isset($comment))
{
    $qu="insert into review (emailid,q1,q2,q3,q4,q5,comment)values('$email',$q1,$q2,$q3,$q4,$q5,'$comment')";
    if(mysqli_query($con,$qu))
    {
        echo "<script> alert('reviw submitted successfully')</script>";
        echo "<script>location.href='makereview.php'</script>";
     }
     else
     {
         echo "<script> alert('Unable to save data!!!')</script>";
        echo "<script>location.href='makereview.php'</script>";
     }
}
else
{
    $qu="insert into review (emailid,q1,q2,q3,q4,q5)values('$email',$q1,$q2,$q3,$q4,$q5)";    
if(mysqli_query($con,$qu))
{
    echo "<script> alert('reviw submitted successfully')</script>";
    echo "<script>location.href='makereview.php'</script>";
 }
 else
 {
     echo "<script> alert('Unable to save data!!!')</script>";
    echo "<script>location.href='makereview.php'</script>";
 }
}
mysqli_close($con);
?> 