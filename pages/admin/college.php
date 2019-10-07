<?php
if (isset($_POST['submit']))
{
$college_name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['address'];
$description=$_POST['description'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$website=$_POST['website'];
echo "college name is".$college_name."<br>";
echo "city is".$city."<br>";
echo "address is".$address."<br>";
echo "description is".$description."<br>";
echo "contact is".$contact."<br>";
echo "email is".$email."<br>";
echo "website is".$website."<br>";
// $stream = $_POST['stream'];
if (isset($_POST['stream'])){
    // echo implode(',', $_POST['stream']);
    $arr = $_POST['stream'];
    print_r($arr);
    foreach($arr as $new => $key) {
        echo "<p>".$key ."</p>";
        } 
}
// echo $arr;


}
?>