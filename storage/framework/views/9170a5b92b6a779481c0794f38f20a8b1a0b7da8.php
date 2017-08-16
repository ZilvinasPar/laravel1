<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>



    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>s" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo e(asset('css/lines.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!----webfonts--->
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo e(asset('js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo e(asset('js/d3.v3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/rickshaw.js')); ?>"></script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">Home</a>
                    <a class="navbar-brand" href="<?php echo e(url('/contact')); ?>">Contact</a>

                    <?php if(Auth::guest()): ?>
                    <?php elseif(Auth::user()->user_role == 'teacher'): ?>
                        <a class="navbar-brand" href="<?php echo e(url('/administration')); ?>">
                            Admin
                        </a>
                    <?php endif; ?>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown" role="button">
                                   Hello <?php echo e(Auth::user()->name); ?>

                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout?
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout?
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </nav>

        <?php echo $__env->yieldContent('content'); ?>

    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html>
