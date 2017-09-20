  <html>
   <body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$Obj = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		if(! $Obj )
		{
			die('Could not connect '.mysql_error());
		}
		//$stmt = "SELECT * FROM `diseases` where majorsymptom= %?% ";
                
                
               
		
                
                
		//$sql = $Obj->prepare("$stmt");
		//$sql->execute();
		//$sql->setFetchMode(PDO::FETCH_ASSOC);
                $score = array();
               $val = 0;
               $r = 0;  
               $c = 0;  $c++;
                for($r = 0; $r < 1000; $r++)
                {
                $score[$r] = 0 ;
                }
                
               
                
                
                //assiging score based on major symptom
                
                
		$stmt = "SELECT * FROM `diseases` where majorsymptomm LIKE '%?%' ";
                  $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom1']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                
                     while( $row = $sql->fetch() )
		{
                     $row = $sql->fetch();
                    $symptom1  = $row['majorsymptom'] ;
               
                     $symptomarray1 = explode(",", $symptom1 );
                     
                     $text= "Hello-How are you?";
$strings = str_replace('–', '-', $text);
$strings = explode('-',$text);
echo $strings[0]; // Hello
echo $strings[1];
                     
                      for( $i = 0; $i< count($symptomarray1); $i++ )
                     {
                        
                         echo '1';
                         echo $symptomarray1[$i];
                     } 
                     
                 
                     
                     for( $i = 0; $i< count($symptomarray1); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom1'], $symptomarray1[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }          
                
                
                
                   $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom2']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom2  = $row['majorsymptom'];
                     $symptomarray2 = explode(",", $symptom2 );
                     for( $i = 0; $i< count($symptomarray2); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom2'], $symptomarray2[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                
                
                
                          $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom3']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom3  = $row['majorsymptom'];
                     $symptomarray3 = explode(",", $symptom3 );
                     for( $i = 0; $i< count($symptomarray3); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom3'], $symptomarray3[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                
                
                           $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom4']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom4  = $row['majorsymptom'];
                     $symptomarray4 = explode(",", $symptom4 );
                     for( $i = 0; $i< count($symptomarray4); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom4'], $symptomarray4[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }       
                
                
                          $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom5']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom5  = $row['majorsymptom'];
                     $symptomarray5 = explode(",", $symptom5 );
                     for( $i = 0; $i< count($symptomarray5); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom5'], $symptomarray5[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }       
                
                
                $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom6']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom6  = $row['majorsymptom'];
                     $symptomarray6 = explode(",", $symptom6 );
                     for( $i = 0; $i< count($symptomarray8); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom6'], $symptomarray6[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }       
                
                
                        $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom7']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom7  = $row['majorsymptom'];
                     $symptomarray7 = explode(",", $symptom7 );
                     for( $i = 0; $i< count($symptomarray7); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom7'], $symptomarray7[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                         
                
                  $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom8']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom8  = $row['majorsymptom'];
                     $symptomarray8 = explode(",", $symptom8 );
                     for( $i = 0; $i< count($symptomarray8); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom8'], $symptomarray8[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                
                
                
                 $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom9']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom9  = $row['majorsymptom'];
                     $symptomarray9 = explode(",", $symptom9 );
                     for( $i = 0; $i< count($symptomarray9); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom9'], $symptomarray9[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }   
                
                
                
                          $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom10']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom10  = $row['majorsymptom'];
                     $symptomarray10 = explode(",", $symptom10 );
                     for( $i = 0; $i< count($symptomarray10); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom10'], $symptomarray10[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }   
                
               
                
                
                
                
                
                
                
                
                
                //checking for minor symptoms
       
                
                $stmt = "SELECT * FROM `diseases` where minorsymptom LIKE %?% ";
		 
                $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom1']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                     $symptom1  = $row['minorsymptom'];
                     $symptomarray1 = explode(",", $symptom1 );
                     
                       
                     
                     for( $i = 0; $i< count($symptomarray1); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom1'], $symptomarray1[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }          
                
                
                
                   $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom2']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom2  = $row['minorsymptom'];
                     $symptomarray2 = explode(",", $symptom2 );
                     for( $i = 0; $i< count($symptomarray2); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom2'], $symptomarray2[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                
                
                
                          $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom3']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom3  = $row['minorsymptom'];
                     $symptomarray3 = explode(",", $symptom3 );
                     for( $i = 0; $i< count($symptomarray3); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom3'], $symptomarray3[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                
                
                           $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom4']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom4  = $row['minorsymptom'];
                     $symptomarray4 = explode(",", $symptom4 );
                     for( $i = 0; $i< count($symptomarray4); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom4'], $symptomarray4[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }       
                
                
                          $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom5']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom5  = $row['minorsymptom'];
                     $symptomarray5 = explode(",", $symptom5 );
                     for( $i = 0; $i< count($symptomarray5); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom5'], $symptomarray5[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }       
                
                
                $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom6']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom6  = $row['minorsymptom'];
                     $symptomarray6 = explode(",", $symptom6 );
                     for( $i = 0; $i< count($symptomarray8); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom6'], $symptomarray6[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }       
                
                
                        $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom7']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom7  = $row['minorsymptom'];
                     $symptomarray7 = explode(",", $symptom7 );
                     for( $i = 0; $i< count($symptomarray7); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom7'], $symptomarray7[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                         
                
                  $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom8']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom8  = $row['minorsymptom'];
                     $symptomarray8 = explode(",", $symptom8 );
                     for( $i = 0; $i< count($symptomarray8); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom8'], $symptomarray8[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }     
                
                
                
                 $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom9']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom9  = $row['minorsymptom'];
                     $symptomarray9 = explode(",", $symptom9 );
                     for( $i = 0; $i< count($symptomarray9); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom9'], $symptomarray9[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }   
                
                
                
                          $sql = $Obj->prepare("$stmt");
		$sql->execute(array($_POST['symptom10']));
		$sql->setFetchMode(PDO::FETCH_ASSOC);
                
                while( $row = $sql->fetch() )
		{
                    $symptom10  = $row['minorsymptom'];
                     $symptomarray10 = explode(",", $symptom10 );
                     for( $i = 0; $i< count($symptomarray10); $i++ )
                     {
                        
                         
                          if( strcmp($_POST['symptom10'], $symptomarray10[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                        
                     }    
                        
                }   
                
               
                
                
                
                $past  = $_POST['pasthistory'];
                $heriditary  = $_POST['heriditary'];
                $pastarray = explode(",", $past);
                $heriditaryarray = explode(",", $heriditary);
                
               $stmt = "SELECT * FROM diseases WHERE id=?  ; ";
                
		$sql = $Obj->prepare("$stmt");
                
                
                 
                  

                //past diseases
                for( $i = 0; $i< count($pastarray); $i++ ) {
                for($r = 0; $r < 1000; $r++)
                {
                if($score[$r] > 0) 
                {
                         $sql->execute(array($r));
		         $sql->setFetchMode(PDO::FETCH_ASSOC);
                         $row = $sql->fetch(); 
                         
                     if( strcmp($row['diseasee'], $pastarray[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                    
                }
                }
                }
                
                
                
                
                          
                
                
                 //heriditary
                for( $i = 0; $i< count($heriditaryarray); $i++ ) {
                for($r = 0; $r < 1000; $r++)
                {
                if($score[$r] > 0) 
                {
                         $sql->execute(array($r));
		         $sql->setFetchMode(PDO::FETCH_ASSOC);
                         $row = $sql->fetch(); 
                         
                     if( strcmp($row['diseasee'], $heriditaryarray[$i]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                    
                }
                }
                }
                
                
                //country of occurance 
                 $stmt = "SELECT * FROM diseases WHERE idd=?  ; ";
                
		$sql = $Obj->prepare("$stmt");
                
                 for($r = 0; $r < 1000; $r++)
                {
                if($score[$r] > 0) 
                {
                         $sql->execute(array($r));
		         $sql->setFetchMode(PDO::FETCH_ASSOC);
                         $row = $sql->fetch(); 
                         
                     if( strcmp($row['countryofoccurance'], $_POST[$country]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                    
                }
                }
                
                
                //gender
                $stmt = "SELECT * FROM diseases WHERE idd=?  ; ";
                
		$sql = $Obj->prepare("$stmt");
                
                 for($r = 0; $r < 1000; $r++)
                {
                if($score[$r] > 0) 
                {
                         $sql->execute(array($r));
		         $sql->setFetchMode(PDO::FETCH_ASSOC);
                         $row = $sql->fetch(); 
                         
                     if( strcmp($row['gender'], $_POST[$gender]) ==0)
                        {
                            $id=$row['idd'];
			    $score[$id] = $score[$id]+1;
                            
                        }
                    
                }
                }
                
                
                   
                     
                //age prediction
                $stmt = "SELECT * FROM diseases WHERE idd=?  ";
                
		$sql = $Obj->prepare("$stmt");
                
                 for($r = 0; $r < 1000; $r++)
                {
                  
                if($score[$r] > 0) 
                {
                         $sql->execute(array($r));
		         $sql->setFetchMode(PDO::FETCH_ASSOC);
                         $row = $sql->fetch(); 
                         
                         if (preg_match("/>/i", $row['mark'])) {
                             $age=$row['ageofoccurance'];
                                if( $row['age']> $_POST[$age] )
                                 {
                                $id=$row['idd'];
			        $score[$id] = $score[$id]+1;
                            
                                   }
                          
                         } 
                         
                           if (preg_match("/</i", $row['mark'])) {
                             $age=$row['ageofoccurance'];
                                if( $row['age']< $_POST[$age] )
                                 {
                                $id=$row['idd'];
			        $score[$id] = $score[$id]+1;
                            
                                   }
                          
                         } 
                         
                          if (preg_match("/-/i", $row['mark'])) {
                              
                              $mark1  = $_POST['mark'];
                               $markarray = explode(",", $mark1);
                              
                               
                             $age=$row['ageofoccurance'];
                                if( $markarray[0]< $_POST[$age] && $markarray[1]> $_POST[$age] )
                                 {
                                $id=$row['idd'];
			        $score[$id] = $score[$id]+1;
                            
                                   }
                          
                         }
                          for($r = 0; $r < 1000; $r++)
                { 
                echo $score[$r] ;
              
                }      
                     
                         
                         
                         
                     
                     
                    
                }
                }
                
                 
              /*  
               for($r = 0; $r < 1000; $r++)
                { 
                echo $score[$r];
                }      
                 */      
		
        
               
                
               
             
           ?>
       

              
              
           
            </body>
            </html>
		

 