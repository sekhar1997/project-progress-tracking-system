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
  $sql = "SELECT * FROM project";

  $retval= mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
 echo "<form action='#'method='GET'>";
   echo " <table border=1>
    <tr>
    <th> </th>
   <th>ID</th>
   <th>Name</th>";
   
   while($row = mysqli_fetch_assoc($retval)) {

  echo " <tr><td>
	    <input type='checkbox' name='color[]' id='color' value=". $row['p_name']."/></td>
             <td name='sid[]' id='sid' value=''>". $row['pid']."</td>
            <td>". $row['p_name']."</td>
           
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

}

echo "</ul>";

}
}
