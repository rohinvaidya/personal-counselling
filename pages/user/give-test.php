<!DOCTYPE html>
<html lang="en">

<?php
$test_id=$_GET['test_id'];
session_start();
if (!isset($_SESSION['id']))
    header('Location:../error.php');
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Give Test
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
<?php include('includes/vertical-navbar.php');?>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="user-index.php">Your Preferance</a>
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
                                <img alt="Your picture" src=<?php echo $_SESSION["profilepic"];?>>
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION["name"]?></span>
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

                <form action="submit-test-process.php" method="POST">

                    <input type="hidden" value="<?php echo $test_id;?>" name="test_id">
                    <?php

                    include('../../includes/db.php');
                    $query="SELECT * FROM question_choice where test_id=$test_id";
                    $result=mysqli_query($dbc,$query);
                    $no=0;
                    echo "<form action='test_processing.php' method='POST'>";
                    $i=0;

                    while($data=mysqli_fetch_assoc($result))
                    {
                        $i++;
                        $question_id= $data['question_id'];
                        $question= $data['question'];
                        $opt1=$data['option1'];
                        $opt2=$data['option2'];
                        $opt3=$data['option3'];
                        $opt4=$data['option4'];
                        $correct_answer = $data['correct_answer'];
                        echo<<<ROW
                            <input type="hidden" value="$question_id" name="question_id_$i">
                            <input type="hidden"value="$correct_answer" name="correct_answer_$i">
                          <div class="row ml-4">
                                <div class="col-md-8">
                                    <label>$i. $question<label></br>
                                </div>
                            </div>
                          
                            <div class="row ml-6">
                                <div class="custom-control custom-radio mb-3 col-md 6">
                                    <input name="options_$i" value="$opt1" class="custom-control-input" required id="option1-$i" type="radio">
                                    <label class="custom-control-label" for="option1-$i">$opt1</label>
                                </div>

                                <div class="custom-control custom-radio mb-3 col-md-6">
                                    <input name="options_$i" value="$opt2" class="custom-control-input" required id="option2-$i" type="radio">
                                    <label class="custom-control-label" for="option2-$i">$opt2</label>
                                </div>
                            </div>    

                            <div class="row ml-6">
                                <div class="custom-control custom-radio mb-3 col-md 6">
                                    <input name="options_$i" value="$opt3" class="custom-control-input" required id="option3-$i" type="radio">
                                    <label class="custom-control-label" for="option3-$i">$opt3</label>
                                </div>

                                <div class="custom-control custom-radio mb-3 col-md-6">
                                    <input name="options_$i" value="$opt4" class="custom-control-input" required id="option4-$i" type="radio">
                                    <label class="custom-control-label" for="option4-$i">$opt4</label>
                                </div>
                            </div>    
ROW;
                    }
                    ?>
                    <?php echo "<input type='hidden' name='i_value' value='$i'"; ?>
                    <div class="row">
                        <div class="col-md-3 ml-7 mt-4" >
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Submit test" >
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