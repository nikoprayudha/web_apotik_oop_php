<?php

$error=''; 

include "connection.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$profesi    = $_POST['profesi'];
					
	$query = mysqli_query($connection, "SELECT * FROM karyawan WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "Username or Password tidak Di temukan";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['profesi'] = $row['profesi'];
		
		if($row['profesi'] == "Administrator" && $profesi=="1")
		{
			
			header("Location: home_admin.php");
		}
		else if($row['profesi'] =="Kasir" && $profesi=="2")
		{
			header("Location: home_kasir.php");
		}
		
		else
		{
			$error = "Failed Login";
			
		}
	}
}

			
?>