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
           
          
          
            <?php
                         
                         $a=$_GET['idforum'];
                         $res4=$db->getforum($_GET['idforum']);


            ?>

            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
       
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">



<!-- קישור לסקריפט בתחילת הדף -->
<div id="scroll"></div>
                            <!-- POST -->
                            <div class="post">
                                <form action="#" class="form newtopic" method="post">
                                    <div class="topwrap">
                                      
                                        <?php while($row = $res4->fetch(PDO::FETCH_ASSOC)) :?>
                                        <div class="posttext pull-left">

                                            <div dir="rtl" >
                                                <h2> <?php echo "נושא שאלה:";?></h2>
                                                <textarea dir="rtl" type="text" placeholder="נושא" name="subject" id="subject" class="form-control"><?php echo $row["title"];?></textarea>
                                            </div>


                                            <div dir="rtl">
                                            <h2> <?php echo "תוכן שאלה:";?></h2>
                                                    <textarea dir="rtl" type="text" name="question" id="question" placeholder="תוכן שאלה"  class="form-control" ><?php echo $row["contents"];?></textarea>
                                            </div>
                                           
                                            <?php endwhile; ?>

                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">

                                        

                                        

                                        <div class="pull-right postreply">
                                            <div class="pull-left">
                                                <input type="submit" class="btn btn-primary" name="send" id="send" value="עדכן">
                                             </div>
                                             <div class="clearfix"></div>
                                        </div>
                                        <?php
                                                   if(isset($_POST['send']))
                                                   {
                                                       if(!empty($_POST['subject']))
                                                       {
                                                           if(!empty($_POST['question']))
                                                           {
                                                               $a=$_GET['idforum'];
                                                               $admin=$_GET['admin'];
                                                            $db->updateQuestion($_GET['idforum'],$_POST['subject'],$_POST['question']);
                                                            $admin=$_GET['admin'];
                                                            if($admin==1)
                                                            echo "<script>
                                                            window.location.href='02topicindexAdmin.php?post_Id=$a';
                                                            alert('השאלה החדשה נשמרה בהצלחה');
                                                            </script>"; 
                                                            else
                                                            echo "<script>
                                                            window.location.href='02_topic.php?post_Id=$a';
                                                            alert('השאלה החדשה נשמרה בהצלחה');
                                                            </script>"; 


                                                           }
                                                           else
                                                           {
                                                            echo "<script>alert('נא לרשום את השאלה שברוצנך לערוך במקום הישנה');</script>";

                                                           }
                                                          




                                                       }
                                                       else
                                                       {
                                                        echo "<script>alert('נא לרשום את הנושא  שברוצנך לערוך במקום הישן');</script>";

                                                           
                                                       }
                                                    }
     
                                                
                                                

                                                 ?>  


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->


                        </div>
                    
                             


              

            </section>

    
           
        </div>

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

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