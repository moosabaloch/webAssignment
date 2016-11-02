<!DOCTYPE html>
<html lang="en">
<head>
  <title>Moosa</title>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>See Your Messages</h2>
  <p>All Recived Message Shown In The Table</p>
  <form method="post">
  <table class="table table-striped">
    <thead>
	  <?php 
					$con = mysqli_connect("localhost","root","","moosa");
					$query = "SELECT * FROM `inbox` ORDER BY `inbox`.`msgid` DESC";
					$result = mysqli_query($con,$query);  ?>
         <tr>
         <th>ID</th>
         <th>User Name</th>
         <th>Email</th>
		 <th>Message</th>
		 <th>Seen</th>
		 <th>Delete</th>
         </tr>
    
	</thead>
    <tbody>
	<?php while($msg = mysqli_fetch_array($result)){ ?>	
      <tr>
        <td><?php echo $msg[0]; ?></td>
	   <td><?php echo $msg[1]; ?></td>
	    <td><?php echo $msg[2]; ?></td>
		<td>
		 <a href="read_msg.php?id=<?php echo $msg[0];?>">
		 <img src="images/msg.png" height="30"/>
		 </a>
		 </td>
		 <td><?php echo $msg[4]; ?></td>
	   <td><input type="image" height="30" src="images/delete.png" name="delete" value="<?php echo $msg[0]; ?>" alt="Submit"/></td>
	    
      </tr>
	  <?php } ?>
    </tbody>
  </table>
  	</form>
	
		<?php
					
					// delete code
					
					if(isset($_POST['delete']))
					{
						$id = $_POST['delete'];
						$con = mysqli_connect("localhost","root","","moosa");
						$query_delete = "DELETE FROM inbox WHERE msgid='$id'";
						$result_delete = mysqli_query($con,$query_delete);
						
						echo "<script>window.location.assign('message.php')</script>";
					}?>
					
					
	
</div>

</body>
</html>

