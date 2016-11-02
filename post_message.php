<?php 
	$name = $_POST['name'];
	$email = $_POST['email']; 
	$message = $_POST['message'];

				  $con = mysqli_connect("localhost","root","","moosa");
	//			  mysql_select_db("moosa");
				  if ($con) {
				  
				  
				  $query = "INSERT INTO inbox (uName,uEmail,uMessage) Values ('".$name."','".$email."','".$message."')";
				  $result = mysqli_query($con,$query);
												
				   if(isset($result))									
					{
						echo"<script>alert('Your Message Has Been Sent');</script>";
						echo "<script>window.location.assign('index.php')</script>";
				}	
			}else{
				echo "Error Connection";
			}	  
		  
?>