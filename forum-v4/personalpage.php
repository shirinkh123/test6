<?php

require_once 'forumconection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/custom.css" rel="stylesheet">

    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link href="css/new.css" rel="stylesheet">


</head>

<body class="newaccountpage">
    <!--טעינת דף לאמצע או למקום כלשהו -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Handler for .ready() called.
            $('html, body').animate({
                scrollTop: $('#scroll').offset().top
            }, 'slow');
        });
    </script>
    <div class="container-fluid">


        <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a class="navbar-brand">SMART</a>
                </div>



            </div>
        </section>
        <!-- HOME -->
        <section id="home" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1>כאן כולנו לומדים חכם</h1>
                        <span>
                            (+972) צרו קשר 054-213-9999
                            <small>עבור כל שאלה</small>
                        </span>
                    </div>
                </div>


            </div>
    </div>
    </section>

    <!-- קישור לסקריפט בתחילת הדף -->
    <div id="scroll"></div>

    <div class="headernav">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                    <div class="dropdown">

                    </div>
                </div>
                <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                    <div class="wrap">

                    </div>
                </div>
                <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                    <div class="stnt pull-left">

                    </div>
                    <div class="env pull-left"><i class="fa fa-envelope"></i></div>
                    <div class="avatar pull-left dropdown">
                        <a data-toggle="dropdown" href="#"><img src="images/avatar.jpg" alt="" /></a> <b
                            class="caret"></b>
                        <div class="status green">&nbsp;</div>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="index2.php">חזרה
                                    לשאלות</a></li>


                            <?php 
                                if($_SESSION['typeuser']==0):?>
                            <li role="presentation"><a role="menuitem" tabindex="-2" href="pagestudentone.php">חזרה
                                    לדף ראשי</a></li>
                            <?php endif;?>
                            <?php if($_SESSION['typeuser']==1):?>
                            <li role="presentation"><a role="menuitem" tabindex="-2" href="pageteacherone.php">חזרה
                                    לדף ראשי</a></li>
                            <?php endif;?>
                            <li role="presentation"><a role="menuitem" tabindex="-3" href="chatsof/logout.php">יציאה
                                    לדף הבית</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>

    <?php
                                         
                        if($_SESSION['typeuser']==1&&!isset($_GET['Teach_Id']))
                        {
                        $res = $db->getDataTeacher($_SESSION['userid']);//מורה
                        $res1=$db->getEduTeacher($_SESSION['userid']);
                        $res2=$db->getKorsTeacher($_SESSION['userid']);
                        $res3=$db->getCityTeacher($_SESSION['userid']);
                        }
                        if($_SESSION['typeuser']==0||($_SESSION['typeuser']==1&&isset($_GET['Teach_Id'])))
                        {
                          $res = $db->getDataTeacher($_GET['Teach_Id']);
                       
                          $res1=$db->getEduTeacher($_GET['Teach_Id']);
                          $res2=$db->getKorsTeacher($_GET['Teach_Id']);
                          $res3=$db->getCityTeacher($_GET['Teach_Id']);
                          
                          }
                        ?>


    <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>


    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">



                    <!-- POST -->
                    <div class="post" id="post2">
                        <form action="#" class="form newtopic" method="post">
                            <div class="postinfotop">
                                <h1>עמוד אישי</h1>
                            </div>



                            <!-- acc section -->
                            <div class="accsection">


                                <div class="posttext pull-left" dir="rtl">
                                    <div class="row">
                                        <h3 dir="rtl"> <?php
                                        echo "שם פרטי:"."<br>";
                                        ?></h3>
                                        <p dir="rtl"><?php 
                                  echo $row['firstnamet'];
                                   ?></p>



                                        <h3 dir="rtl"> <?php
                                        echo "שם משפחה:"."<br>";
                                        ?></h3>
                                        <p dir="rtl"><?php 
                                  echo $row['lastnamet'];
                                   ?></p>


                                        <h3 dir="rtl"> <?php
                                        echo "תעודת זהות:"."<br>";
                                        ?></h3>
                                        <p dir="rtl"><?php 
                                  echo $row['id_teachers'];
                                   ?></p>
                                        <h3 dir="rtl"> <?php
                                        echo "נייד:"."<br>";
                                        ?></h3>
                                        <p dir="rtl"><?php 
                                  echo $row['phonet'];
                                   ?></p>
                                        <h3 dir="rtl"> <?php
                                        echo "תעריף לשעה:"."<br>";
                                        ?></h3>
                                        <p dir="rtl"><?php 
                                  echo $row['price'];
                                   ?></p>


                                        <h3 dir="rtl"> <?php
                                        echo "עוד על עצמי:"."<br>";
                                        ?></h3>
                                        <p dir="rtl"><?php 
                                  echo $row['about'];
                                   ?></p>



                                        <?php endwhile; ?>

                                        <h3 dir="rtl"> <?php
                                         if(empty($res2))
                                        echo "מקצועות לימוד:";
                                        ?></h3>
                                        <?php 
                                      
                                        while($row2 = $res2->fetch(PDO::FETCH_ASSOC)) :?>
                                        <p dir="rtl"><?php 
                                    
                                  echo $row2['name_sub'];
                                   ?></p>

                                        <?php endwhile; ?>





                                        <h3 dir="rtl"> <?php
                                         if(empty($res1))
                                        echo "השכלה:";
                                        ?></h3>
                                        <?php while($row1 = $res1->fetch(PDO::FETCH_ASSOC)) :?>

                                        <p dir="rtl"><?php 
                                  echo $row1['educ'];
                                   ?></p>

                                        <?php endwhile; ?>



                                        <h3 dir="rtl"> <?php
                                         if(empty($res3))
                                        echo "ערי לימוד:";
                                        ?></h3>
                                        <?php while($row3 = $res3->fetch(PDO::FETCH_ASSOC)) :?>
                                        <p dir="rtl"><?php 
                                    
                                  echo $row3['name_c'];
                                   ?></p>

                                        <?php endwhile; 
                                       ?>


                                    </div>

                                </div>

                                <section id="contact" data-stellar-background-ratio="0.5">




                            </div><!-- acc section END -->




                            <div class="postinfobot">



                                <div class="pull-right postreply">

                                    <div class="clearfix"></div>
                                </div>



                                <div class="clearfix"></div>
                            </div>
                    </div>
                    </form>
                </div><!-- POST -->




            </div>

        </div>
        </div>





    </section>










    <!-- FOOTER -->
    <footer data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                        <div class="col-md-6 col-sm-5">
                            <div class="copyright-text">
                                <p dir="rtl"> &copy; ללמוד חכם 2019</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-7">
                            <div class="phone-contact">
                                <p dir="rtl"><span> 052-020-0340 (972+)</span>תתקשרו אלינו </p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com" class="fa fa-facebook-square"
                                        attr="facebook icon"></a></li>
                                <li><a href="https://twitter.com/login/error" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    </div>


    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/upload.js"></script>

    <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
    <script type="text/javascript">
        var revapi;

        jQuery(document).ready(function () {
            "use strict";
            revapi = jQuery('.tp-banner').revolution({
                delay: 15000,
                startwidth: 1200,
                startheight: 278,
                hideThumbs: 10,
                fullWidth: "on"
            });

        }); //ready
    </script>

    <!-- END REVOLUTION SLIDER -->
</body>

</html>