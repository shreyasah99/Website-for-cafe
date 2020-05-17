
<?php
if (isset($_POST['submit']))
 {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $pno=$_POST['pno'];
   $feedback=$_POST['feedback'];
   $conn=mysqli_connect('localhost','root','','hii');
   if(!$conn)
	{
		die('could not connect my sqli:'.mysql_error());
	}
   $sql="INSERT INTO hey( `name`, `email`, `pno`,`feedback`) VALUES ('$name','$email','$pno','$feedback')";
   if(!($conn->query($sql))){
   die ("ERROR ;".$sql." ".mysqli_error($conn));
 }
 
}
header('location:contact.html');
?>
