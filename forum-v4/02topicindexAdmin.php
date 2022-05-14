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
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="pagemanager.php">חזרה לעמוד
                                    ראשי</a></li>

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
                <div class="col-lg-8 breadcrumbf">
                    <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General
                        Discussion</a> <span class="diviver">&gt;</span> <a href="#">Topic Details</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">


                    <div class="paginationf">
                        <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="pull-left">
                            <ul class="paginationforum">
                                <li class="hidden-xs"><a href="#">1</a></li>
                                <li class="hidden-xs"><a href="#">2</a></li>
                                <li class="hidden-xs"><a href="#">3</a></li>
                                <li class="hidden-xs"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#" class="active">7</a></li>
                                <li><a href="#">8</a></li>
                                <li class="hidden-xs"><a href="#">9</a></li>
                                <li class="hidden-xs"><a href="#">10</a></li>
                                <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                <li><a href="#">1586</a></li>
                            </ul>
                        </div>
                        <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <!-- קישור לסקריפט בתחילת הדף -->
                    <div id="scroll"></div>

                    <?php
                          $res = $db->getAllReplys();
                          $res4=$db->getDataforum1($_SESSION['id_forummm']);
                        ?>
                    <div class="post">
                        <?php while($row = $res4->fetch(PDO::FETCH_ASSOC)) :?>
                        <h2 dir="rtl"> <?php echo $row['title']; ?></h2>

                        <p dir="rtl"><?php echo $row["contents"];?></p>

                        <?php endwhile; ?>
                    </div>


                    <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>

                    <?php   if($_SESSION['id_forummm']==$row['id_fourms']):?>


                    <!-- POST -->
                    <div class="post">
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                               

                            </div>
                            <div class="posttext pull-left">
                                <!-- 
                                    <blockquote>
                                        <span class="original"></span>
                                  
                                    </blockquote>-->
                                <h2 dir="rtl"> <?php echo "מספר תגובה:".$row['rep_id']; ?></h2>
                                <?php      $res1=$db->getIdUser($row['user_id']);?>

                                <?php while($row1 = $res1->fetch(PDO::FETCH_ASSOC)) :?>
                                <h2 dir="rtl">
                                    <?php echo $row1['firstnamet']." ".$row1['lastnamet']." ". $row['user_id']; ?></h2>
                                <?php endwhile; ?>

                                <p dir="rtl"><?php 
                                  
                                    echo $row['conteants']; ?></p>




                                <?php {
    $admin=1;
    
              $id=$row['rep_id'];
             $forid=$_GET['post_Id'];
             echo "<div  class='pull-right' >" ;            
              echo "<td>".
              "<a href='editforum.php?Rep_Id=$id&Forum_Id=$forid&admin=$admin'   class='btn btn-default'>לערוך תגובה</a>"
              ."</td>";
          echo "</tr>";
          echo "</div>" ; 
          $admin=0;
                           
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


                        <div class="postinfobot">

                            <div class="likeblock pull-right">
                                <?php {
                                $id2=$row['rep_id'];
                              
                                $s= $_SESSION['s'];
                           
                                echo "<br>";
                                echo   "<div class='like' > <a class='up'  public href='javascript:;' data-id='$id2'  name='like' id='like'  > <i class='fa fa-thumbs-o-up'> </i>$s</a></div> "; 
   
                            }?>
                            </div>


                            <div class="likeblock pull-right">
                                <?php {

                                     $id2=$row['rep_id'];

                                         $s1= $_SESSION['s1'];  
                                 
                                         echo "<br>";
                                            echo  "<div class='unlike' > <a class='down'  public href='javascript:;' data-id='$id2'  name='unlike' id='unlike'  > <i class='fa fa-thumbs-o-down'> </i>$s1</a></div> ";
                            
                                      }?>
                            </div>
                            <div class="prev pull-left">
                                <a href="#"><i class="fa fa-reply"></i></a>
                            </div>

                            <div dir="rtl" class="posted pull-left"><i class="fa fa-clock-o" dir="ltr">
                                </i><?php  
                                      
                                    
                                    echo $row['created']; ?></div>

                            <div class="next pull-left">
                                <a href="#"><i class="fa fa-share"></i></a>

                                <a href="#"><i class="fa fa-flag"></i></a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div><!-- POST -->

                    <?php endif; ?>
                    <?php endwhile; ?>
                    <!-- POST -->




                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i
                                        class="fa fa-angle-right"></i></a>
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