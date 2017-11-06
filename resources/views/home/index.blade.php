<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from www.themeon.net/nifty/v2.2/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:44:19 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page | Zilla Parishad.</title>


        <!--STYLESHEET-->
        <!--=================================================-->

        <!--Open Sans Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="<?php echo App::make('url')->to('/'); ?>/css/bootstrap.min.css" rel="stylesheet">


        <!--Nifty Stylesheet [ REQUIRED ]-->
        <link href="<?php echo App::make('url')->to('/'); ?>/css/nifty.min.css" rel="stylesheet">

        <!--Custome Stylesheet [ ]-->
        <link href="<?php echo App::make('url')->to('/'); ?>/css/style.css" rel="stylesheet">
        
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="<?php echo App::make('url')->to('/'); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


        <!--Demo [ DEMONSTRATION ]-->
        <link href="<?php echo App::make('url')->to('/'); ?>/css/demo/nifty-demo.min.css" rel="stylesheet">




        <!--SCRIPT-->
        <!--=================================================-->

        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="<?php echo App::make('url')->to('/'); ?>/plugins/pace/pace.min.css" rel="stylesheet">
        <script src="<?php echo App::make('url')->to('/'); ?>/plugins/pace/pace.min.js"></script>

    </head>

    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

    <body>
        <div id="container" class="cls-container">

            <!-- BACKGROUND IMAGE -->
            <!--===================================================-->
            <div id="bg-overlay" class="bg-img img-balloon"></div>


            <!-- HEADER -->
            <!--===================================================-->
            <div class="cls-header cls-header-lg">
                <div class="cls-brand">
                    <a class="box-inline" href="#">
                            <!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
                        <span class="brand-title">Zilla Parishad <span class="text-thin">Admin</span></span>
                    </a>
                </div>
            </div>
            <!--===================================================-->


            <!-- LOGIN FORM -->
            <!--===================================================-->
            <div class="cls-content">
                <table border = 1>
                    <tr>
                        <td>{{ trans('home/index.district_id') }}</td>
                        <td>{{ trans('home/index.district_name') }}</td>
                    </tr>
                    @foreach ($district as $di)
                    <tr>
                        <td>{{ $di->district_id }}</td>
                        @if(app()->getLocale() == 'mr') 
                            <td>{{ $di->district_name_marathi }}</td>
                        @endif            
                        @if(app()->getLocale() == 'en') 
                            <td>{{ $di->district_name }}</td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            <!--===================================================-->

        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->



        <!--JAVASCRIPT-->
        <!--=================================================-->

        <!--jQuery [ REQUIRED ]-->
        <script src="<?php echo App::make('url')->to('/'); ?>/js/jquery-2.1.3.min.js"></script>


        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="<?php echo App::make('url')->to('/'); ?>/js/bootstrap.min.js"></script>


        <!--Fast Click [ OPTIONAL ]-->
        <script src="<?php echo App::make('url')->to('/'); ?>/plugins/fast-click/fastclick.min.js"></script>


        <!--Nifty Admin [ RECOMMENDED ]-->
        <script src="<?php echo App::make('url')->to('/'); ?>/js/nifty.min.js"></script>


        <!--Background Image [ DEMONSTRATION ]-->
        <script src="<?php echo App::make('url')->to('/'); ?>/js/demo/bg-images.js"></script>

    </body>

</html>

