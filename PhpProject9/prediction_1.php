
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

$con = mysqli_connect("localhost","root","","test");
echo "data base connected";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
   $symptom1local = mysqli_real_escape_string($con,$_POST['symptom1']);
  // $sel_user = “select * from users where user_email=’$email’ AND user_pass=’$pass'”;
  $stmt = "SELECT * FROM `users1`" ;
  $run = mysqli_query($con, $stmt );
  if (!$run) {
   echo "Error in query ";
    exit();
}
for($r = 0; $r < 1000; $r++)
                {
                $score[$r] = 0 ;
                }
//$check = mysqli_num_rows($run);
  if($row = mysqli_fetch_array($run))
{
      echo "1";
     echo $row['userid'] . " " . $row['name'] . " " . $row['pwd'] . " "  . $row['age'] . "<br/>";
}
  

?>