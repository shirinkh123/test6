<?php
require 'forumconection.php';
 $_SESSION['userid'];
?>
<!DOCTYPE html public="02_topic.php?reply_Id">

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
<!--טעינת דף לאמצע או למקום כלשהו -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		// Handler for .ready() called.
		$('html, body').animate({
			scrollTop: $('#scroll8').offset().top
		}, 'slow');
	});
</script>
<body>

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

<!-- קישור לסקריפט בתחילת הדף -->
<div id="scroll8"></div>
    <div class="container-fluid">
        <div class="headernav">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                        <div class="dropdown">
                         
                        </div>
                    </div>
                    <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                    <?php if(!isset($_GET['page'])):?>
                        <div class="wrap">
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt" >
                                        <?php
                                     $res = $db->getAllKorses();//m3ra5 dename ll sherak
                                     ?>

							<select  class="form-control" name="categoriesearch" id="categoriesearch" placeholder="תוכן קטגוריה" >
                       <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                            <option  value="<?php echo $row["id_sub"];?>"><?php echo $row['name_sub']; ?></option>
                        <?php endwhile; ?>
                               </select></div>
                                <div class="pull-right"><button class="btn btn-default" type="submit" id="search"
                                        name="search" ><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
    <?php endif; ?>
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
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="index2Admin.php">חזרה לדף ראשי של שאלות</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="pagemanager.php">חזרה לעמוד ראשי</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-3" href="chatsof/logout.php">יציאה לדף הבית</a></li>
                            
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
      
      include("functionpageing.php");
      if(empty($_SESSION['count'])){
      $_SESSION['count']=0;
     }
     if(empty($_SESSION['f'])){
       $_SESSION['f']=0;
      }
     
      $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
             $limit = 5; //if you want to dispaly 10 records per page then you have to change here
             $startpoint = ($page * $limit) - $limit;
             $url1="index2Admin.php";

                  if(isset($_POST['search']))
                  {  
                      $_SESSION['pageflag']=0;
                      $count=0;
     $res=$db->page2($_POST['categoriesearch']);
          while($row = $res->fetch(PDO::FETCH_ASSOC))
                     {
                      $count=$count+1;
                   
                     }
                     $res=$db->getQustionCtagorySearch($_POST['categoriesearch'],$startpoint,$limit);
                   $_SESSION['c']=$count;
                   $_SESSION['f']=1;
                   $_SESSION['cat']=$_POST['categoriesearch'];
    
                  }
                  else
                  { 
                      if(!isset($_GET['page'])){
                      $count=0;
                   
                   $res=$db->page();
                   while($row = $res->fetch(PDO::FETCH_ASSOC))
                   {
                    $count=$count+1;
                 
                   }
                   $res = $res=$db->pageing($startpoint,$limit);
                   $_SESSION['c']=$count;
                   $_SESSION['f']=2;
               }
      
           }
              

if( $_SESSION['f']==1)
$res=$db->getQustionCtagorySearch($_SESSION['cat'],$startpoint,$limit);
if( $_SESSION['f']==2)
$res = $res=$db->pageing($startpoint,$limit);



?>

<section class="content">

<div class="container">
   <div class="row">

       <div class="col-lg-8 col-xs-12 col-md-8">
           <div class="pull-left"><a href="#"><i></i></a></div>
           <div class="pull-left">

               <?php           
               echo pagination($limit,$page,$_SESSION['c'],$url1);


               ?>
           </div>
           <div class="pull-left"><a href="#"><i></i></a>
           </div>
           <div class="clearfix"></div>
       </div>
   </div>
</div>




            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <!-- POST -->


                        <!-- POST -->
                        <div class="post">


                            <div class="clearfix"></div>
                        </div><!-- POST -->






                        <!-- POST -->

           


                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                    
                        <div class="post">
                            <div class="wrap-ut pull-left">
                                <div class="userinfo pull-left">
                                    <div class="avatar">

                                    </div>


                                </div>
                                <div class="posttext pull-left">
                                <h2 dir="rtl"> <?php echo "מספר מודעה:".$row['id_forum']; ?></h2>
                                    <h2 dir="rtl"> <?php echo $row['title']; ?></h2>

                                    <p dir="rtl"><?php echo $row["contents"];?></p>
                                    <?php {

                                $id=$row['id_forum'];
                                $_SESSION['varname'] =$row['id_forum'];
                                echo"<div class=' pull-right'>";
                                 echo "<td>".
                                    "<a href='02topicindexAdmin.php?post_Id=$id' class='btn btn-default'>לכניסה לפוסט לחץ כאן</a>"
                                    ."</td>";
                                echo "</tr>";
                                echo"</div>";
	
                            }?>

<?php
{                      $b=1;
                                $idforum=$row['id_forum'];
                                $_SESSION['varname'] =$row['id_forum'];
                                echo"<div class=' pull-right'>";
                                 echo "<td>".
                                
                                    "<a href='updateforum.php?idforum=$idforum&admin=$b' class='btn btn-default'>עריכה</a>"
                                    ."</td>";
                                echo "</tr>";
                                echo"</div>";
                                $b=0;
                                
	
                            }?>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="postinfo pull-left">
                         
                                <div class="comments">
                                    <div class="commentbg">

                                    <?php
                                          $res2 = $db->getFirstNameStudent($row['user_id']);
                                        ?>
                                        <?php while($row1 = $res2->fetch(PDO::FETCH_ASSOC)) :?>


                                        
                                        <p dir="rtl"><?php echo  "שם מלא"."<br>".$row1["firstnames"]."<br>".$row1["lastnames"];?></p>
                                        </div>

                                </div>
                                <div class="comments">
                                    <div class="commentbg">
                                        <p dir="rtl"><?php echo "ת.ז"."<br>". $row1["id_students"];?></p>
                                        <?php endwhile; ?>
                                        <br>


                                        <div class="mark"></div>
                                    </div>

                                </div>


                                <div dir="rtl" class="time"><i class="fa fa-clock-o"></i> <?php echo $row['created']; ?>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div><!-- POST -->

                        <?php endwhile; ?>

                    </div>















            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xs-12">
                        <div class="pull-left"><a href="#"><i></i></a></div>
                        <div class="pull-left">
                            <?php      
                                 
                        
                              echo pagination($limit,$page,$_SESSION['c'],$url1);


                            ?>
                        </div>
                        <div class="pull-left"><a href="#"><i></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  

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


    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>


    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    


    <!-- END REVOLUTION SLIDER -->
</body>

</html>