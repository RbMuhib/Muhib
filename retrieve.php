<?php
session_start();
require 'connection.php';
$conn    = Connect();
$resultd=mysqli_query($conn,"SELECT student.Id ,  student.Name , student.Sex , student.Age , student.Address , student.Date FROM student ");


?>
     
   
  <html>
      
      <head>
          <title></title>
          <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Indie+Flower|Itim|Quicksand" rel="stylesheet">
          <link rel="stylesheet" href="css/ret.css">
          
      </head>
      
      <body>
             
             <h1>Information About Students </h1>
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
	
	
	
	 <td>
                     
          
                      <form action="edit.php?id=<?php echo $row['Id'];?>"  method="post" >
           
                     <input type="submit"   value="EDIT" class="boxes"   />
                                          
                        
         </form>
         
          

        </td>

                        
	</tr>
	<?php endwhile;?> 
	</table>
           
           
           
        
            
                          
      </body>
      
  </html>
    
   