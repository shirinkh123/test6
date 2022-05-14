<?php
require 'forumconection.php';

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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    </head>
    <body>
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
            <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
                    <div class="container">
          
                   
                              <!-- lOGO TEXT HERE -->
                              <a href="index2.php" class="navbar-brand">SMART</a>
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
                                        <a href="#about" class="btn section-btn smoothScroll">צור חשבון</a>
                                        <span>
                                             (+972) צרו קשר 054-213-9999
                                             <small>עבור כל שאלה</small>
                                        </span>
                                   </div>
                              </div>
          
          
                         </div>
                    </div>
               </section>
          
          
        <div class="container-fluid">

         

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                            <div class="dropdown">
                          
                            </div>
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="חיפוש נושא"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">                            
                                <form action="03_new_topic.php" method="post" class="form">
                                    <button class="btn btn-primary">הוסף שאלה</button>
                                </form>
                            </div>
                            <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                          
                        <div class="avatar pull-left dropdown">
                            <a data-toggle="dropdown" href="#"><img src="images/avatar.jpg" alt="" /></a> <b
                                class="caret"></b>
                            <div class="status green">&nbsp;</div>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="index2.php">חזרה לשאלות</a></li>
                                <?php 
                                if($_SESSION['typeuser']==0):?>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="pagestudentone.php">חזרה לדף ראשי</a></li>
                                <?php endif;?>
                               <?php if($_SESSION['typeuser']==1):?>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="pageteacherone.php">חזרה לדף ראשי</a></li>
                                <?php endif;?>
                                <li role="presentation"><a role="menuitem" tabindex="-3" href="chatsof/logout.php">יציאה לדף הבית</a></li>
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
                            <div class="post">
                                <form action="#" class="form newtopic" method="post">
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                           

                                          
                                        </div>
                                        <div class="posttext pull-left">

                                            <div>
                                                <input type="text" placeholder="נושא" name="sub" id="sub" class="form-control" />
                                            </div>
                                          
                                            <div class="row" >
                                  
                                                <div  class="col-lg-12 col-md-12">
                                                <div class="pull-right">
                                                <?php
                                     $res = $db->getAllKorses();//m3ra5 dename ll sherak
                                     ?>
                              

													<h4>	קטגוריה</h4>
                                                        <select  class="form-control" name="categories" id="categories" placeholder="תוכן קטגוריה" >
                       <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                            <option value="<?php echo $row["id_sub"];?>"><?php echo $row['name_sub']; ?></option>
                        <?php endwhile; ?>
                               </select>
                               </div>
                                                </div>
                                            
                                            </div>

                                            <div>
                                                    <textarea  name="desc" id="desc" placeholder="תוכן שאלה"  class="form-control" ></textarea>
                                            </div>
                                           


                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                        </div>

                                        <div class="pull-left">
                                     
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left">
                                                <input type="submit" class="btn btn-primary" name="send" id="send" value="שלח">
                                             </div>
                                             <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->


                        </div>
                        <div class="col-lg-4 col-md-4">
                                <!-- -->
                            
                          

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
        <script src="js/forums_main.js"></script>

        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    </body>
</html>