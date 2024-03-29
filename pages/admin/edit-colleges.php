<?php

session_start();
include('../../includes/db.php');

if (isset($_SESSION))
{
    echo $_SESSION['id'];
    $college_id = $_GET['college_id'];
    $query="SELECT * FROM colleges where college_id = $college_id";
    $result=mysqli_query($dbc,$query);
    $data=mysqli_fetch_assoc($result);
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
        Edit Counsellors
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
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add College<hr></h2>
<!--                MAIN FORM-->
                <form action="edit-college-process.php?college_id=<?php echo $college_id ?>" method="POST" enctype="multipart/form-data">
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
                                <input type="text" value="<?php echo $data['college_name'];?>" class="form-control" name="name" id="name"` placeholder="Name of College">
                            </div>
                        </div>
                    </div>
<!--                    END OF NAME OF COLLEGE-->
<!--                DESCRIPTION-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description of college"><?php echo $data['description'];?></textarea>
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
                                <textarea name="address" class="form-control" id="address" rows="3" placeholder="Address of College"><?php echo $data['address'];?></textarea>
                            </div>
                        </div>
                    </div>
<!--                    END OF ADDRESS-->
<!--                    CITY-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="city" type="text" value="<?php echo $data['city'];?>"class="form-control " id="city" placeholder="City">
                            </div>
                        </div>
                    </div>
<!--                    END OF CITY-->
<!--                    CONTACT US-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="contact" type="text" value="<?php echo $data['contact_no'];?>" class="form-control" id="contact" placeholder="Contact Number">
                            </div>
                        </div>
                    </div>
<!--                    END OF CONTACT US-->
<!--                    EMAILID-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name=" email" type="email" value="<?php echo $data['email'];?>" class="form-control" id="email" placeholder="Email ID">
                            </div>
                        </div>
                    </div>
<!--                    END OF EMAIL-ID-->
<!--                    WEBSITE-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="website" type="website" value="<?php echo $data['website'];?>" class="form-control" id="website" placeholder="Website">
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