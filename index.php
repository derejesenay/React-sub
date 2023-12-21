<?php
session_start();
require('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Online Efficiency System</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #286090;">
            <div class="container" >
                <!-- Brand and toggle get grouped for better mobile display -->
                               <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online Instrucotr Efficiency System</a>

                                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li style="color:#FFFFFF">
                            <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                        </li>

                        <li style="color:#FFFFFF">
                            <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-info-circle fa-fw"></i>About</a>
                        </li>

                        <li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-anchor"></i>Registration</a></li>



                        <li class="dropdown">
                            <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="index.php?info=login"><i class="glyphicon glyphicon-education text-success"></i> Student</a></li>
                                <li><a href="index.php?info=faculty_login"><i class="glyphicon glyphicon-leaf text-success"></i>  Instructor</a></li>
                                <li><a href="admin"><i class="glyphicon glyphicon-book text-success"></i>  Department Head</a></li>
                                <li><a href="faculty_dean"><i class="glyphicon glyphicon-apple text-success"></i>  Faculty Dean</a></li>
                            </ul>
                        </li>




                        <li>
                            <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                        </li>




                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
<!--    <header id="myCarousel" class="carousel slide">-->
<!--	    <!-- Indicators -->-->
<!--	    <ol class="carousel-indicators">-->
<!--		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--		    <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--		    <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--	    </ol>-->
<!---->
<!--	    <!-- Wrapper for slides -->-->
<!--	    <div class="carousel-inner" style="height: 150px;">-->
<!--		    <div class="item active">-->
<!---->
<!--			    <div class="fill" style="background-image:url('images/images.jpeg');height: 150px;"></div>-->
<!--			    <div class="carousel-caption">-->
<!---->
<!--			    </div>-->
<!--		    </div>-->
<!---->
<!--		    <div class="item">-->
<!--			    <div class="fill" style="background-image:url('images/eff.png'); height: 200px" ></div>-->
<!--			    <div class="carousel-caption">-->
<!---->
<!--			    </div>-->
<!--		    </div>-->
<!---->
<!--		    <div class="item">-->
<!--			    <div class="fill" style="background-image:url('images/images.jpeg'); height: 200px;"></div>-->
<!--			    <div class="carousel-caption">-->
<!---->
<!--			    </div>-->
<!--		    </div>          <!-- Controls -->-->
<!--		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">-->
<!--			    <span class="icon-prev"></span>-->
<!--		    </a>-->
<!--		    <a class="right carousel-control" href="#myCarousel" data-slide="next">-->
<!--			    <span class="icon-next"></span>-->
<!--		    </a>-->
<!--    </header>-->-->

    <style type="text/css">
            #bs-example-navbar-collapse-1 ul li{
                margin-right: 80px;
            }
            header.carousel{
                height: 200px;
            }

        </style>

        <?php
        @$info = $_GET['info'];
        if ($info != "") {

            if ($info == "about") {
                include('about.php');
            } else if ($info == "contact") {
                include('contact.php');
            } else if ($info == "login") {
                include('login.php');
            } else if ($info == "faculty_login") {
                include('faculty_login.php');
            } else if ($info == "registration") {
                include('registration.php');
            }
        } else {
            ?>
            <!-- slider start -->




            <!-- Page Content -->
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-sm-12" style="margin-top:60px;margin-bottom:80px;border-radius: 6px; padding: 5px;">
                            <h2 style="color: green;font-family: monospace;">About Online Instructor efficiency System</h2>
                            Online Instructor efficiency System for Computer science department in Debre Tabor University is developed using PHP, MySQL and javascript and bootstrap's css.
                            Here we have developed the system, which is generally used in the department to rate the instructor based on the performance s/he shows in teaching the course s/he is assigned. Here we have 3 modules which are administrator (department head), student and instructor.
                            <br><br>
                            Administrator is the one who creates the student account by adding all student info and assigning the username and password.
                            Administrator also checks the result once all students entered the efficiency result.
                            We can started the development from the login page, where we have given the option to login as admin, Instructor and student...Here since we have only one admin account, so no need to create the a database to store administrator information. so the admin username is "admin" and password is "sandeep"...select admin in the radio button and login
                            <br><br>
                            Administrator can login to  perform all admin actions such as login to create an account and check result submitted by the students.

                            If you entered the student user and password and selected student option, then it will show all student information and let you enter the efficiency result based on the subject the instructor teaches.
                        </div>




                    <?php } ?>
                </div>

            </div>
            <!-- /.container -->

            <div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px;background: #286090;	">
                <span style="color:#FFFFFF">Developed By Computer Science Summer Students</span>
            </div>
            <!-- jQuery -->
            <script src="css/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="css/bootstrap.min.js"></script>

            <!-- Script to Activate the Carousel -->
            <script>
                $('.carousel').carousel({
                    interval: 5000 //changes the speed
                })
            </script>

    </body>

</html>