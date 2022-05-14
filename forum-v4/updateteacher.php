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
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="updateteacher.php">עדכון
                                        פרטים</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="pageteacherone.php">חזרה
                                        לתפריט</a></li>

                                <li role="presentation"><a role="menuitem" tabindex="-3" href="chatsof/logout.php">חזרה לדף
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



                        <!-- POST -->
                        <div class="post" id="post2">
                            <form action="#" class="form newtopic" method="post">
                                <div class="postinfotop">
                                
<!-- קישור לסקריפט בתחילת הדף -->
		<div id="scroll"></div>
                                    <h1>עדכון פרטים אישיים</h1>
                                </div>
                                

                                <?php
                          $res = $db->getDataTeacher($_SESSION['userid']);
                       
                        ?>

                                <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>

                                <!-- acc section -->
                                <div class="accsection">

                                    <div class="topwrap">

                                        <div class="posttext pull-left" dir="rtl">
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6" dir="rtl">
                                                    <input class="pull-right" dir="rtl" type="text" name="lname" id="lname" placeholder="שם משפחה"
                                                        class="form-control" value="<?php echo $row['lastnamet'];?>" />
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <input  class="pull-right" dir="rtl" type="text"  id="fname" name="fname" placeholder="שם פרטי"
                                                        class="form-control" value="<?php echo $row['firstnamet'];?>" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="posttext pull-left" dir="rtl">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <input class="pull-right" dir="rtl" type="password" placeholder="סיסמא חדשה"
                                                        class="form-control" id="pass2" name="pass2" />
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <input class="pull-right" dir="rtl" type="text" placeholder="סיסמא נוכחית"
                                                        class="form-control" id="pass" name="pass"  />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="posttext pull-left" dir="rtl">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <input class="pull-right" type="number" class="form-control" name="price" id="price"
                                                        placeholder="מחירון" min=0 max=600 required
                                                        value="<?php echo $row['price'];?>">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <input class="pull-right" dir="rtl" type="telephone" placeholder="מספר נייד"
                                                        class="form-control" id="tele" name="tele"
                                                        value="<?php echo $row['phonet'];?>" />
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <input class="pull-right" dir="rtl" type="email" placeholder="אימייל"
                                                        class="form-control" id="email" name="email"
                                                        value="<?php echo $row['mailt'];?>" />
                                                </div>


                                                < <div class="col-lg-6 col-md-6">
                                                    <input class="pull-right" dir="rtl" type="text" placeholder="תספר על עצמך"
                                                        class="form-control" id="about" name="about"
                                                        value="<?php echo $row['about'];?>" />
                                                </div>

                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <section id="contact" data-stellar-background-ratio="0.5">

                                      

                                            <?php
                                          $res = $db->getAllCities();
                                          $res2 = $db->getCityTeacher($_SESSION['userid']);
                                              ?>
                                        
                                        <div class="clearfix">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10 col-md-10">
                                                   <div class="pull-right"> <?php echo ":ערים רלוונטים";?></div>
                                                    <select class="pull-right" dir="rtl" class="form-control" name="cf-Citiesupdate[]"
                                                        id="cf-Citiesupdate" multiple>

                                                  
                                                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>

                                                        <option value="<?php echo $row["id_c"];?>">
                                                            <?php echo $row['name_c']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                </div>

                                                <?php
                                     $res = $db->getAllKorses();
                        
                                     ?>
                                     
                                     <div class="clearfix">
                                            </div>
                                                <div class="col-lg-10 col-md-10">
                                                    <div class="pull-right"> <?php echo ":קורסים רלוונטים";?></div>
                                              
                                                    <select class="pull-right" dir="rtl" class="form-control" name="cf-korsupdate[]"
                                                        id="cf-korsupdate" multiple>
                                                      

                                                     
                                                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                                                        <option value="<?php echo $row["id_sub"];?>">
                                                            <?php echo $row['name_sub']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>

                                                </div>
                                                <?php
                                          $res = $db->geteducation();
                               
                                              ?>
                                              
                                            <div class="clearfix">
                                            </div>
                                            
                                                <div class="col-lg-10 col-md-10">
                                                   <div  class="pull-right" > <?php echo ":השכלה";?></div>
                                              
                                                    <select class="pull-right" dir="rtl" class="form-control" name="cf-budget"
                                                        id="cf-budget" placeholder="השכלה">

                                                        <option value="0" disabled selected hidden>השכלה </option>
                                                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>

                                                        <option dir="rtl" value="<?php echo $row["Id_ed"];?>">
                                                            <?php echo $row['educ']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="clearfix">
                                            </div>

                                    </div>
                                </div><!-- acc section END -->





                                <div class="postinfobot">



                                    <div class="pull-right postreply">
                                        <div class="pull-left"><button type="submit"
                                                class="btn btn-primary" name="update" id="update">עדכן</button></div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix">
                                            </div>
                                    <div class="pull-right postreply">

                                        <div class="pull-left"> <button type="button" name="delete" id="delete"
                                                class="btn btn-primary">מחק את המשתמש
                                                שלי</button></div>
                                           </div>
                                    <div class="clearfix"></div>
                                </div>
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
    <script src="js/update.js"></script>
    <script src="js/delete.js"></script>
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