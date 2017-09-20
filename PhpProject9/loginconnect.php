<?php

session_start();
        
	if( isset($_POST['user']) )
	{
		authenticate();
	}

/*
$Obj1 = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		if(! $Obj1 )
		{
			die('Could not connect '.mysql_error());
		}
		else
           {
			//echo "successfully connected";
           }		
*/
function authenticate()
	{
		$Obj = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		if(! $Obj )
		{
			die('Could not connect '.mysql_error());
		}
		$stmt = "SELECT * FROM `users1` WHERE EMAIL=?";
		$sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['user']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                if($_POST['user']=="admin"&& $_POST['password']=="admin"){header('Location: http://localhost/PhpProject9/doctorlogin.php');}
		if( $row = $sql->fetch() )
		{
			if( strcmp($_POST['password'], $row['pwd']) ==0)
			{
				$_SESSION['user'] = array(
					'email' => $row['email'],
					'name' => $row['username'],
					'userid' => $row['useridid']
				);
				header('Location: http://localhost/PhpProject9/afterlogin.php');
			}
                        else
                            echo "Wrong Password";
		}
		else
			echo "User not found";
	}
?> 