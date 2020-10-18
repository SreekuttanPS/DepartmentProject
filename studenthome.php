<?php
session_start();
?>
<html>
    <head>
    <title>student</title>
    <style>
        body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: #34495e;
    }
    .box{
      width: 300px;
      height: 900px;
      padding: 40px;
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%,-50%);
      background: #fff9f9;
      text-align: center;
    }
    .box button{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: black;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    .box button:hover{  
      background: #2ecc71;
    }
    .box a{
        text-decoration: none;
    }
    button{
      border:0;
      background: white;
      display: block;
      margin: 5px 5px;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 50px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    button:hover{  
      background: #2ecc71;
    }
    a{
        text-decoration: none;
    }
    </style>
        
    </head>
    <?php
    $em=$_SESSION['email'];
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query="select * from student where emailid='$em'";
    $data=mysqli_query($con,$query);
    if(mysqli_num_rows($data)>0)
    {
     $row = mysqli_fetch_assoc($data);
    } 
        ?>
    <body>
    <form class="box">
        <h1> WELCOME <?php echo $row['name']; ?></h1>
        <button><a href="syllabus3.php">view syllabus</a></button><br>
        <button><a href="viewqp.html">view question paper</a></button><br>
        <button><a href="viewtt.html">view Time table</a></button><br>
        <button><a href="makereview.php">review your teacher</a></button><br>
        <button><a href="studentprofile.php">view profile</a></button><br>
    </form>
    <button><a href="logout.php">logout</a></button><br>
    </body>
    </html>
    