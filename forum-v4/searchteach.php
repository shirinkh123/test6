<?php
require 'forumconection.php';
 $_SESSION['userid'];
?>

<!DOCTYPE html public="02_topic.php?reply_Id">

<html lang="en">

<head>
<!--טעינת דף לאמצע או למקום כלשהו -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#scroll3').offset().top
    }, 'slow');
});

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ללמוד חכם</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
   




    <!-- fonts -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css"  href="css/table1.css" media="screen" >

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

</head>

<body>


 
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

    </section>


    <div class="container-fluid">
        <div class="headernav">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 search  col-md-3">
                        <div class="wrap">
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt">

                                    <?php
                                          $res = $db->getAllCities();
                             
                                              ?>

                                    <select class="form-control" name="citysorder" id="citysorder"
                                        placeholder="תוכן קטגוריה">

                                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                                        <option value="<?php echo $row["id_c"];?>">
                                            <?php echo $row['name_c']; ?></option> <?php endwhile; ?>
                                    </select></div>
                                <div class="pull-right"><button class="btn btn-default" type="submit" id="searchcity"
                                        name="searchcity"><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>


                    <div class="col-lg-4 search  col-md-3">
                        <div class="wrap">
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt">

                                    <?php
                                     $res = $db->getAllKorses();//m3ra5 dename ll sherak
                                     ?>

                                    <select class="form-control" name="categoriesearch2" id="categoriesearch2"
                                        placeholder="תוכן קטגוריה">

                                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                                        <option value="<?php echo $row["id_sub"];?>"><?php echo $row['name_sub']; ?>
                                        </option>
                                        <?php endwhile; ?>
                                    </select></div>
                                <div class="pull-right"><button class="btn btn-default" type="submit" id="searchkors"
                                        name="searchkors"><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">




                        <div class="avatar pull-left dropdown">
                            <a data-toggle="dropdown" href="#"><img src="images/avatar.jpg" alt="" /></a> <b
                                class="caret"></b>
                            <div class="status green">&nbsp;</div>
                            <ul class="dropdown-menu" role="menu">
                                <?php 
                                if($_SESSION['typeuser']==0):?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="pagestudentone.php">חזרה
                                        לדף ראשי</a></li>
                                <?php endif;?>
                                <?php if($_SESSION['typeuser']==1):?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="pageteacherone.php">חזרה
                                        לדף ראשי</a></li>
                                <?php endif;?>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="chatsof/logout.php">יציאה
                                        לדף הבית</a></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
<br/>
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
             $url1="searchteach.php";
            if(empty($_SESSION['orderbyprice']))
             $_SESSION['orderbyprice']=0;
   
             if(isset($_POST['priceorder']))

             $_SESSION['orderbyprice']=1;
                   if(!isset($_GET['page'])){
                
                      $count=0;
                   
                      $res=$db->getAllTeach();
                   while($row = $res->fetch(PDO::FETCH_ASSOC))
                   {
                    $count=$count+1;
                 
                   }
                   $_SESSION['c']=$count;
                   $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);
                   $_SESSION['f']=1;
                }
                  
           
        
            
              if(isset($_POST['searchkors']))
              {      
                $_SESSION['orderbyprice']=0;  
                $res1=$db->getAllTeach();
                $_SESSION['cate']=$_POST['categoriesearch2'];
                $res3=$db->getIdTeachSub($_SESSION['cate']);
            
                $count=0;
                while($row3= $res3->fetch(PDO::FETCH_ASSOC))
                while($row = $res1->fetch(PDO::FETCH_ASSOC))
                {if($row['id_teachers']==$row3['subject_id'])
                 $count+=1;
                 
                }
              
                  $res3=$db->getIdTeachSub($_SESSION['cate']);
                  $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);
              
                $_SESSION['c']=$count;
                
                $_SESSION['f']=2;
              }


              if(isset($_POST['searchcity']))
              { $_SESSION['orderbyprice']=0; 
                $res1=$db->getAllTeach();
                $_SESSION['citysor']=$_POST['citysorder'];
                $res4=$db->getIdTeachCit($_SESSION['citysor']);
                $count=0;
                while($row = $res1->fetch(PDO::FETCH_ASSOC))
                while($row4 = $res4->fetch(PDO::FETCH_ASSOC))
                {if($row['id_teachers']==$row4['Id_te'])
                 $count=$count+1;
              
                }
                $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);
                $res4=$db->getIdTeachCit($_SESSION['citysor']);
                $_SESSION['c']=$count;
                $_SESSION['f']=3;
              }     
   
              if($_SESSION['f']==1){
              $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);
              echo $_SESSION['orderbyprice'];
              }
              if($_SESSION['f']==2){
                $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);
              $res3=$db->getIdTeachSub($_SESSION['cate']);}
            
              if($_SESSION['f']==3){
                $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);
              $res4=$db->getIdTeachCit($_SESSION['citysor']);}
            
           
   
             
  
                 if($_SESSION['f']==4)
                 $res1=$db->getTeachPrice($startpoint,$limit);

             if(isset($_POST['searchall'])&&isset($_POST['sall'])){
                $_SESSION['f']=5;
                 $page =1;
             $limit = 5; //if you want to dispaly 10 records per page then you have to change here
             $startpoint = ($page * $limit) - $limit;
                
                $count=0;
                   
                $res=$db->searchall($_POST['sall']);
             while($row = $res->fetch(PDO::FETCH_ASSOC))
             {
              $count=$count+1;
           
             }
             $_SESSION['c']=$count;
             $_SESSION['sall']=$_POST['sall'];
             $res1=$db->searchall2($_SESSION['sall'],$startpoint,$limit,$_SESSION['orderbyprice']);
        
           
             }
    
             if($_SESSION['f']==5)
             $res1=$db->searchall2($_SESSION['sall'],$startpoint,$limit,$_SESSION['orderbyprice']);

