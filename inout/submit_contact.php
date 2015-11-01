<html>
<title>
</title>

	<body>
		<?php
			$do_nothing = 0;	
			$not_found = 0;
			
			$name = $_POST["name"];
			$email = $_POST["email"];
			$contact_no = $_POST["contact_no"];
			$address = $_POST["address"];
			$state = $_POST["state"];

			
			
			require 'connect_to_db.php'; 
				
			//Check for existing username
			//$sql = "SELECT email FROM contact where email = '{$email}' ";
				
			//$result = mysqli_query($conn, $sql);
			

				
			$sql = "INSERT INTO contact (name, email,contact_no, address, state) VALUES ('{$name}','{$email}','{$contact_no}','{$address}','{$state}') ";
								
			if(mysqli_query($conn, $sql)){
				echo "<script>alert('Registration successful\nA confirmation mail will be sent to the given email.');</script>";
				$location = "index.php";
								
				
				
				
			}
			else{
				echo "Error:" . $sql . "<br>" . mysqli_error($conn); 
			}

			
			mysqli_close($conn);
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
			//header('Location:'{$location}'');
		?>
	</body>
</html>