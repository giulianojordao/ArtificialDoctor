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
                $idd=$_POST['idd'];
                $disease=$_POST['disease'];
                $majorsymptoms=$_POST['majorsymptoms'];
                $minorsymptom=$_POST['minorsymptom'];
                $mark=$_POST['mark'];
                $age=$_POST['age'];
                $gender=$_POST['gender'];
                $country=$_POST['country'];
                $yes='yes';
                $description=$_POST['description'];
		$sql = "INSERT INTO diseases ( idd,diseasee,majorsymptomm,minorsymptomm,Ageofoccurance,mark,countryofoccurance,heriditarychances,gender,pasthistory,description ) VALUES ( :idd, :disease, :majorsymptoms ,:minorsymptom, :age,:mark  ,:country , :yes,:gender ,:yes ,:description )";
		$query = $Obj->prepare( $sql );
                    //  INSERT INTO diseases ( idd,diseasee,majorsymptomm,minorsymptomm,Ageofoccurance,mark,countryofoccurance,heriditarychances,gender,pasthistory,description ) VALUES ( '4', 'abc', 'dv' , 'cvc', '45', '> ', 'africa' ,'yes' ,'female' , 'yes','very very mild fever' )

                try{
               $query->execute( array( ':idd'=>$idd,':disease'=>$disease,  ':majorsymptoms'=>$majorsymptoms,':minorsymptom'=>$minorsymptom, ':mark'=>$mark ,':age'=>$age, ':gender'=>$gender, ':country'=>$country ,':description'=>$description,':yes'=>$yes ) ); 
		
                 $msg="sucessfully updated go to login page and login" ; 
                                
echo '<script type="text/javascript">alert("' . $msg . '")</script>';

               
                } catch(PDOException $e) {
  echo 'go back and try another Username since username is already taken <br>';
  echo 'Error: ' . $e->getMessage();
}
                
                
               
               
                
                
		
	}
?> 