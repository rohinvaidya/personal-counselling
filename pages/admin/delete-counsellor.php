<?php
include('../../includes/db.php');


$id = $_GET['user_id'];

$query = "DELETE FROM USER where id = $id";
$result = mysqli_query($dbc,$query)
    or die(mysqli_error($dbc));

header('Location:manage-counsellors.php');
?>