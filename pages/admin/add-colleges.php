<?php
if (isset($_SESSION))
{
    echo $_SESSION['id'];
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
<?php include("includes/vertical-nav.php");?>
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
                <h2 class="card-title">Add College<hr></h2>
<!--                MAIN FORM-->
                <form action="add-college-processing.php" method="POST" enctype="multipart/form-data">
<!--                    INPUT IMAGE-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="post_image" type="file" class="form-control " id="image" placeholder="image">
                            </div>
                        </div>
                    </div>
<!--                    END OF INPUT IMAGE-->
<!--                    NAME OF COLLEGE-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name of College">
                            </div>
                        </div>
                    </div>
<!--                    END OF NAME OF COLLEGE-->
<!--                DESCRIPTION-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description of college"></textarea>
                            </div>
                        </div>
                    </div>
<!--                    END OF DESCRIPTION-->
<!--                    CHECKBOX FOR STREAM-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input value="arts" name="stream[]" class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1">Arts</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input value="commerce" name="stream[]" class="custom-control-input" id="customCheck2" type="checkbox">
                                    <label class="custom-control-label" for="customCheck2">Commerce</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input value="science" name="stream[]" class="custom-control-input" id="customCheck3" type="checkbox" >
                                    <label class="custom-control-label" for="customCheck3">Science</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input value="diploma" name="stream[]" class="custom-control-input" id="customCheck4" type="checkbox">
                                    <label class="custom-control-label" for="customCheck4">Diploma</label>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    END OF CHECKBOX FOR STREAMS-->
<!--                    ADDRESS-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea name="address" class="form-control" id="address" rows="3" placeholder="Address of College"></textarea>
                            </div>
                        </div>
                    </div>
<!--                    END OF ADDRESS-->
<!--                    CITY-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="city" type="text" class="form-control " id="city" placeholder="City">
                            </div>
                        </div>
                    </div>
<!--                    END OF CITY-->
<!--                    CONTACT US-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="contact" type="text" class="form-control" id="contact" placeholder="Contact Number">
                            </div>
                        </div>
                    </div>
<!--                    END OF CONTACT US-->
<!--                    EMAILID-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name=" email" type="email" class="form-control" id="email" placeholder="Email ID">
                            </div>
                        </div>
                    </div>
<!--                    END OF EMAIL-ID-->
<!--                    WEBSITE-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="website" type="website" class="form-control" id="website" placeholder="Website">
                            </div>
                        </div>
                    </div>
<!--                    END OF WEBSITE-->
                    <div class="row">
                        <div class="col-md-4 center" >
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" id="name" name="submit" >
                            </div>
                        </div>
                    </div>
                </form>
<!--                END OF FORM-->
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