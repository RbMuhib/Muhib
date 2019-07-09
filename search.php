<?php
session_start();
require 'connection.php';
$conn    = Connect();
$id    = $conn->real_escape_string($_POST['Id']);

 $resultd=mysqli_query($conn,"SELECT* FROM student WHERE Id=$id ");
/*$row=mysqli_fetch_array($resultd);
echo $row['Id'];
echo $row['Name'];
echo $row['Sex'];
echo $row['Address'];
echo $row['Age'];
echo $row['Date'];


*/

?>




<html>
      
      <head>
          <title></title>
          <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Indie+Flower|Itim|Quicksand" rel="stylesheet">
          <link rel="stylesheet" href="css/ret.css">
          
          
          
      </head>
      
      <body>
             
             <h1>Information From Search </h1>
	<table width="1500" cellpadding=5 cellspacing=2 border=1 class="hello">
	<tr>
	<th>ID</th>
	
	
	<th>Name</th>
	<th>Sex</th>
	<th>Age</th>
	<th>Address</th>
	<th>Date of birth</th>
	
	
	</tr>
	<?php while($row=mysqli_fetch_array($resultd)):?>
	<tr>
	<td><?php echo $row['Id'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Sex'];?></td>
	<td><?php echo $row['Age'];?></td>
	<td><?php echo $row['Address'];?></td>
	<td><?php echo $row['Date'];?></td>
	
	


                        
	</tr>
	<?php endwhile;?> 
	</table>
           
           
           
        
            
                          
      </body>
      
  </html>
    
   
