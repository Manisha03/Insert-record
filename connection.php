<!--
<?php

$server = "localhost";
$user = "username";
$pass = "";
$dbname = "training";
// Create connection
$conn = new mysqli($server, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

		$catname=$_POST['catname'];

$sql= "INSERT INTO category (catname)
VALUES ('$catname')";


if ($sql) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" ;
}

mysqli_close($conn);

?> -->


<?php

$server="localhost";
$user="root";
$pass="";
$dbname="training";

$conn=new mysqli($server,$user,$pass,$dbname);

if($conn->connect_error)
{
	die("connection failed:" . $conn->connect_error);
}
$catname=mysqli_real_escape_string($conn ,$_POST['catname']);

$sql = "insert into category(catname) values('$catname')";

if($conn->query($sql)===TRUE)
{
	echo "Record inserted sucessfully";
}
else
{
	echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?> 









<?php
$link=mysqli_connect("localhost","root","");

if(!$link)
{
 die("Database Connection Failed" . mysqli_error($link));
}


$database=mysqli_select_db($link,'training');

if(!$database)
{
  echo 'database not selected';
}

?>

