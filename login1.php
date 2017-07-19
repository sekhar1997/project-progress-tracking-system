<?php
$ut=$_POST['se'];
$unm=$_POST['name'];
$pass=$_POST['password'];
$conn=mysqli_connect("localhost","root","","projecttrack");
$sql="select * from login where  username='$unm'and  usertype='$ut'and password='$pass' ";
 $res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

if( $row['usertype']==1 && $row['username']==$unm && $row['password']==$pass)
 {
	 header("Location: adminpannel.php");
	
           
 }
elseif($row['usertype']==2 && $row['username']==$unm && $row['password']==$pass){
	 
	 header("Location: facultypannel.php");
	} 
elseif($row['usertype']==3 && $row['username']==$unm && $row['password']==$pass){
	 
	 header("Location: login.php");
	} 
 else{ echo "login fail";}

?>
