<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/custom.css" rel="stylesheet"">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index">
                            <img src="images/icon/my_logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/my_logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                             
                            </ul>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <span>Welcome to 99luxury cleaning</span>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                
                                        <div class="account-dropdown js-dropdown">
                                                           
                                            <div class="account-dropdown__footer">
                                                <a href="signout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$count_users}}</h2>
                                                <span>users</span>
                                            </div>
                                        </div>
                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$count_groups}}</h2>
                                                <span>groups</span>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </div>

                        </div>
                       
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    
                                    <form method="post" action="new_group_save">
                                        @csrf
                                    <div  style="padding-top: 50px;">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span id = "new_group_span">Group Name:</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input name="new_group_name" required id = "new_group_input" class="form-control" placeholder='enter new group name'></input>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <button id="new_group_save" class="btn btn-success">save</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <div class='container' style="height:30px"></div>
                                        @foreach($groups as $key => $group)
                                        
                                        <h2 class="title-1 m-b-25">{{ $group_names[$key]['name'] }}</h2>
                                        <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>person</th>
                                                <th>status</th>
                                                <th>date</th>
                                                <th class="text-right">cleaning material</th>
                                                <th class="text-right">created date</th>
                                            </tr>
                                        </thead>
                                        @foreach($group as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{$user['name']}}</td>
                                                <td><img src='/images/icon/avatar-02.png'/></td>
                                                <td editable=true>{{$user['status']}}</td>
                                                <td class="text-right">{{$user['date']}}</td>
                                                <td class="text-right">{{$user['cleaning_material']}}</td>
                                                <td class="text-right">{{$user['created_at']}}</td>
                                            </tr>                                            
                                        </tbody>
                                        @endforeach
                                    </table>
                                    <form method="post" action="admin" class="emp-group">
                                        @csrf
                                        <div >
                                        <label for="name">Select name:</label>
                                        <select class="form-control" name="name">
                                            @foreach($user_names as $each)
                                                <option>{{$each['name']}}</option>
                                            @endforeach
                                        </select>
                                            <label for="status">Status</label>
                                            <input type="text" required class="form-control" name="status">
                                            <label for="date">Date</label>
                                            <input type="date" required class="form-control" name="date">
                                            <label for="cleaning_material">Cleaning Material</label>
                                            <input type="text" required class="form-control" name="cleaning_material">
                                            <label for="group_id">Gorup ID</label>
                                            <input type="number" class="form-control" name="group_id" value = {{$key + 1}}>
                                            </div>
                                            <button class="btn btn-info">
                                                save
                                            </button>
                                    </form>
                                    
                                    <div class='container' style="height:30px"></div>
                                    @endforeach
                                </div>
                            </div>
  
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 99luxury cleaning. All rights reserved.</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/my.js"></script>
    <script>
        $("#new_group_span").hide()
        $("#new_group_input").hide()
        $("#new_group_save").hide()
        $(".emp-group").hide()
    $(document).ready(function(){
        
        $("#add_group").click(function(){
            $("#new_group_span").show()
            $("#new_group_input").show()
            $("#new_group_save").show()
        })

        $(".add_new_employee").click(function(){
            $(this).prev().show()
            $(this).hide()
        })
    });
</script>

</body>

</html>
<!-- end document-->
