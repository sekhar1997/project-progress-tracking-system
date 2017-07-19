<?php


  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname='projecttrack';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  $sql = "SELECT * FROM faculty where fid=0";
  $retval= mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($retval)) {

$status = $row['panel'];
$help = $status+1;
echo $help;
 
}



$val = $_GET['parmila'];
$vals = $_GET['virabadhra'];
$valse = $_GET['aruna'];
$valses = $_GET['ramu'];

echo $val,$vals,$valse,$valses;

if($val == 'on')
{
	
	  $sql = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE  `faculty`.`fid` =  '1' ";
	  $sqls = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE  `faculty`.`fid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);
	    $retval= mysqli_query($conn,$sql);

}

if($vals == 'on')
{
	
	  $sql = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE `faculty`.`fid` =  '2' ";
	    $retval= mysqli_query($conn,$sql);
	    $sqls = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE  `faculty`.`fid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);

}
if($valse == 'on')
{

	  $sql = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE `faculty`.`fid` =  '3' ";
	    $retval= mysqli_query($conn,$sql);
	    $sqls = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE  `faculty`.`fid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);

}
if($valses == 'on')
{
	
	  $sql = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE  `faculty`.`fid` =  '4' ";
	    $retval= mysqli_query($conn,$sql);
	    $sqls = "UPDATE  `projecttrack`.`faculty` SET  `panel` =  ' ".$help." ' WHERE  `faculty`.`fid` =  '0' ";
	    $retval= mysqli_query($conn,$sqls);

}
echo $status;
echo "<br>";
header("Location: admin2.php");	
?>