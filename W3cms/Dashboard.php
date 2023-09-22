<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./images/logo-full.png">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pt-4 vh-100 sidebar bg-white rounded-4">
                <div class="logo-brand text-center">
                    <a href="Dashboard.php"><img src="./images/logo-full.png" alt="" style="width:80%;height:30%"></a>
                </div>
                <div class="menu-sidebar">
                    
                    <ul class="navbar-nav">
                        <li class="nav-item m-2 ">
                            <a class="nav-link fw-bold text-secondary sb" href="user.php"> 
                                <i class="bi bi-person mx-2"></i> User
                                <span class="badge round-fill">Modules</span>
                            </a>
                        </li>
                        <li class="nav-item m-2 ">
                            <a class="nav-link fw-bold text-secondary sb" href="#"> 
                                <i class="bi bi-person mx-2"></i> Groups
                                <span class="badge round-fill">Modules</span>
                            </a>
                        </li>
                        <li class="nav-item m-2 ">
                            <a class="nav-link fw-bold text-secondary sb" href="#"> 
                                <i class="bi bi-person mx-2"></i> Permissions
                                <span class="badge round-fill">Modules</span>
                            </a>
                        </li>

                    </ul>
                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           User
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Users</a></li>
                            <li><a class="dropdown-item" href="">Groups</a></li>
                            <li><a class="dropdown-item" href="">Permissions</a></li>
                        </ul>
                    </div> -->

                             <!-- <ul class="navbar-nav">
                                <li class="nav-item m-2 ">
                                    <a class="nav-link fw-bold text-secondary sb" href="#"> 
                                        <i class="bi bi-person mx-2"></i> User
                                        <span class="badge round-fill">Modules</span>
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-box-seam mx-2"></i>CMS
                                    <span class="badge round-fill">Modules</span>
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-gear mx-2"></i>Config
                                    <span class="badge round-fill">Modules</span>
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-grid mx-2"></i>Dashboard
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-book mx-2"></i>Courses
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-people mx-2"></i>Instructor
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-info-circle mx-2"></i>Apps
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-pie-chart mx-2"></i>Charts
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-star mx-2"></i>Bootstrap
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-heart mx-2"></i>Plugins
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-gear-wide mx-2"></i>Widget
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-file-earmark-check mx-2"></i>Forms
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-file-earmark-spreadsheet mx-2"></i>Table
                                    </a>
                                </li>
                                <li class="nav-item m-2 ">
                                    <a class="nav-link fw-bold text-secondary sb" href="#">
                                    <i class="bi bi-file-earmark-break mx-2"></i>Pages
                                    </a>
                                </li>

                            </ul>  -->
                        
                    
                </div>
                <div class="copyright text-center">
                    <p class="fs-6 text-secondary">Made with 
                        <span class="heart"><i class="bi bi-heart-fill text-secondary"></i></span>
                        by DexignZone
                    </p>
                </div>
            </div>
            <div class="col-md-9 pt-3 px-4">
                <div class="row">
                    <div class="header d-flex sticky-md-top">
                        <div class="col">
                            <a href=""><i class="bi bi-list fs-2 fw-bold text-black "></i></a>
                            <span class="fs-2 fw-bold">Dashboard</span>
                        </div>
                        <div class="col"></div>
                        <div class="col pt-1">
                            <form action="">
                                <div class="search input-group">
                                    <span class="input-group-text bg-white"><i class="bi bi-search fs-5"></i></span>
                                    <input type="text" class="form-control form-control-lg fw-normal" placeholder="Search here...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main-content py-3">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-6 ">
                                <img src="./images/phongChinh.jpg" alt="" style="height:100%;width:100%">
                            </div>
                            <div class="col-md-6 ">
                                <img src="./images/phongChinh.jpg" alt=""  style="height:100%;width:100%" >
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <img src="./images/logo-full.png" alt="" style="height:100%;width:100%">
                            </div>
                            <div class="col-md-4">
                                <img src="./images/logo-full.png" alt="" style="height:100%;width:100%">
                            </div>
                            <div class="col-md-4">
                                <img src="./images/logo-full.png" alt="" style="height:100%;width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 my-4 bg-white rounded-start-5">
                
            </div>
        </div>

    </div>
</body>
</html>