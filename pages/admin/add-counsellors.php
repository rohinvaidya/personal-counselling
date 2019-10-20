<?php

session_start();

if (isset($_SESSION))
{
    // echo $_SESSION['id'];
}
else
{
    header('Location:../error.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Add Counsellor
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
<?php include('includes/vertical-nav.php');?>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="add-counsellors.php">Add Counsellor</a>
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
        <!-- Main Content -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add Counsellor<hr></h2>
                <form action="process-counsellor.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" class= "form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" class= "form-control" name="password" id="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary" value="submit">Add Counsellor</button>
                    </div>            
                </form>
            </div>
        </div>
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