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
  background: #fff9f9;
  text-align: center;
}
.box h1{
  color: black;
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
  width: 350px;
  outline: none;
  color: black;
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
  color: BLACK;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{  
  background: #2ecc71;
}
.box input[type = "reset"]{
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
.box input[type = "reset"]:hover{  
  background: #2ecc71;
}
.box select{
  width : 500px;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: BLACK;
  border-radius: 15px;
  transition: 0.25s;
  cursor: pointer;
}

</style>
    </head>
    
    <body>
        <form class="box" method="post" action="makereview2.php">
       <h1> PERFORMANCE EVALUATION </h1><br><br>
       <font size="5">Teacher :</font>  
       <select name="email" id="teacher">
       <option selected>-select a name-</option>
       <?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query='select * from teacher';
    $data=mysqli_query($con,$query);    
    if(mysqli_num_rows($data)>0)
    {
       while($row = mysqli_fetch_assoc($data))
         {
          ?> <option value="<?php echo $row['emailid']; ?>"> <?php echo $row['name']; ?> </option>
          <?php
         }
  
    }
 mysqli_close($con);   
?>
           
       </select>      <br><br>

        Question 1:<br>
        <table cellspacing="10">
        <tr>
            <td>1<input type="radio" name="q1" value="1"required></td>
            <td>2<input type="radio" name="q1" value="2"required></td>
            <td>3<input type="radio" name="q1" value="3"required></td>
            <td>4<input type="radio" name="q1" value="4"required></td>
            <td>5<input type="radio" name="q1" value="5"required></td>
            <td>6<input type="radio" name="q1" value="6"required></td>
            <td>7<input type="radio" name="q1" value="7"required></td>
            <td>8<input type="radio" name="q1" value="8"required></td>
            <td>9<input type="radio" name="q1" value="9"required></td>
            <td>10<input type="radio" name="q1" value="10"required></td>
        </tr>
                
</table><br><br>
        
            Question 2:<br>
            <table cellspacing="10">
            <tr><td>1<input type="radio" name="q2" value="1"required></td>
            <td>2<input type="radio" name="q2" value="2"required></td>
            <td>3<input type="radio" name="q2" value="3"required></td>
            <td>4<input type="radio" name="q2" value="4"required></td>
            <td>5<input type="radio" name="q2" value="5"required></td>
            <td>6<input type="radio" name="q2" value="6"required></td>
            <td>7<input type="radio" name="q2" value="7"required></td>
            <td>8<input type="radio" name="q2" value="8"required></td>
            <td>9<input type="radio" name="q2" value="9"required></td>
            <td>10<input type="radio" name="q2" value="10"required></td></tr>
</table>   <br><br>
        
            Question 3:<br>
            <table cellspacing="10">
            <tr><td>1<input type="radio" name="q3" value="1"required></td>
            <td>2<input type="radio" name="q3" value="2"required></td>
            <td>3<input type="radio" name="q3" value="3"required></td>
            <td>4<input type="radio" name="q3" value="4"required></td>
            <td>5<input type="radio" name="q3" value="5"required></td>
            <td>6<input type="radio" name="q3" value="6"required></td>
            <td>7<input type="radio" name="q3" value="7"required></td>
            <td>8<input type="radio" name="q3" value="8"required></td>
            <td>9<input type="radio" name="q3" value="9"required></td>
            <td>10<input type="radio" name="q3" value="10"required></td></tr>
</table>           <br><br> 
            
            Question 4:<br>
            <table cellspacing="10">
            <tr><td>1<input type="radio" name="q4" value="1"required></td>
            <td>2<input type="radio" name="q4" value="2"required></td>
            <td>3<input type="radio" name="q4" value="3"required></td>
            <td>4<input type="radio" name="q4" value="4"required></td>
            <td>5<input type="radio" name="q4" value="5"required></td>
            <td>6<input type="radio" name="q4" value="6"required></td>
            <td>7<input type="radio" name="q4" value="7"required></td>
            <td>8<input type="radio" name="q4" value="8"required></td>
            <td>9<input type="radio" name="q4" value="9"required></td>
            <td>10<input type="radio" name="q4" value="10"required></td></tr>
</table>            <br><br>
            
            Question 5:<br>
            <table cellspacing="10">
            <tr><td>1<input type="radio" name="q5" value="1"required></td>
            <td>2<input type="radio" name="q5" value="2"required></td>
            <td>3<input type="radio" name="q5" value="3"required></td>
            <td>4<input type="radio" name="q5" value="4"required></td>
            <td>5<input type="radio" name="q5" value="5"required></td>
            <td>6<input type="radio" name="q5" value="6"required></td>
            <td>7<input type="radio" name="q5" value="7"required></td>
            <td>8<input type="radio" name="q5" value="8"required></td>
            <td>9<input type="radio" name="q5" value="9" required></td>
            <td>10<input type="radio" name="q5" value="10" required></td></tr>
</table><br><br>
<table>
  <tr> <td> COMMENT : </td> <td> <input type="text" name="comment"></td></tr>

</table>
<table>
<tr><td><input type="reset" name="reset" value="Clear"></td>
<td><input type="submit" name="submit" value="Submit"></td></tr>

</table>
        </form>
    </body>
</html>