
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
session_start();

callme();


function callme()
	{
    
             $score = array();
		$Obj = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		if(! $Obj )
		{
			die('Could not connect '.mysql_error());
		}
                $str=$_POST['symptom1'];
                //echo $str;
                for($r = 0; $r < 1000; $r++)
                {
                $score[$r] = 0 ;
                
                }
                 echo '<html>', "\n"; // I'm sure there's a better way!
echo '<head>', "\n";
echo '<style>', "\n";
echo 'body{', "\n";

    echo 'font-size: 20px;', "\n";
    echo'background: #f8f8f8;',"\n";
     echo ' color: #7c8d87;', "\n";
   
 echo '}', "\n"; 
 echo '.body {', "\n";
 echo 'position: absolute;', "\n";
  echo '  left: 0;', "\n";
  echo '  top: 15%;', "\n";
  echo '  width: 100%;', "\n";
  echo '  text-align: center;', "\n";
 // echo '  font-size: 18px;', "\n";
 echo '}', "\n";
  echo ' .header {', "\n";
   echo '   position: absolute;', "\n";
   echo '   left: 0;', "\n";
    echo '  top:-10%;', "\n";
    echo '  width: 100%;', "\n";
    echo '  text-align: center;', "\n";
    echo '  font-size: 22px;', "\n";
 echo ' }', "\n";
 
 
 
 echo '  .login{', "\n";
 //echo ' 	position: absolute;', "\n";
 //echo ' 	top: calc(20% - 65px);', "\n";
// echo ' 	left: calc(50% - 50px);', "\n";
 echo ' 	height: 150px;', "\n";
 echo ' 	width: 350px;', "\n";
 echo ' 	padding: 10px;', "\n";
 echo ' 	z-index: 2;', "\n";
 
 echo ' }', "\n";

 echo '.login input[type=submit]{', "\n";
echo '	width: 260px;', "\n";
echo '	height: 35px;', "\n";
echo '	background: #fe6;', "\n";
echo '	border: 1px solid #fff;', "\n";
echo '	cursor: pointer;', "\n";
echo '	cursor: pointer;', "\n";
echo '	border-radius: 2px;', "\n";
echo '	color: #a18d6c;', "\n";
//echo '	font-family: 'Exo', sans-serif;', "\n";
echo '	font-size: 16px;', "\n";
echo '	font-weight: 400;', "\n";
echo '	padding: 6px;', "\n";
echo '	margin-top: 10px;', "\n";

echo '}', "\n";

 echo '.login input[type=submit]:hover{', "\n";
 echo '	opacity: 0.8;', "\n";
 echo '}', "\n";

 echo '.login input[type=submit]:active{', "\n";
 echo '	opacity: 0.6;', "\n";
 echo '}', "\n";
 
  echo '.login input[type=submit]:focus{', "\n";
 echo '	outline: none;', "\n";
 echo '}', "\n";



echo '</style>', "\n";
echo '</head>', "\n";
echo '<body>', "\n";
echo '<div class="body">', "\n";
echo '<div class="header">', "\n";
echo '			<div>Your <span>Report</span></div>', "\n";
echo '		</div>', "\n";


		  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
		while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                 echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str=$_POST['symptom2'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                 echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                 $str=$_POST['symptom3'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
		  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                 $str=$_POST['symptom4'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                 echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                 $str=$_POST['symptom5'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str=$_POST['symptom6'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                 echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str=$_POST['symptom7'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
               $str=$_POST['symptom8'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                 echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str=$_POST['symptom9'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                 echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str=$_POST['symptom10'];
                while( $row = $sql->fetch() )
		{
			       if (preg_match( "/$str/i", $row['majorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 2;
                                 echo "Your symptom has matched with major symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
                          if (preg_match( "/$str/i", $row['minorsymptomm'] )) {
                             
                               
                                $id=$row['idd'];
			        $score[$id] = $score[$id] + 1;
                                echo "Your symptom has matched with minor symptom of ".$row['diseasee']." so present increased score of disease is ".$score[$id]." <br> ";
                                  
                          
                         } 
		}
		
                
		
                
                
                
                 $past  = $_POST['pasthistory'];
                $heriditary  = $_POST['heriditary'];
                $pastarray = explode(",", $past);
                $heriditaryarray = explode(",", $heriditary);
                
               $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                 
                
                
                //past diseases
               
                while( $row = $sql->fetch() )
		{

                    for( $i = 0; $i< count($pastarray); $i++ ) {
			       if( strcmp($row['diseasee'], $pastarray[$i]) ==0)
                        {
                            $id=$row['idd'];
			  if($score[$id] > 0) $score[$id] = $score[$id]+1;
                            echo "Your symptoms has matched with symptoms of ".$row['diseasee']."and you also have this disease previously according to the data provdied by you .So present increased score of disease is".$score[$id]." <br> ";
                        }
                    }
                    
		
                }
                
                
                //heriditary
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                //heriditary diseases
                  while( $row = $sql->fetch() )
		{
                      
                    for( $i = 0; $i< count($heriditaryarray); $i++ ) {
			       if( strcmp($row['diseasee'], $heriditaryarray[$i]) ==0)
                        {
                            $id=$row['idd'];
			    if($score[$id] > 0) $score[$id] = $score[$id]+1;
                             echo "Your symptom has matched with the symptoms of ".$row['diseasee']." and your family also have this disease previously according to the data provided by you. So present increased score of disease is".$score[$id]." <br> ";
                        }
		}
                
		
                }
                
                
                //gender
                 $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str1=$_POST['gender'];
               
		while( $row = $sql->fetch() )
		{
                     $str2=$row['gender'];
			 if( strcmp($str1, $str2) ==0)
                        {
                            $id=$row['idd'];
			   if($score[$id] > 0){  $score[$id] = $score[$id]+1;
                            echo "Your symptom has matched with symptom of ".$row['diseasee']." this diseas is mostly seen in your gender ".$row['diseasee']."so present increased score of disease is".$score[$id]." <br> ";
                            
                           } }
		}
                
                
                
                 //country of occurance 
                    $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                $str1=$_POST['country'];
               
		while( $row = $sql->fetch() )
		{
                     $str2=$row['countryofoccurance'];
			 if( strcmp($str1, $str2) ==0)
                        {
                            $id=$row['idd'];
			   if($score[$id] > 0) { $score[$id] = $score[$id]+1;
                            echo "Your symptom has matched with symptom of ".$row['diseasee']." this diseas is mostly seen in your country  ".$row['diseasee']."so present increased score of disease is".$score[$id]." <br> ";
                            
                           }
                           }
		}
                
                
                //ageprediction
                  $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                 $str3=$_POST['age'];
                 
               while( $row = $sql->fetch() )
		{
                     $str4=$row['Ageofoccurance'];
			if (preg_match("/>/i", $row['mark'])) {
                             
                                if( $str3 > $str4 )
                                 {
                                $id=$row['idd'];
			        if($score[$id] > 0) 
                                {$score[$id] = $score[$id]+1;
                               echo "By considering the age at whicn this disease occurs and your age. You have more probabillty of occuring this disease".$row['diseasee']." so present score has increased to ".$score[$id]." <br> ";
                                
                              
                                }
                                
                                }
                          
                         } 
                     
                         if (preg_match("/</i", $row['mark'])) {
                             
                                if( $str3 < $str4 )
                                 {
                                $id=$row['idd'];
			       if($score[$id] > 0){ $score[$id] = $score[$id]+1;
                               echo "By considering the age at whicn this disease occurs and your age. You have more probabillty of occuring this disease".$row['diseasee']." so present score has increased to ".$score[$id]." <br> ";
 
                               }
                               
                               }
                          
                         } 
                         
                         /*
                   //      $mark1  = $row['mark'];
                    //   $markarray= preg_split("/[\s,]+/",  $mark1 );
                    //     echo"".$markarray[0]."".$markarray[1];
                         $mark1  = $row['mark'];
                         echo $mark1;
                           if (preg_match('/-/i',  $mark1 )) {
                              echo"i came here <br>";
                               $mark1  = $row['mark'];
                               $markarray = explode("-", $mark1);
                               echo"".$markarray[0]."".$markarray[1];
                                 if( $markarray[0]< $str3 && $markarray[1]> $str3 )
                                 {
                                $id=$row['idd'];
			        if($score[$id] > 0) {$score[$id] = $score[$id]+1;
                               echo "By considering the age at whicn this disease occurs and your age. You have more probabillty of occuring this disease".$row['diseasee']." so present score has increased to ".$score[$id]." <br> ";
 
                                }
                                
                                }
                         
                         
		}
                */
                
                //description
                   $stmt = "SELECT * FROM `diseases` ";
		$sql = $Obj->prepare("$stmt");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                   while( $row = $sql->fetch() )
		{
                     if($score[$row['idd']] > 0)
                         {
                         echo "Its suggested to follow this".$row['diseasee']." ".$row['description']." <br> ";
                     }
                }         
                 
                
                
                
	}
           echo " The disease whicn have more score is the disease you have more chance of occuring . <br> ";
           echo '<div class="login">', "\n";
           echo '<FORM ACTION="index.php" METHOD="POST">', "\n";
           echo '       <input type="submit" value="Logout">', "\n";
            echo '        </form>', "\n";
             echo '      </div>', "\n";
            echo '</div>', "\n";
           echo '</body>', "\n";
           echo '</html>', "\n";
                
           
        }
        
        
?>



