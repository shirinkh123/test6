<?php
require_once "forumconection.php";//include

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ללמוד חכם</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">


    <!-- fonts -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

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
                <a  class="navbar-brand">SMART</a>
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
                          
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="pagemanager.php">חזרה לעמוד ראשי</a></li>

                                <li role="presentation"><a role="menuitem" tabindex="-2" href="chatsof/logout.php">חזרה
                                        לדף
                                        הבית</a></li>

                            </ul>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>






        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">



<!-- קישור לסקריפט בתחילת הדף -->
<div id="scroll"></div>

                        <!-- POST -->
                        <div class="post" id="post2">
                            <form action="#" class="form newtopic" method="post">
                                <div class="postinfotop" >
                                    <h1>מחיקה/חסימה של קורסים</h1>
                                </div>

                                <?php
                          $res = $db->getDataStudent($_SESSION['userid']);
                       
                        ?>


                                <!-- acc section -->
                                <div class="accsection">

                                    <div class="topwrap">

                                        <div class="posttext pull-right" dir="rtl">
                                            <div class="row">

                                                
                                           
                                            <br />
                                            <?php
                                           $res = $db->getAllKorses();
                        
                                                 ?>
                                             <div  class="pull-right">  <?php echo "קורסים רלוונטים:";?></div>
                                             <div class="clearfix">
                                            </div>
                                            
                                                    <select class="pull-right"   dir="rtl"  name="cf-korsdel[]"
                                                        id="cf-korsdel" placeholder="קורסים" multiple>



                                                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                                                        <option  value="<?php echo $row["id_sub"];?>">
                                                            <?php echo $row['name_sub']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                    <div class="clearfix">
                                            </div>
                                       
                                            <div class="pull-right"> <button type="button" name="kors" id="kors"
                                                class="btn btn-primary">הסרה של קורסים
                                            </button></div>
                                            <div class="clearfix">
                                            </div>
                                            <br />
                                            <input class="pull-right" dir="rtl" type="text" name="addkors" id="addkors"
                                                        placeholder="שם קורס" 
                                                     />
                                                     <div class="clearfix">
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                       

                                            <div class="pull-right"> <button type="button" name="korsadd" id="korsadd"
                                                class="btn btn-primary">הוספת קורס
                                            </button></div>

                                       
                                            </div>
                                        </div>
                                        <div class="posttext pull-right" dir="rtl">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                           
                                             
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                            
                                                </div>

                                            </div>
                                        </div>
                                        <div class="posttext pull-left" dir="rtl">

                                            <div class="row">

                                                <div class="col-lg-6 col-md-6">
                                              
                                                </div>
                                                <div>
                                                 
                                                </div>
                                            </div>
                                        </div>
                           
                                        <section id="contact" data-stellar-background-ratio="0.5">



                                            <div class="row">
                                              
                                               
                                              

                                                </div>
                                         
                                                <div class="clearfix">
                                            </div>

                                    </div>
                                </div><!-- acc section END -->






                                <!-- acc section -->
                                <div class="accsection survey">
                                    <div class="acccap">


                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- acc section END -->










                            </form>
                        </div><!-- POST -->








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
    <script src="js/deleteadmin.js"></script>
    <script src="js/blockadmin.js"></script>
    <script src="js/delete_korses.js"></script>
    <script src="js/add_korses.js"></script>
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