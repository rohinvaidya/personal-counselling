<?php
include ("../../includes/db.php");
/*
if (isset($_SESSION))
{
    echo $_SESSION['id'];
}
else
{
    header('Location:../error.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Manage Test
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
                <h2 class="card-title">ADD/EDIT Test<hr></h2>
                <h1 class="h3 mb-2 text-gray-800">Test</h1>


                <!-- DataTales Code-->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><H2>Test Data</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Test name</th>
                                    <th>View Question</th>
                                    <th>Activate/Deactivate</th>
                                    <th>Description</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Test name</th>
                                    <th>View Question</th>
                                    <th>Activate/Deactivate</th>
                                    <th>Description</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <?php
                                    $sql = "SELECT * FROM TEST";
                                $result = mysqli_query($dbc, $sql);

                                while($row = mysqli_fetch_assoc($result)) {
                                    $test_id = $row['test_id'];
                                    $name = $row['test_name'];
                                    $active = $row['is_active'];
                                    $description = $row['test_description'];


                                    echo "<tr>";
                                    echo "<td>$name</td>";
                                    echo "<td><a href=manage-question.php?test_id=".$test_id.">View Questions</a></td>";
                                    if ($active==0)
                                        echo"<td><a href=activate-test.php?test_id=".$test_id.">Activate</a></td>";
                                    else
                                        echo"<td><a href=deactivate-test.php?test_id=".$test_id.">Deactivate</a></td>";
                                    echo "<td>$description</td>";
                                    echo "<td><a class='btn btn-danger' href=delete-test-process.php?test_id=".$test_id.">Delete</a></td>";
                                    echo "</tr>";
                                }


                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

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


<!-- Datatables JS  -->
<!-- Page level plugins -->
<script src="../../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../assets/js/plugins/datatables/datatables-demo.js"></script>


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