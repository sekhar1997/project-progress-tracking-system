
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
  $sql = "SELECT fname,fid FROM faculty where panel=2";
  $result=mysqli_query($conn,$sql);
if(! $result ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
  echo " <table border=1>
    <tr>
	
   <th>fname</th>
   <th>sname</th>
   <th>project name</th>";
  
 while($row = mysqli_fetch_assoc($result))
 echo "
		<tr>
		    
            <td>".$row['fid']."</td> 
            <td>". $row['fname']."</td> 
            
        </tr>";

?>
