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
                <div class="cls-content-sm panel">
                    <div class="panel-body">
                      @if (count($errors) > 0)
                         <div class = "alert alert-danger">
                            <ul>
                               @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                               @endforeach
                            </ul>
                         </div>
                      @endif 

                        <h3 class="pad-btm">Sign In to your account</h3>
                        <?php
                            echo Form::open(array('url'=>'/validation'));
                        ?>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" class="form-control input-lg" name="username" placeholder="Username" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                      <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                                 </div>
                            </div>
                           <div class="form-group">
                                <select class="selectpicker form-control" name="usertype">
                                    <option value="">Select Role</option>
                                    <option value="ceo">CEO</option>
                                    <option value="executive_engineer">Executive Engineer</option>
                                    <option value="deputy_engineer">Deputy Engineer</option>
                                    <option value="pb_engineer">PB Engineer</option>
                                    <option value="engineer">Engineer</option>
                                    <option value="tender_clerk_zp">Tender Clerk ZP</option>
                                    <option value="tender_clerk_taluka">Tender Clerk Taluka</option>
                                    <option value="auditor_zp">Auditor ZP</option>
                                    <option value="auditor_taluka">Auditor Taluka</option>
                                    <option value="budget_clerk_zp">Budget Clerk Zp</option>
                                    <option value="contractor">Contractor</option>
                                    <option value="cashier">Cashier</option>
                                </select>
                            </div>
                           <div class="form-group">
                                <select class="selectpicker form-control" name="language">
                                    <option value="">Select Language</option>
                                    <option value="en">English</option>
                                    <option value="hi">Hindi</option>
                                    <option value="mr">Marathi</option>
                                </select>
                            </div>                            
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <label class="form-checkbox form-icon">
                                        <input type="checkbox" name="rem" value="rem"> Remember me
                                    </label>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group text-right">
                                        <a href="" class="btn-link" style="color:black">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_login">Sign In</button>
                        <?php
                            echo Form::close();
                        ?>
                    </div>
                </div>
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

