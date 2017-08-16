
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE HTML>
<html>
<head>
    <title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"> </script>
    <!-- Mainly scripts -->
    <script src="<?php echo e(asset('js/jquery.metisMenu.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.slimscroll.min.js')); ?>"></script>
    <!-- Custom and plugin javascript -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/screenfull.js')); ?>"></script>
    <script src="<?php echo e(asset('src/assets/js/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(asset('src/js/vendor/tinymce/js/jquery.tinymce.min.js')); ?>"></script>

    <script>tinymce.init({ selector:'textarea' });</script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });



        });
    </script>

    <!----->

    <!--pie-chart--->
    <script src="<?php echo e(asset('js/pie-chart.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!--skycons-icons-->
    <script src="<?php echo e(asset('js/skycons.js')); ?>"></script>
    <!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

    <!----->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1> <a class="navbar-brand" href="<?php echo e(route('admin')); ?>">Administration</a></h1>
        </div>
        <div class=" border-bottom">
            <div class="full-left">
                <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                </section>

                <div class="clearfix"> </div>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men" >
                <ul class=" nav_1" style="margin-right:55px;">

                    <li class="dropdown at-drop">
                        <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
                        <ul class="dropdown-menu menu1 " role="menu">
                            <li><a href="#">

                                    <div class="user-new">
                                        <p>New user registered</p>
                                        <span>40 seconds ago</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>Someone special liked this</p>
                                        <span>3 minutes ago</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>John cancelled the event</p>
                                        <span>4 hours ago</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-times"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>The server is status is stable</p>
                                        <span>yesterday at 08:30am</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-info"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>New comments waiting approval</p>
                                        <span>Last Week</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-rss"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#" class="view">View all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a style="margin-right: 20px; margin-top:20px;" href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo e(Auth::user()->name); ?><i class="caret"></i></span></a>
                        <ul class="dropdown-menu " role="menu">
                            <li><a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </a></li>
                            <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                            <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-envelope"></i>Home Page</a></li>
                            <li><a href="<?php echo e(route('inbox')); ?>"><i class="fa fa-calendar"></i>Inbox</a></li>
                            <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix">

            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="administration" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                        </li>

                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Courses</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo e(route('view_all_courses')); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-file-o nav_icon"></i>View all courses</a></li>

                                <li><a href="<?php echo e(route('add_new_course')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Add new course</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Groups</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo e(route('view_all_groups')); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-file-o nav_icon"></i>View all groups</a></li>

                                <li><a href="<?php echo e(route('add_new_theme')); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-file-o nav_icon"></i>Add theme to group</a></li>

                                <li><a href="<?php echo e(route('add_new_group')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Add new group</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo e(route('view_all_users')); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-file-o nav_icon"></i>View all users</a></li>

                                <li><a href="<?php echo e(route('add_new_course')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Add new user</a></li>

                                <li><a href="<?php echo e(route('add_new_course')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Manage users</a></li>

                            </ul>
                        </li>


                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Files</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo e(route('add_new')); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-file-o nav_icon"></i>Add new files</a></li>

                                <li><a href="<?php echo e(route('add_new_file')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Update files</a></li>

                            </ul>
                        </li>


                        <li>
                            <a href="<?php echo e(route('inbox')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span> </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('contact_edit')); ?>" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Contact edit</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                                <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                                <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="layout.html" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                        </li>


                    </ul>
                </div>
            </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">

        <!-- PAGE CONTENT -->

        <?php echo $__env->yieldContent('content'); ?>


        <div class="clearfix"> </div>
    </div>
</div>

<div class="copy">
    <p> &copy; 2016  All Rights Reserved | Design by Laaaalalalala </p>	    </div>


<!---->
<!--scrolling js-->

<script src="<?php echo e(asset('js/jquery.nicescroll.js')); ?>"></script>
<script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
<!--//scrolling js-->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"> </script>




    </body>


</html>

