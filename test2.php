<?php


  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname='projecttrack';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  $sql = "SELECT * FROM student where sid=0";
  $retval= mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($retval)) {

$status = $row['team'];
$help = $status+1;
echo $help;
 
}



$val = $_GET['arun'];
$vals = $_GET['surya'];
$valse = $_GET['mahesh'];
$valses = $_GET['mithin'];

echo $val,$vals,$valse,$valses;

if($val == 'on')
{
	
	  $sql = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE  `student`.`sid` =  '1' ";
	  $sqls = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE  `student`.`sid`=  '0' ";
	    $retval= mysqli_query($conn,$sqls);
	    $retval= mysqli_query($conn,$sql);

}

if($vals == 'on')
{
	
	  $sql = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE `student`.`sid` =  '2' ";
	    $retval= mysqli_query($conn,$sql);
	    $sqls = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE  `student`.`sid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);

}
if($valse == 'on')
{

	  $sql = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE `student`.`sid` =  '3' ";
	    $retval= mysqli_query($conn,$sql);
	    $sqls = "UPDATE  `projecttrack`.`student`SET  `team` =  ' ".$help." ' WHERE  `student`.`sid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);

}
if($valses == 'on')
{
	
	  $sql = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE  `student`.`sid` =  '4' ";
	    $retval= mysqli_query($conn,$sql);
	    $sqls = "UPDATE  `projecttrack`.`student` SET  `team` =  ' ".$help." ' WHERE  `student`.`sid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);

}
echo $status;
echo "<br>";
header("Location: admin3.php");	
?>
