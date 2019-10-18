<?php

include("../../includes/db.php");

if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $description = $_POST['description'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  $stream = $_POST['stream'];
  $post_image  =  $_FILES['post_image']['name'];
  $post_image_temp  =  $_FILES['post_image']['tmp_name'];
  $college_id=$_GET['college_id'];


  move_uploaded_file($post_image_temp,"../../storage/images/$post_image");
  $str = implode(", ",$stream);

  $query = " UPDATE colleges SET
    college_name='$name',stream='$str',city='$city',address='$address',description='$description',
    image='$post_image',contact_no='$contact',email='$email',website='$website' 
    where college_id='$college_id'";
  $result = mysqli_query($dbc,$query);
  if($result)
  {
     header('Location: manage-colleges.php');
  }
  else {
    die(" Did not upload".mysqli_error($dbc));
  }
}
?>