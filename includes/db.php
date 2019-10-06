<?php

// Connection
$dbc = mysqli_connect('localhost','root','','prsnlcnl')
    or die('error in connection');

// Forming an admin user
// $query="INSERT INTO `user` (`role`, `password`, `first_name`, `last_name`, `email`,
//      `contact_no`, `dob`, `profession`, `gender`, `city`, `state`, `profilepicpath`) VALUES 
//     ( '1', 'admin123', 'Rohin', 'Vaidya', 'admin@gmail.com', NULL, NULL, '', 'Male', 'Mumbai', 'MH', NULL)";

// Firing a query
// $result = mysqli_query($dbc,$query)
//     or die('sql error'.mysqli_error($dbc));

// close connection
// mysqli_close($dbc);
?>