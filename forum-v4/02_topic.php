<?php

 require 'forumconection.php';
 if(isset($_GET['post_Id'])){
 $_GET['post_Id'];
$_SESSION['id_forummm']=$_GET['post_Id'];
 }

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
                                <div class="pull-left txt"></div>
                                <div class="pull-right"></div>
                                <div class="clearfix"></div>
                            </form>
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

                        <?php 
      
      include("functionpageing.php");
      if(empty($_SESSION['count']))
      $_SESSION['count']=0;
      
     
      $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
             $limit = 5; //if you want to dispaly 10 records per page then you have to change here
             $startpoint = ($page * $limit) - $limit;
             $url1="02_topic.php";//כל לחיצה על עמוד נלקח PAGE שרשום למעלה 
        // והחל מהנקודה הזאת ניקח חמש קדימה!!
        //כל לחיצה על עמוד מרעננת את הדף ונלקח 5 ערכים הבאים
                   if(!isset($_GET['page']))//עמוד התחלתי לא נלחץ על כלום
                   {
                
                      $count=0;
                   
                     $res2= $db->getReply2($_SESSION['id_forummm']);//הבאת כל התגובות שמתאימות לשאלה ספציפית
                   while($row = $res2->fetch(PDO::FETCH_ASSOC))
                   {
                    $count=$count+1;
                 
                   }
                   $_SESSION['c']=$count;//זה רק בשביל הדפים שרשומים למעלה שיהיו נכונים
               
                   $res=$db->getAllReplayes2($startpoint,$limit,$_SESSION['id_forummm']);//נקח רק 5 תגובות
              
                }
                else//לא עמוד התחלתי
                $res=$db->getAllReplayes2($startpoint,$limit,$_SESSION['id_forummm']);//5 תגובות כל פעם
                  
                ?>

                        <?php           
                      echo pagination($limit,$page,$_SESSION['c'],$url1);// הדפסה של העמודים

                     ?>


                        <!-- קישור לסקריפט בתחילת הדף -->
                        <div id="scroll"></div>

                        <?php

                          $res4=$db->getDataforum1($_SESSION['id_forummm']);
                        ?>
                        <div class="post">
                            <?php //הדפסת השאלה בתחילת העמוד
                            while($row = $res4->fetch(PDO::FETCH_ASSOC)) :?>
                            <h2 dir="rtl"> <?php echo $row['title']; ?></h2>

                            <p dir="rtl"><?php echo $row["contents"];?></p>

                            <?php endwhile; ?>
                        </div>

                    <?php 
     //הדפסת התגובות כל פעם 5 לפי העמוד
                        while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>


                        <!-- POST -->
                        <div class="post">
                            <div class="topwrap">


                                <div class="posttext pull-left">
                                    <!-- 
                                    <blockquote>
                                        <span class="original"></span>
                                  
                                    </blockquote>-->
                                    <h2 dir="rtl"> <?php echo "מספר תגובה:".$row['rep_id']; ?></h2>

                                    <p dir="rtl"><?php 
                                  
                                    echo $row['conteants']; ?></p>

                                    <?php
              $idteach=$row['user_id'];
                              
                           echo "<div class='pull-right'>";
                            echo "<td>".
                                    "<a href='personalpage.php?Teach_Id=$idteach'   class='btn btn-default'>לכניסה לפרטי המורה המגיב</a>"
                                    ."</td>";
                                echo "</tr>";
          
                                echo "</div>";
                        
                                ?>

                                    <?php if($row['user_id']==$_SESSION['userid']){
                                    $id=$row['rep_id'];
                                    $forid=$_GET['post_Id'];
                                    $a=0;
                                    echo "<div class='pull-right'>";
                                    echo "<td>".
   "<a href='editforum.php?Rep_Id=$id&Forum_Id=$forid&admin=$a'   class='btn btn-default'>לערוך תגובה</a>"
              ."</td>";
          echo "</tr>";
          echo "</div>";

                           
                            }
                                ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <?php 
                          $res7= $db-> getAllLike($row['rep_id']);//m3ra5 dename ll sherak
                          $res8= $db->getAllUnLike($row['rep_id']);//m3ra5 dename ll sherak
                                    $flag=1;
                                    
                                    while($row7 = $res7->fetch(PDO::FETCH_ASSOC)) {
                                    $_SESSION['s']=$row7['likes'];
                                $_SESSION['s'];
                                $flag=0;
                                        }

                                        if($flag==1)   
                                        $_SESSION['s']=0;

                                    $flag1=1;
                                    
                                    while($row8 = $res8->fetch(PDO::FETCH_ASSOC)) {
                                    $_SESSION['s1']=$row8['unlikes'];
                                $_SESSION['s1'];
                                $flag1=0;
                                        }

                                        if($flag1==1)   
                                        $_SESSION['s1']=0;
                                   

                         ?>
                            <div class="clearfix"></div>

                            <div class="postinfobot">

                                <div class="likeblock pull-right">
                                    <?php {
                                $id2=$row['rep_id'];
                              
                                $s= $_SESSION['s'];
                           
                             
                                echo   "<div class='like' > <a class='up'  public href='javascript:;' data-id='$id2'  name='like' id='like'  > <i class='fa fa-thumbs-o-up'> </i>$s</a></div> "; 
   
                            }?>
                                </div>


                                <div class="likeblock pull-right">
                                    <?php {

                                     $id2=$row['rep_id'];

                                         $s1= $_SESSION['s1'];  
                                 
                                        
                                            echo  "<div class='unlike' > <a class='down'  public href='javascript:;' data-id='$id2'  name='unlike' id='unlike'  > <i class='fa fa-thumbs-o-down'> </i>$s1</a></div> ";
                            
                                      }?>
                                </div>

                                <div dir="rtl" class="posted pull-left"><i class="fa fa-clock-o" dir="ltr">
                                    </i><?php  
                                      
                                    
                                    echo $row['created']; ?></div>



                                <div class="clearfix"></div>
                            </div>
                        </div><!-- POST -->

            
                        <?php endwhile; ?>
                        <!-- POST -->

                        <?php if($_SESSION['typeuser']==1): //אם זה מורה  הוא יכול להגיב?>

                        <div class="post">
                            <form action="#" class="form" method="post">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar4.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg"
                                                alt="" /><img src="images/icon5.jpg" alt="" /><img
                                                src="images/icon6.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div class="posttext pull-left">

                                        <div class="textwraper">

                                            <div class="postreply">תוכן</div>
                                            <textarea name="reply" id="reply" placeholder="תוכן של תגובה"></textarea>


                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfobot">

                                    <div class="pull-right postreply">
                                        <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                        <div class="pull-left">
                                            <input type="button" name="comment" id="comment" class="btn btn-primary"
                                                value="תגובה">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div><!-- POST -->
                        <?php endif; ?>

                    </div>

                    <div class="col-lg-4 col-md-4">
                        <!-- -->
                        
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                
                        <?php           
               echo pagination($limit,$page,$_SESSION['c'],$url1);


               ?>

                  
                        </div>
                        <div class="clearfix"></div>
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

    <?php
 if(isset($_GET['reply_Id'])){
    $_SESSION['rep_id'] =$_GET['reply_Id'];
    
    
     }
     ?>
</body>

</html>