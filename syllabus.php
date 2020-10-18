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
  width: 200px;
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
}.box input[type = "file"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "file"]:hover{
  background: #2ecc71;
}
.box button{
  border:0;
  background: none;
  display: block;
  margin: 10px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: #0b0b0b;
  border-radius: 24px;
  transition: 0.25s;
}
.box button:hover{
  background: #2ecc71;
}
a{
    text-decoration : none;
}

</style>
 
    </head>
<form class="box" method="post" enctype="multipart/form-data" action="syllabus2.php">
    <input type="file" name="file" required>
    <input type="submit" name="submit" value="upload">
    <button><a href="syllabus3.php">VIEW SYLLABUS</a></button>
</form>
</html>

