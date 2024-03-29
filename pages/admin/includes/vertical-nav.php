<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="admin.php">
            <img src="../../assets/project/images/Convocare.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg">
              </span>
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
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../../index.php">
                            <img src="../../assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item" class= " active">
                    <a class=" nav-link " href="admin.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-counsellors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                        <i class="ni ni-hat-3 text-primary"></i>
                        <span class="nav-link-text">Counsellors</span>
                    </a>

                    <div class="collapse" id="navbar-counsellors">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-counsellors.php" class="nav-link">Add Counsellors</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-counsellors.php" class="nav-link">Manage Counsellors</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-tests" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                        <i class="ni ni-books text-primary"></i>
                        <span class="nav-link-text">Tests</span>
                    </a>

                    <div class="collapse" id="navbar-tests">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-test.php" class="nav-link">Add Tests</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-test.php" class="nav-link">Manage Tests</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-colleges" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                        <i class="ni ni-square-pin text-primary"></i>
                        <span class="nav-link-text">Colleges</span>
                    </a>

                    <div class="collapse" id="navbar-colleges">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-colleges.php" class="nav-link">Add Colleges</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-colleges.php" class="nav-link">Manage Colleges</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="profile.php">
                        <i class="ni ni-single-02 text-yellow"></i> User Profile
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="view-feedbacks.php">
                        <i class="ni ni-spaceship"></i> Feedbacks
                    </a>
            </ul>
        </div>
    </div>
</nav>