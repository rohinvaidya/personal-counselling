<?php

session_start();
include ("../../includes/db.php");

$question_id = $_GET['question_id'];
if (isset($_SESSION['id']))
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
        Edit Question
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
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="add-counsellors.php">Add <Test></Test></a>
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
                <h2 class="card-title">Add Question<hr></h2>
                <!--                MAIN FORM-->
                <form action="edit-question-process.php?question_id=<?php echo $question_id?>" method="POST">
                    <!--                    QUESTION-->
                    <?php
                    $query = "SELECT * FROM question_choice WHERE question_id = $question_id";
                    $result=mysqli_query($dbc,$query);
                    $data=mysqli_fetch_assoc($result);
                    //die(print_r($data));
                    $question = $data['question'];
                    $option1 = $data['option1'];
                    $option2 = $data['option2'];
                    $option3 = $data['option3'];
                    $option4 = $data['option4'];
                    $correct_answer = $data['correct_answer'];
                    $test_id = $data['test_id'];
                    ?>
                    <input type="hidden" value="<?php echo $test_id; ?>" name="test_id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="question" value="<?php echo $question?>" id="question" placeholder="Enter the question">
                            </div>
                        </div>
                    </div>
                    <!--                    END OF QUESTION-->
                    <!--                    OPTION 1 AND 2T-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="option1" value="<?php echo $option1?>" id="option1" placeholder="Option 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="option2" value="<?php echo $option2?>" id="option2" placeholder="Option 2">
                            </div>
                        </div>
                    </div>
                    <!--                    END OF OPTION 1 AND 2-->
                    <!--                    OPTION 3 AND 4-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="option3" value="<?php echo $option3?>" id="option3" placeholder="Option 3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="option4" value="<?php echo $option4?>" id="option4" placeholder="Option 4">
                            </div>
                        </div>
                    </div>
                    <!--                    END OF OPTION 3 AND 4-->
                    <!--                    CORRECT ANSWER-->
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="form-group">
                                <input type="text" class="form-control" name="correct_answer" value="<?php echo $correct_answer?>" id="correct_answer" placeholder="Correct answer">
                            </div>
                        </div>
                    </div>
                    <!--                    END OF CORRECT ANSWER-->
                    <!--SUBMIT BUTTON-->
                    <div class="row">
                        <div class="col-md-4 center" >
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Edit Question" >
                            </div>
                        </div>
                    </div>
                    <!--                    END OF SUBMIT BUTTON-->
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