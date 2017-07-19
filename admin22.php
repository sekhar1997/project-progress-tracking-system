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
  $sql = "SELECT * FROM faculty";

  $retval= mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
 echo "<form action='#'method='GET'>";
   echo " <table border=1>
    <tr>
    <th> </th>
   <th>ID</th>
   <th>Name</th>
   <th>Designation</th>";
   
   while($row = mysqli_fetch_assoc($retval)) {

  echo " <tr><td>
	  <input type='checkbox' name='color[]' id='color' value=". $row['fname']."/></td>
             
             <td name='fid[]' id='fid' value=''>". $row['fid']."</td>
            <td>". $row['fname']."</td> 
            <td>".  $row['experience']."</td> 
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

	  

