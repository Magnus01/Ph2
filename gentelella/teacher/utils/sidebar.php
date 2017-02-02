<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"> <span>Sci-code</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="..\..\Template\LogoUIA.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <!--                <span>Welcome,</span>-->
                <h2>
                    <?php $user = explode("@", $_SESSION['user_session']);
                    
                    ?>
                    Welcome, <b><?= isset($user[0]) ? $user[0] : '' ?></b>
                </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <div class="clearfix"></div>
                <ul class="nav side-menu">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa"></span></a>

                    </li>
                    <li><a href="coursecreator.php"><i class="fa fa-mortar-board"></i> Course Creator </a>
                    </li>
                    <li><a href="highscore.php"><i class="fa fa-star"></i>Highscore<span class="fa"></span></a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->


        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="course.php?id=1">
                <span class="fa fa-mortar-board" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>