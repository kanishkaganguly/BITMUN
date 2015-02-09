<?php
$server="localhost";
$user="bitotjqk_bitmun";
$pass="tanishqua";
$database="bitotjqk_bitmun";

$con=mysqli_connect($server, $user, $pass, $database);

if(!$con)
echo '<h1>Database Error</h1>';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$college=$_POST['college'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$condel=$_POST['condel'];
$conex=$_POST['conex'];
$committee=$_POST['committee'];
$country1=$_POST['country1'];
$country2=$_POST['country2'];
$country3=$_POST['country3'];
$country4=$_POST['country4'];

$query='INSERT INTO `bitotjqk_bitmun`.`registration` (fname, lname, college, email, contact, dob, delegate, exec, committee, country1, country2, country3, country4 ) VALUES ("'.$fname.'","'.$lname.'","'.$college.'","'.$email.'",'.$contact.',"'.$dob.'",'.$condel.','.$conex.',"'.$committee.'","'.$country1.'","'.$country2.'","'.$country3.'","'.$country4.'")';
echo $query;
$result=mysqli_query($con,$query);
if($result)
    echo 'Registration Successful. May The Forces be with You!!';
else
    echo 'Database Error. Please Try Again';        
?>