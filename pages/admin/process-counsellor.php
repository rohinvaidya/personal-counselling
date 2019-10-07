<?php
include('../../includes/db.php');

if (isset($_POST['submit'])){

    $query = "INSERT INTO USER(EMAIL,PASSWORD,ROLE)
        VALUES('".$_POST['email']."','".$_POST['password']."','counsellor')";
    
    // Firing a query
    $result = mysqli_query($dbc,$query)
        or die('sql error'.mysqli_error($dbc));
}
else{
    echo "Error in recieving data!";
}
?>