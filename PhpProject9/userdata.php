<?php

session_start();
        
	
authenticate();
	

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
                $Obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(! $Obj )
		{
			die('Could not connect '.mysql_error());
		}
                $userid=$_POST['userid'];
                $name=$_POST['name'];
                $pwd=$_POST['pwd'];
                $age=$_POST['age'];
                $email=$_POST['email'];
		$sql = "INSERT INTO users1 ( userid, name, pwd,age , email ) VALUES ( :userid, :name, :pwd ,:age,:email )";
		$query = $Obj->prepare( $sql );
               
                try{
               $query->execute( array( ':userid'=>$userid,':name'=>$name ,  ':pwd'=>$pwd,':age'=>$age, ':email'=>$email ) ); 
		
                 $msg="sucessfully updated go to login page and login" ; 
                                
echo '<script type="text/javascript">alert("' . $msg . '")</script>';

               
                } catch(PDOException $e) {
  echo 'go back and try another Username since username is already taken <br>';
  echo 'Error: ' . $e->getMessage();
}
                
                
               
               
                
                
		
	}
?> 