<html>
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
    <body bgcolor="#34495e"> 
        
    <font color="white"><h1 align="center">REVIEW</h1></font>
    <?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query="select review.q1,review.q2,review.q3,review.q4,review.q5,review.comment,teacher.name from review inner join teacher on review.emailid=teacher.emailid";
    $data=mysqli_query($con,$query);
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Question1</th><th>Question2</th><th>Question3</th><th>Question4</th><th>Question5</th><th>Comment</th></tr>";
    if(mysqli_num_rows($data)>0)
    {
    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$row['name']."</td><td>".$row['q1']."</td><td>".$row['q2']."</td><td>".$row['q3']."</td><td>".$row['q4']."</td><td>".$row['q5']."</td><td>".$row['comment']."</td>";
    }
    echo "</table>";
    }
 mysqli_close($con);   
?>



        
</body>   
</html>    