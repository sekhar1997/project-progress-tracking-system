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
  $sql = "SELECT * FROM student where sid!=0";

  $retval= mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
 echo "<form action='test2.php'method='GET'>";
   echo " <table border=1>
    <tr>
    <th> </th>
   <th>ID</th>
   <th>Name</th>
   <th>percentage</th>
    <th>team</th>";
   
   while($row = mysqli_fetch_assoc($retval)) {

  
  echo " <tr><td>   ";
if($row['team']==0)
{
  $check = '';
}
else
{
  $check = 'disabled';
}

echo "<br><input type='checkbox' name=".$row['sname']." ".$check."/>";
echo " 
             <td name='fid[]' id='fid' value=''>". $row['sid']."</td>
            <td>". $row['sname']."</td> 
            <td>".  $row['percentage']."</td> 
            <td>".  $row['team']."</td>
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
$sql="UPDATE faculty SET team='{$color}' WHERE id='{$sid}'";
mysqli_query($conn,$sql);

}

echo "</ul>";

}
}
