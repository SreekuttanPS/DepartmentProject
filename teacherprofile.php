<?php
session_start();
?>

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
  width: 500px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #ffffff;
  text-align: center;
}
.box h1{
  color: rgb(14, 0, 0);
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 10px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 300px;
  outline: none;
  color: #0b0b0b;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: rgb(45 96 50);
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
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
}

</style>

    </head> <body bgcolor="#34495e"> 
      
    <?php
    $em=$_SESSION['email'];
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query="select * from teacher where emailid='$em'";
    $data=mysqli_query($con,$query);
    echo '<form class="box"><table>';
    if(mysqli_num_rows($data)>0)
    {
     $row = mysqli_fetch_assoc($data);
        ?>
            <font color="white"><h1 align="center">WELCOME <?php echo $row['name']; ?></h1></font> 
        <tr><td>EMAIL :</td><td> <input type="text" value="<?php echo $row['emailid']; ?>"></td></tr><br>
        <tr><td>NAME :</td><td> <input type="text" value="<?php echo $row['name']; ?>"></td></tr><br>
        <tr><td>ADDRESS :</td><td> <input type="text" value="<?php echo $row['address']; ?>"></td></tr> <br>
        <tr><td>PHONE : </td><td><input type="text" value="<?php echo $row['phone']; ?>"></td></tr><br>
        <tr><td>BLOOD GROUP :</td><td> <input type="text" value="<?php echo $row['bloodgroup']; ?>"></td></tr> <br>
        <tr><td>JOIN DATE :</td><td> <input type='text' value="<?php echo $row['joindate']; ?>"></td></tr><br>
    </table>
            <BR><br><a href="teachprupdate.php">CLICK HERE TO UPDATE YOUR PROFILE</a>
        <?php
    
    echo "</form>";
    }
 mysqli_close($con);   
?>

<button><a href="logout.php">logout</a></button><br>

</body>       
    
</html>    