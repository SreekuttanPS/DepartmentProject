<html>
    <head>
    <style>
            body{
          margin: 0;
          padding: 0;
          font-family: sans-serif;
          background: #34495e;
        }
        .box{
          width: 300px;
          height: 400px;
          padding: 40px;
          position: absolute;
          top: 50%;
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
            color: black;
        }
        button{
      border:0;
      background: white;
      display: block;
      margin: 0px 0px;
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
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);


$file1 = "uploads/".$file["name"];

    $query="update syllabus set syllabus='$file1' where deptid=1";
    $data=mysqli_query($con,$query);
    
    $q1='select * from syllabus';
    $data1=mysqli_query($con,$q1);
    if(mysqli_num_rows($data1)>0)
    {
    $row = mysqli_fetch_assoc($data1);
    
        $file2 = $row['syllabus'];
    }
    else{
        echo "<script> alert('UNABLE TO FIND SYLLABUS')</script>";
        echo "<script>location.href='syllabus3.php'</script>";;
    }
?>
<form class="box">
    <h1> VIEW YOUR SYLLABUS </h1>
    <button><a href="<?php echo $file2; ?>">CLICK FOR SYLLABUS</a></button>
</form>
</html>    
