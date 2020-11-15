<?php

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$ma=$_POST['mail'];
$sm=$_POST['sms'];
?>
<table align="center" width="60%" border="1">
<tr>
	<td><b>Name</b></td>
<td>
<?php echo $fn;
echo $ln; 
?>
</td>
</tr>
<br>
<tr>
<td><b>Email</b></td>
<td>
<?php echo $ma;  ?>
</td>
</tr>
<br>
<tr>
<td><b>Message</b></td>
<td>
<?php echo $sm;  ?>
</td>
</tr>
</table>
<?php   


echo "<br>";    

$dbname= "dreamit";
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "INSERT INTO contact (firstname, lastname,email,message)
VALUES ('Nazmul' , 'Hasan' , 'nazmulhasan.cse.seu@gmail.com' , 'hI!')";

if(mysqli_)
echo "Connected successfully";

$conn->close();

?>