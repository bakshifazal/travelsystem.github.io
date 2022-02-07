<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";

}else{
	echo "No connection";
}

mysqli_select_db($con, 'webuserdata');

$User = $_POST['User'];
$Email = $_POST['Email'];
$mobile = $_POST['mobile'];
$Comment = $_POST['Comment'];

$query = "insert into userinfodata (User, Email, mobile, Comment)
values('$User', '$Email', '$mobile', '$Comment')";
mysqli_query($con, $query);
	
header('location:index.php');

?>