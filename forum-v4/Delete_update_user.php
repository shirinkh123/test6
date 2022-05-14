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
    <link rel="stylesheet" type="text/css" href="css/table1.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

</head>
<!--טעינת דף לאמצע או למקום כלשהו -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		// Handler for .ready() called.
		$('html, body').animate({
			scrollTop: $('#scroll6').offset().top
		}, 'slow');
	});
</script>
<body class="newaccountpage">

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





        <div id="scroll6"></div>                                    

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">



                        <!-- POST -->
                        <div class="post" id="post2">
                            <form action="#" class="form newtopic" method="post">
                                <div class="postinfotop" >
                                    <h1>מחיקה/חסימה של משתמשים</h1>
                                </div>

                   


                                <!-- acc section -->
                                <div class="accsection">

                                    <div class="topwrap">

                                        <div class="posttext pull-right" dir="rtl">
                                            <div class="row">

                                                
                                                    <input class="pull-right" dir="rtl" type="text" name="id" id="id"
                                                        placeholder="תעודת זהות" class="form-control"
                                                     />
                                                    

                                            <div class="clearfix">
                                            </div>


                                          
                                                <select class="pull-right"  name="type" id="type" placeholder="סוג משתמש למחיקה"  required>
                                                <option value="1">סוג משתמש למחיקה</option>
                                                <option value="student">תלמיד</option>
                                                <option value="teacher">מורה</option>
									            <option value="Admin">מנהל</option>

                                                </select>

                                
                                        

                                                <div class="clearfix">
                                            </div>
                                                <select class="pull-right" name="blocking" id="blocking" placeholder="חסימה" required>
                                                <option value="1">חסימה/ביטול חסימה</option>

                                                <option value="block">חסימה</option>
                                                <option value="unblock">ביטול חסימה</option>
                                                </select>
                                                </div>
                                                <div class="clearfix">
                                            </div>
                                             
                                        <div class="pull-right"> <button type="button" name="del" id="del"
                                                class="btn btn-primary">מחק משתמש
                                            </button></div>
                                            <div class="clearfix">
                                            </div>
                                            <br />
                                            <div class="pull-right"> <button type="button" name="block" id="block"
                                                class="btn btn-primary">חסימה/ביטול חסימה של משתמש
                                            </button></div>
                                            <div class="clearfix">
                                            </div>
                                       <br/>
                                            <div class="pull-right">
											<form action="#" class="form newtopic" method="post">
            <select  class="pull-right" name="which" id="which" placeholder="סוג משתמש" required>

                                                <option value="students">תלמיד</option>
                                                <option value="teacher">מורה</option>
									            <option value="admin">מנהל</option>

                                                </select>
                                                <div class="clearfix">
                                            </div>
                                       <br/>
                                                <input  class="pull-right" type="submit" name="submitSelected" value="סוג משתמש לתצוגה" />

                                                </form>
                                                </div>
                                                <div class="clearfix">
                                            </div>
                                       <br/>
                                            <form action="#" method="post" class="form">
                                <div  class="pull-right txt">

                              

                                    <input name=sall id=sall class="pull-right" 
                                        placeholder="תוכן כללי">

                                  </div>
                                <div class="pull-right"><button class="btn btn-default" type="submit" id="searchall"
                                        name="searchall"><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>

           <!-- POST -->
           <div class="tab-content">
         
                                                </div>

            
                                            <?php 
      
      include("functionpageing.php");
      if(!isset($_GET['page']))
        $_SESSION['c']=0;
        if(empty($_SESSION['f'])){
            $_SESSION['f']=0;
           }
      $page  = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
            $limit = 5; //if you want to dispaly 10 records per page then you have to change here
             $startpoint = ($page * $limit) - $limit;
             $url1="Delete_update_user.php";
             
             if(isset($_POST['submitSelected'])&&($_POST['which']=="teacher")){
                $page=1;
                $limit = 5; //if you want to dispaly 10 records per page then you have to change here
                $startpoint = ($page * $limit) - $limit;
                    $_SESSION['f']=1;
 
       
                    $count=0;
                $res=$db->getAllTeach();
              
                $fn="firstnamet";
                $ln="lastnamet";
                $pt="phonet";
                $iduser="id_teachers";
                $mailuser="mailt";
                
                 while($row = $res->fetch(PDO::FETCH_ASSOC))
                 {
                  $count=$count+1;
               
                 }
                 $_SESSION['c']=$count;
                
          
              $res1=$db->getAllTeach3($startpoint,$limit);
            }

        
             if(isset($_POST['submitSelected'])&&($_POST['which']=="students")){
                $page=1;
                $limit = 5; //if you want to dispaly 10 records per page then you have to change here
                $startpoint = ($page * $limit) - $limit;
                    $_SESSION['f']=2;  
                    $count=0;
                $res=$db->getAllstudent();
            
                $fn="firstnames";
                $ln="lastnames";
                $pt="phones";
                $iduser="id_students";
                $mailuser="emails";
           
                
                 
             
                 while($row = $res->fetch(PDO::FETCH_ASSOC))
                 {
                  $count=$count+1;
               
                 }
                 $_SESSION['c']=$count;
                

                 $res1=$db->getAllstudent2($startpoint,$limit); 
        }




        if(isset($_POST['submitSelected'])&&($_POST['which']=="admin")){
            $page=1;
            $limit = 5; //if you want to dispaly 10 records per page then you have to change here
            $startpoint = ($page * $limit) - $limit;
                $_SESSION['f']=3;

   
                $count=0;
            $res=$db->getAlladmin();
        
            $iduser="ID_MANAGER";
            $mailuser="Mail";
            
             while($row = $res->fetch(PDO::FETCH_ASSOC))
             {
              $count=$count+1;
           
             }
             $_SESSION['c']=$count;
            
      
          $res1=$db->getAlladmin2($startpoint,$limit);
        }


            if($_SESSION['f']==1){
                $res1=$db->getAllTeach3($startpoint,$limit);
                $fn="firstnamet";
                $ln="lastnamet";
                $pt="phonet";
                $iduser="id_teachers";
                $mailuser="mailt";
                }
                if($_SESSION['f']==2){
               
                    $res1=$db->getAllstudent2($startpoint,$limit);  
                  $fn="firstnames";
                  $ln="lastnames";
                  $pt="phones";
                  $iduser="id_students";
                  $mailuser="emails";
             
                  }
                  if($_SESSION['f']==3){
               
                 
          $res1=$db->getAlladmin2($startpoint,$limit);
          $iduser="ID_MANAGER";
          $mailuser="Mail";
             
                  }


                  if(isset($_POST['searchall'])&&isset($_POST['sall'])&&($_SESSION['f']==2||$_SESSION['f']==1||$_SESSION['f']==3)){
              $page=1;
                $limit = 5; //if you want to dispaly 10 records per page then you have to change here
                $startpoint = ($page * $limit) - $limit;
                    
                 if($_SESSION['f']==1){
                    $_SESSION['orderbyprice']=0;
             
                    
                    $count=0;
                       
                    $res=$db->searchall($_POST['sall']);
                 while($row = $res->fetch(PDO::FETCH_ASSOC))
                 {
                  $count=$count+1;
               
                 }
                 $_SESSION['c']=$count;
                 $_SESSION['sall']=$_POST['sall'];
                 $res1=$db->searchall2($_SESSION['sall'],$startpoint,$limit,$_SESSION['orderbyprice']);
                 $fn="firstnamet";
                 $ln="lastnamet";
                 $pt="phonet";
                 $iduser="id_teachers";
                 $mailuser="mailt";
                 $_SESSION['f']=5;
     }



     if($_SESSION['f']==2){
     
      
               $count=0;
      

        $res=$db->searchallstu($_POST['sall']);
     while($row = $res->fetch(PDO::FETCH_ASSOC))
     {
      $count=$count+1;
   
     }
     $_SESSION['c']=$count;
     $_SESSION['sall']=$_POST['sall'];
     $res1=$db->searchallstu2($_SESSION['sall'],$startpoint,$limit);
     $fn="firstnames";
     $ln="lastnames";
     $pt="phones";
     $iduser="id_students";
     $mailuser="emails";
     $_SESSION['f']=6;
}



if($_SESSION['f']==3){

    $count=0;   
    $res=$db->searchalladmin($_POST['sall']);
 while($row = $res->fetch(PDO::FETCH_ASSOC))
 {
  $count=$count+1;

 }
 $_SESSION['c']=$count;
 $_SESSION['sall']=$_POST['sall'];
 $res1=$db->searchalladmin2($_SESSION['sall'],$startpoint,$limit);
 $iduser="ID_MANAGER";
 $mailuser="Mail";
 $_SESSION['f']=7;
}


                 }
                 else        if(isset($_POST['searchall'])&&isset($_POST['sall'])&&($_SESSION['f']!=2||$_SESSION['f']!=1||$_SESSION['f']!=3)){
                    echo "<script>
                    window.location.href='02topicindexAdmin.php?post_Id=$a';
                    alert('נא לבחור סוג משתמש להצגה ורק אז לחפש');
                    </script>";    
                    $_SESSION['f']=0;
                    }
                
                 if($_SESSION['f']==5){
                 $res1=$db->searchall2($_SESSION['sall'],$startpoint,$limit,$_SESSION['orderbyprice']);
                 $fn="firstnamet";
                 $ln="lastnamet";
                 $pt="phonet";
                 $iduser="id_teachers";
                 $mailuser="mailt";
                
                }
         if($_SESSION['f']==6){
             
                 $res1=$db->searchallstu2($_SESSION['sall'],$startpoint,$limit);
                 $fn="firstnames";
                 $ln="lastnames";
                 $pt="phones";
                 $iduser="id_students";
                 $mailuser="emails";
              
                }
                if($_SESSION['f']==7){
             
                    $res1=$db->searchalladmin2($_SESSION['sall'],$startpoint,$limit);
                    $iduser="ID_MANAGER";
                    $mailuser="Mail";
                    
                   }
            

?>
   
        

    

            <div class="pull-left">

                            <?php         
                      if($_SESSION['f']!=0)
               echo pagination($limit,$page,$_SESSION['c'],$url1);


               ?>
                        </div>
      

            <table style="width:100%">

                    <tr><?php if($_SESSION['f']!=3&&$_SESSION['f']!=7):?>
                        <th>שם</th>
                        <th>שם משפחה</th>
                        
                        <th>מספר טלפון</th>
                        <?php endif;?>
                        <th>תעודת זהות</th>
                   
                        <th>מייל</th>
                     

                    </tr>
                
                   
                    <?php 
                    if(isset($res1))
                    while($row = $res1->fetch(PDO::FETCH_ASSOC)) :?>
                  
                    <tr><?php 
                        if($_SESSION['f']!=3&&$_SESSION['f']!=7):?>
                        <td><?php echo $row[$fn];?></td>
                        <td><?php echo $row[$ln];?></td>
                        <td><?php echo $row[$pt];?></td>
                         <?php endif; ?>
                         <td><?php echo $row[$iduser];?></td>
                        <td><?php echo $row[$mailuser];?></td>
                     
                    </tr>
                    <?php endwhile; ?>
                   
    

              
    
                </table>

            
            
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