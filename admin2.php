<html>
<body bgcolor="wheat">

</body>
</html>




<?php


 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname='projecttrack';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  $sql = "SELECT * FROM faculty where fid!=0";

  $retval= mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
 echo "<form method='GET' action='test.php'>";
   echo " <table border=1>
    <tr>
    <th> </th>
   <th>ID</th>
   <th>Name</th>
   <th>Designation</th>
<th>Panel</th>
   ";
   
   while($row = mysqli_fetch_assoc($retval)) {

  echo " <tr><td>   ";
if($row['panel']==0)
{
  $check = '';
}
else
{
  $check = 'disabled';
}

echo "<br><input type='checkbox' name=".$row['fname']." ".$check."/>";
echo " 
             <td name='fid[]' id='fid' value=''>". $row['fid']."</td>
            <td>". $row['fname']."</td> 
            <td>".  $row['experience']."</td> 
            <td>".  $row['panel']."</td>
        </tr>";
   }
	echo " </table>";

   echo"<input type=submit name ='submit'value='submit'/>";
 echo "</form>";


    
if(isset($_GET['submit'])){

$name = $_GET['color'];

if(isset($_GET['color'])) {

echo "You chose the following faculty: <br>";
echo "<ul>";

foreach ($name as $color){

echo "<li>" .$color."</li>";
$sql="UPDATE faculty SET pannel='{$color}' WHERE id='{$fid}'";
mysqli_query($conn,$sql);

}

echo "</ul>";

}
}

?>

	  

