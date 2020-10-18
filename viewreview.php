<?php
session_start();
$em=$_SESSION['email'];
?><html>
    <head> 
    <style>
            table{
                background-color: white;
                border-collapse : collapse;
                width: 100%;
                color: #21cc21;
                font-size: 25px;
                text-align: left;
            }
            th{
                background-color: green;
                color: white;
            }
        </style>    
    </head>
<body>
<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query="select q1,q2,q3,q4,q5,comment from review where emailid='$em'";
    $data=mysqli_query($con,$query);    
    if(mysqli_num_rows($data)>0)
    {
    echo "<table border='1'>";
    echo "<tr><th>Question1</th><th>Question2</th><th>Question3</th><th>Question4</th><th>Question5</th></tr>";
    if(mysqli_num_rows($data)>0)
    {
    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$row['q1']."</td><td>".$row['q2']."</td><td>".$row['q3']."</td><td>".$row['q4']."</td><td>".$row['q5']."</td>";  
    }
    echo "</table>";
         }
  
    }
 mysqli_close($con);   
?>
</body>
</html>