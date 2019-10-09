<?php
include('../../includes/db.php');
$college_id=$_GET['college_id'];
$query="DELETE FROM colleges where college_id=$college_id";
$result=mysqli_query($dbc,$query);
header('Location:manage_colleges.php');

?>