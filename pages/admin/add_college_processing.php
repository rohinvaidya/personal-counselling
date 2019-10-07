<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['address'];
$description=$_POST['description'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$website=$_POST['website'];
$stream=$_POST['stream'];
$post_image = $_FILES['post_image']['name'];
$post_image_temp = $_FILES['post_image']['tmp_name'];
move_uploaded_file($post_image_temp,"../images/$post_image");
$str=implode(", ",$stream);
$connection=mysqli_connect('localhost','root','','project');
$query="INSERT into colleges(college_name,stream,city,address,description,image,contact_no,email,website) values ('$name','$str','$city','$address','$description','$post_image','$contact','$email','$website')";
$result=mysqli_query($connection,$query);
if($result)
{
    header('Location:add-college.php');
}
else {
  die("Did not upload".mysqli_error($connection));
}
}
?>