?>
  
<div id="scroll3"></div>
        <section class="content">

            <div class="container">
                <div class="row">
                <div class="col-lg-14 search ">
                        <div  class="wrap">
                            <form action="#" method="post" class="form">
                                <div  class="pull-right txt">

                                    <?php
                                          $res = $db->getAllCities();
                             
                                              ?>

                                    <input name=sall id=sall class="pull-right" 
                                        placeholder="תוכן כללי">

                                  </div>
                                <div class="pull-right"><button class="btn btn-default" type="submit" id="searchall"
                                        name="searchall"><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        </div>
                        

                     
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
          
            <!-- POST -->
            <div class="table-responsive">
            <table style="width:100%" class="teachers table table-hover">

                    <tr>
                        <th>שם</th>
                        <th>שם משפחה</th>
                        <th>מספר טלפון</th>
                        <th>מייל</th>
                        <th>מחיר לשעה</th>
                        <th>כניסה לעמוד אישי של המורה</th>


                    </tr>
                

                    <?php 
                    while($row = $res1->fetch(PDO::FETCH_ASSOC)) :?>
                               
                    <?php if(isset($res3))
                   while($row3 = $res3->fetch(PDO::FETCH_ASSOC)) :?>
                    <?php if($row['id_teachers']==$row3['subject_id']):?>
                    <!-- POST -->
       
                    <tr>
                        <td><?php echo $row["firstnamet"];?></td>
                        <td><?php echo $row["lastnamet"];?></td>
                        <td><?php echo $row["phonet"];?></td>
                        <td><?php echo $row["mailt"];?></td>
                        <td><?php echo "&#8362;". $row["price"];?></td>
                        <td><?php $idteach=$row['id_teachers'];
                              echo 
                                      "<a href='personalpage.php?Teach_Id=$idteach'   class='btn btn-default'>לכניסה לפרטי המורה</a>";
                                 
                                  ?> </td>
                    </tr>

                    <?php endif; ?>

                    <?php endwhile; ?>
                    <?php endwhile; ?>


                    <?php $res1=$db->getAllTeach2($startpoint,$limit,$_SESSION['orderbyprice']);?>

                    <?php 
              
                    while($row = $res1->fetch(PDO::FETCH_ASSOC)) :?>
                    <?php         if(isset($res4))
                      $res4=$db->getIdTeachCit($_SESSION['citysor']);?>
                    <?php if(isset($res4))

                   while($row4 = $res4->fetch(PDO::FETCH_ASSOC)) :?>
                    <?php if($row['id_teachers']==$row4['Id_te']):?>
                    <!-- POST -->

                    <tr>
                        <td><?php echo $row["firstnamet"];?></td>
                        <td><?php echo $row["lastnamet"];?></td>
                        <td><?php echo $row["phonet"];?></td>
                        <td><?php echo $row["mailt"];?></td>
                        <td><?php echo "&#8362;". $row["price"];?></td>
                        <td><?php $idteach=$row['id_teachers'];
                              echo 
                                      "<a href='personalpage.php?Teach_Id=$idteach'   class='btn btn-default'>לכניסה לפרטי המורה </a>";
                                 
                                  ?> </td>
                    </tr>

                    <?php endif; ?>

                    <?php endwhile; ?>




                    <?php if (!isset($_POST['searchkors'])&&!isset($_POST['searchcity'])): ?>
                    <tr>
                        <td><?php echo $row["firstnamet"];?></td>
                        <td><?php echo $row["lastnamet"];?></td>
                        <td><?php echo $row["phonet"];?></td>
                        <td><?php echo $row["mailt"];?></td>
                        <td><?php echo "&#8362;". $row["price"];?></td>
                        <td><?php $idteach=$row['id_teachers'];
                              echo 
                                      "<a href='personalpage.php?Teach_Id=$idteach'   class='btn btn-default'>לכניסה לפרטי המורה </a>";
                                 
                                  ?> </td>
                    </tr>
                    <?php endif; ?>




                    <?php endwhile; ?>
                    <?php if($_SESSION['c']==0):?>
                    <div class="pull-right"> <?php echo "לא קיימות תוצאות חיפוש";?> </div>
                    <?php endif; ?>


           
                </table>

            </div>

            <div class="clearfix"></div>






            <!-- POST -->






            <form action="#" method="post" class="form">

                <div class="postinfobot">



                    <div class="pull-right postreply">
                        <div> <input class="btn btn-default" type="submit" name="priceorder" id="priceorder"
                                value="מיון לפי מחיר">

                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
    </div><!-- POST -->



    </div>
    </div>
    </section>

    </div>

    </form>












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