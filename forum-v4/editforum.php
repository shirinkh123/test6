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
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />


</head>

<body class="topic">

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

            <!-- MENU LINKS -->
           


        </div>
    </section>
    <!-- HOME -->
  
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt"></div>
                                <div class="pull-right"></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                   



        <section class="content">
            


            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">


                        


                        <div class="post">
                            <div class="topwrap">
                            
                                <div class="posttext pull-left">
                                   

                                <div class="clearfix"></div>
                            </div>
                        </div><!-- POST -->

                      
                        <!-- POST -->
      
                        <?php
                         
                          $res4=$db->getReply($_GET['Rep_Id']);
                        ?>
             



                        <div class="post">
                            <form action="#" class="form" method="post">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        

                                        
                                    </div>

<!-- קישור לסקריפט בתחילת הדף -->
<div id="scroll"></div>
                                    <div class="posttext pull-left">
                                    <?php while($row = $res4->fetch(PDO::FETCH_ASSOC)) :?>
                                        <div class="textwraper">

                                        <h2> <?php echo ":תוכן תגובה";?></h2>
                                            <textarea name="replyupdate" id="replyupdate" placeholder="תוכן של תגובה"  ><?php echo $row["conteants"];?></textarea>
                                   <?php $_SESSION['id_result']=$row['id_fourms'];?>

                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfobot">

                                    <div class="pull-right postreply">
                                        <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                        <div class="pull-left">
                                            <input type="submit" name="updetcomment" id="updetcomment" class="btn btn-primary"
                                                value="ערוך תגובה">
                                                                                      
                                        </div>
                                        <?php
                                                   if(isset($_POST['updetcomment']))
                                                   {
                                                       if(!empty($_POST['replyupdate']))
                                                       {

                                                    $a=$_SESSION['id_result'];
                                                echo $_SESSION['id_result'];
                                                      $db->updatecomment($_GET['Rep_Id'],$_POST['replyupdate']);
                                                     $checkAdmin=$_GET['admin'];
                                                      if($checkAdmin==1)
                                                      {
                                                      echo "<script>
window.location.href='02topicindexAdmin.php?post_Id=$a';
alert('התגובה החדשה נשמרה בהצלחה');
</script>";                                                       
}
else
{
    echo "<script>
    window.location.href='02_topic.php?post_Id=$a';
    alert('התגובה החדשה נשמרה בהצלחה');
    </script>";          
}
} 
                                                       else
                                                       {
                                                        echo "<script>alert('נא לרשום את התגובה שברוצנך לערוך במקום הישנה');</script>";
                                                    
                                                       }
                                                   
                                                   }
                                                

                                                 ?>  
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div><!-- POST -->
                                  

                    </div>

                   
                        <!-- -->
                        
                        <!-- -->
                      

        </section>
       
    </div>





    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/replies.js"></script>
    <script src="js/likes.js"></script>
    <script src="js/unlike.js"></script>
</body>

</html>