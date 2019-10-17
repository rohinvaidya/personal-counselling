<?php
session_start();
if (!isset($_SESSION['id'])){
  header('Location:../error.php');}

$user_id=$_SESSION['id'];
include("../../includes/db.php");
$query_college="SELECT * from colleges";
$result_college=mysqli_query($dbc,$query_college);
$query_preferance="SELECT preferences from user where id='$user_id'";
$result_preferance=mysqli_query($dbc,$query_preferance);
$user_pref=mysqli_fetch_row($result_preferance);
$pref=$user_pref[0];
$user=explode(", ",$pref);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
       Home
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../images/w.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="../../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
<?php include("includes/vertical-navbar.php");?>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="user-index.php">Home</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </form>
            <!-- User -->
            <?php 
                include('includes/dropdown.php');
            ?>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb--1 pt-5 pt-md-8" style="height: 10px">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->

            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 ">


        <!-- Dashboard-->
        <?php 
        echo "<div class='row'>";
        while($data=mysqli_fetch_assoc($result_college))
        {
            $college_streams=$data['stream'];
            $stream=explode(", ",$college_streams);
            $intersect=array_intersect($stream,$user);
            if(!empty($intersect))
            {
                $post_image = $data['image'];
                $name=$data['college_name'];
                $streams=$data['stream'];
                $description=$data['description'];
                $address=$data['address'];
                $contact = $data['contact_no'];
                $college_id=$data['college_id'];
                echo<<<ROW
                <div class="card ml-6 mb-4"style="width: 20rem;">
                    <img class="card-img-top" src='../../storage/images/$post_image' height='200'  alt=''>
                    <div class="card-body">
                    <h4 class="card-title">$name</h4>
                    <p class="card-text">$description</p>
                    <h5>Contact<h5>
                    <p>$contact</p>
                    <h5>Address<h5>
                    <p>$address</p>
                    <h5>Streams<h5>
                    <p>$streams</p>
                    </div>
                </div>
                ROW;
            }
        }echo "</div>";
        ?>

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core   -->
<script src="../../assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Optional JS   -->
<!--   Argon JS   -->
<script src="../../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
    });
</script>
</body>

</html>