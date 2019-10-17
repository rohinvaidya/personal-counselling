<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <?php 
            if(isset($_POST['profile']) && $_POST['profile'] == true){
                echo '
                <a class="navbar-brand pt-0" href="user/user-index.php">
                    <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
                ';
                $_POST['profile'] = false;
            }
            else{
                echo '
                <a class="navbar-brand pt-0" href="user-index.php">
                    <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
                ';                
            }
        ?>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../../index.html">
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
                <li class="nav-item" class=" active">
                <a class=" nav-link " href="user-index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="test.php">
                        <i class="ni ni-planet text-blue"></i>Tests
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="result.php">
                        <i class="ni ni-pin-3 text-orange"></i>Results
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="chat.php">
                        <i class="ni ni-single-02 text-yellow"></i>Chat
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
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                        <i class="ni ni-spaceship"></i> Getting started
                    </a>
            </ul>
        </div>
    </div>
</nav>