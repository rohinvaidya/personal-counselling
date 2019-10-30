<?php

session_start();

if (isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
}
else
{
    header('Location:../error.php');
}

include("../../includes/db.php");
//count of colleges
$colleges="SELECT COUNT(*) FROM colleges";  
$result_colleges = mysqli_query($dbc,$colleges);
$count_colleges_array=mysqli_fetch_row($result_colleges);
$count_colleges=$count_colleges_array['0'];

//count of counsellors
$counsellor="SELECT COUNT(*) FROM user where role='counsellor'";  
$result_counsellor = mysqli_query($dbc,$counsellor);
$count_counsellor_array=mysqli_fetch_row($result_counsellor);
$count_counsellor=$count_counsellor_array['0'];

//count of clients
$client="SELECT COUNT(*) FROM user where role='client'";  
$result_client = mysqli_query($dbc,$client);
$count_client_array=mysqli_fetch_row($result_client);
$count_client=$count_client_array['0'];

$tests="SELECT COUNT(*) FROM test";
$result_tests = mysqli_query($dbc,$tests);
$count_tests_array=mysqli_fetch_row($result_tests);
$count_tests=$count_tests_array['0'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Welcome !
    </title>
    <!-- Favicon -->
    <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="../../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
<?php include("includes/vertical-nav.php");?>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="admin.php">Home</a>
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
            <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Your picture" src=<?php echo $_SESSION['profilepic']?>>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm font-weight-bold"><?php echo $_SESSION['name'];?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="../logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
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
        <!-- Main Content -->
        <div class='row'>
        <!-- For Colleges -->

        <div class="col-md-4">
            <div class="card card-stats mb-4 mb-lg-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Number of Colleges</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $count_colleges;?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap"><a href='manage-colleges.php'><button class="btn btn-primary" type="button">Manage Colleges</button></a></span>
                    </p>
                </div>
            </div>
         </div>

         <!--For counsellors -->
         <div class="col-md-4">
            <div class="card card-stats mb-4 mb-lg-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Number of CounsellorS</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $count_counsellor;?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap"><a href='manage-counsellors.php'><button class="btn btn-primary" type="button">Manage Counsellors</button></a></span>
                    </p>
                </div>
            </div>
         </div>
        <!--For Tests-->
            <div class="col-md-4">
                <div class="card card-stats mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Tests</h5>
                                <span class="h2 font-weight-bold mb-0"><?php echo $count_tests;?></span>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap"><a href='manage-test.php'><button class="btn btn-primary" type="button">Manage Test</button></a></span>
                        </p>
                    </div>
                </div>
            </div>
        <!-- For Clients -->
        <div class="col-md-4">
            <div class="card card-stats mb-4 mb-lg-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Number of Clients</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $count_client;?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap"><a href=''><button class="btn btn-primary" type="button">Manage Clients</button></a></span>
                    </p>
                </div>
            </div>

         </div>
        </div>                 
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="../../index.php" class="font-weight-bold ml-1" target="_blank">Convocare</a>
                    </div>
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