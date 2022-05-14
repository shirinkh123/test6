<?php
require_once "get/get.php";//include
require_once "sentmessage.php";
require_once "backup.php";
require_once "login/logClass.php";
$db = new get();//meshtane mn sog dbConnection
$backup=new backup();
$log=new  logClass();
$idbackup="1233456";
$date=$log->datebackup($idbackup,$db);
$date = strtotime(date("Y-m-d", strtotime($date)) . " +7 days");
$date = date("Y-m-d",$date);
$today=date("Y-m-d");
if (strcmp($date, $today)<= 0){
$log->updateBackup($idbackup,$db,$today);
$backup->backupDatabaseTables($db);
}

?>



<!--סוף-->

<!DOCTYPE html>
<html lang="he">

<head>

	<title>ללמוד חכם</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/templatemo-style.css">



</head>

<body>
	<!-- PRE LOADER -->
	<section class="preloader">
		<div class="spinner">
			<span class="spinner-rotate"></span>
		</div>
	</section>


	<!-- MENU -->
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

			<!-- MENU LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">

					<li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form3">הרשמה
							כתלמיד</a></li>
					<li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form2">הרשמה
							כמורה</a></li>
					<li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">התחברות</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-nav-right">
					<li class="pull-right"><a href="#home">דף הבית</a></li>
					<li class="pull-right"><a href="#about">עלינו</a></li>
					<li class="pull-right"><a href="#blog">יעניין אותכם לדעת</a></li>
					<li class="pull-right"><a href="#contact">יצירת קשר</a></li>
				</ul>
			</div>
		</div>
	</section>


	<!-- HOME -->
	<section id="home" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="home-video">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="https://www.youtube.com/embed/y3135coGj30" frameborder="0"
								allowfullscreen></iframe>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="home-info">
						<h1>כאן כולנו לומדים חכם</h1>
						<a href="#about" class="btn section-btn smoothScroll">?מעוניין ליצור חשבון</a>
						<span>
							(+972) צרו קשר 054-213-9999
							<small>עבור כל שאלה</small>
						</span>
					</div>
				</div>


			</div>
		</div>
	</section>


	<!-- ABOUT -->
	<section id="about" data-stellar-background-ratio="0.5">

		
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-12">
					<div class="about-image">
						<img src="images/pic7.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="about-info skill-thumb">


					</div>
				</div>

				<div class="col-md-5 col-sm-6">
					<div class="about-info">
						<div class="section-title">
							<h2>עלינו</h2>
							<span class="line-bar">...</span>
						</div>
						<p dir="rtl">מתקשים בלימודי תוכנה? נמאס לכם לבזבז את הזמן בחיפוש אחרי מורים שמתאימים לכם?
						</p>
						<p dir="rtl"> הגעתם למקום הנכון שיעזור לכם לשפר את ההישגים שלכם תוך מתן דגש על חיפוש יעיל ונוח
							אחר מורים שיכולים להתאים לכם.</p>
						<p dir="rtl"> לשם כך הקמנו את אתרינו ללמוד חכם- אתר המאפשר לכל תלמיד סטודנט מתחום התוכנה לחפש
							מורים פרטיים לפי הקרטריונים שלו באמצעות אפשרויות סינון רבות כדי לאפשר בחירה מוצלחת ומציאת
							המורה המתאים.</p>
						<p dir="rtl">מורים?<br> בואו להנות מעמוד אישי חינמי שיאפשר לכם להציג את שרותיכם . תוכלו לשווק את
							עצמכם תוך כדי שיתוף סיפורי הצלחה, נסיון בתחום ,תעריף שעתי ועוד. </p>
						<p dir="rtl">תלמידים?<br> מתקשים בפתרון עבודות הבית? באתרינו תוכלו להנות מפורום שאלות,שם תקבלו
							מענה ע"י מורי האתר ותוכלו אף לדרג ולקבוע מי מהתגובות הייתה טובה ומובילה.</p>
						<p dir="rtl">אז למה אתם מחכים תתחילו ללמוד חכם!!</p>
					</div>
				</div>



			</div>
		</div>
	</section>


	<!-- BLOG -->
	<section id="blog" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<div class="section-title">
						<h2>יעניין אותכם לדעת</h2>
						<span class="line-bar">...</span>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					<!-- BLOG THUMB -->
					<div class="media blog-thumb">
						<div class="media-object media-left">
							<a href="blog-detail.html"><img src="images/blog-image1.jpg" class="img-responsive"
									alt=""></a>
						</div>
						<div class="media-body blog-info">
							<small dir="rtl"><i class="fa fa-clock-o"></i> 25 במרץ 2019</small>
							<h3 dir="rtl"><a href="blog-detail.php">איך לשפר את ההשגים?</a></h3>
							<p dir="rtl">זוכרים את הרגעים שבהם ניסיתם להתכונן למבחן חשוב ולהפנים כמה שיותר מידע, אבל
								הראש לא פשוט קולט.</p>
							<a dir="rtl" href="blog-detail.php" class="btn section-btn">קראו עוד</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					<!-- BLOG THUMB -->
					<div class="media blog-thumb">
						<div class="media-object media-left">
							<a href="blog-detail2.php"><img src="images/blog-image2.jpg" class="img-responsive"
									alt=""></a>
						</div>
						<div class="media-body blog-info">
							<small dir="rtl"><i class="fa fa-clock-o"></i> 26 במרץ 2019</small>
							<h3 dir="rtl"><a href="blog-detail2.php">הקשר בין התעמלות לבין הפרעת קשב וריכוז
									והיפראקטיביות</a></h3>
							<p dir="rtl">נמצא שההפרעה נפוצה מאד וכ-5%-10% מהאוכלוסייה סובלים ממנה.</p>
							<a href="blog-detail2.php" class="btn section-btn">קראו עוד</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- CONTACT -->
	<section id="contact" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<div class="section-title">
						<h2>צרו קשר</h2>
						<span class="line-bar">...</span>
					</div>
				</div>

				<div class="col-md-8 col-sm-8">

					<!-- CONTACT FORM HERE -->
					<form>
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" placeholder="שם מלא" id="cf-name" name="cf-name"
								required="">
						</div>

						<div class="col-md-6 col-sm-6">
							<input type="email" class="form-control" placeholder="אימייל" id="cf-email" name="cf-email"
								required="">
						</div>

						<div class="col-md-6 col-sm-6">
							<input type="number" class="form-control" placeholder="מספר נייד" id="cf-number"
								name="cf-number" required="">
						</div>

						<div dir="rtl" class="col-md-6 col-sm-6">
							<select dir="rtl" class="spinner-rotate" class="form-control" name="cf-budgets1"
								id="cf-budgets1">
								<option dir="rtl" disabled>נושא ההודעה</option>
								<option dir="rtl">שאלה כללית</option>
								<option dir="rtl">נתקלתי בבעיה טכנית</option>
								<option dir="rtl">אני רוצה לדווח על מקרה</option>
							</select>
						</div>


						<div class="col-md-12 col-sm-12">
							<textarea class="form-control" rows="6" placeholder="תוכן הודעה" id="cf-message"
								name="cf-message" required=""></textarea>
						</div>

						<div class="col-md-4 col-sm-12">

							<span class="spinner-rotate"><input type="button" class="form-control" name="submit0"
									id="submit0" value="שלח הודעה"></span>




						</div>
						<span id="err4"></span>
					</form>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="a">
						<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.833305093862!2d34.99016631426804!3d32.82318148893918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151dbbcb70828a43%3A0x25e49227049680a!2sBen+Gurion!5e0!3m2!1sen!2sth!4v1556524447518!5m2!1sen!2sth"
							width="400" height="250" fullscreen></iframe>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- MODAL -->
	<section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content modal-popup">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">

							<div class="col-md-12 col-sm-12">
								<div class="modal-title">
									<h2>התחברות למערכת</h2>
								</div>

								<!-- NAV TABS -->
								<ul class="nav nav-tabs" role="tablist">

									<li><a href="#sign_in" aria-controls="sign_in" role="tab"
											data-toggle="tab">התחברות</a></li>
								</ul>

								<!-- TAB PANES -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="sign_up">
										<form>
											<input type="email" class="form-control" name="mail" id="mail"
												placeholder="תעודת זהות" required>
											<input type="password" class="form-control" name="pass" id="pass"
												placeholder="סיסמא" required>
											<select name="stud" id="stud" placeholder="סוג משתמש" required>
												<option value="student">תלמיד</option>
												<option value="teacher">מורה</option>
												<option value="Admin">מנהל</option>

											</select>
											<input type="button" class="form-control" name="sub" id="sub" value="כניסה">

										</form>
										<span id="err3"></span>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content modal-popup">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" id="modal1" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body" >
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="modal-title">
									<h2>הרשמה כמורה</h2>
								</div>

								<!-- NAV TABS -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab"
											data-toggle="tab">צור משתמש מורה</a></li>
								</ul>

								<!-- TAB PANES -->
								<div class="tab-content" >
									<div role="tabpanel" class="tab-pane fade in active" id="sign_up">
										<form>
											<input type="text" class="form-control" name="name" id="name"
												placeholder="שם פרטי" required>
											<input type="text" class="form-control" name="name1" id="name1"
												placeholder="שם משפחה" required>
											<input type="text" class="form-control" name="name2" id="name2"
												placeholder="תעודת זהות" required>
											<input type="telephone" class="form-control" name="telephone" id="telephone"
												placeholder="מספר נייד" required>
											<input type="email" class="form-control" name="email" id="email"
												placeholder="אימייל" required>

											<?php
                                          $res = $db->geteducation();
                                              ?>
											<select dir="rtl" class="form-control" name="cf-bdsa" id="cf-bdsa"
												placeholder="השכלה">
												<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
												<option dir="rtl" style="color:black" value="<?php echo $row["Id_ed"];?>">
													<?php echo $row['educ']; ?></option>
												<?php endwhile; ?>
											</select>

											<?php
                                          $res = $db->getAllCities();//m3ra5 dename ll sherak
                                              ?>
											:ערים רלוונטים<select dir="rtl" class="form-control" name="cf-budgets[]"
												id="cf-budgets" multiple>
												<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
												<option value="<?php echo $row["id_c"];?>"><?php echo $row['name_c']; ?>
												</option>
												<?php endwhile; ?>
											</select>
											<?php
                                     $res = $db->getAllKorses();//m3ra5 dename ll sherak
                                     ?>
											<input type="number" class="form-control" name="name45" id="name45"
												placeholder="מחירון" min=1 max=600 required> :קורסים רלוונטים<select
												dir="rtl" class="form-control" name="cf-kors[]" id="courses" multiple>
												<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
												<option value="<?php echo $row["id_sub"];?>">
													<?php echo $row['name_sub']; ?></option>
												<?php endwhile; ?>
											</select>


											<input type="password" class="form-control" name="password" id="password"
												placeholder="סיסמא" required>
											<input type="button" class="form-control" name="submit1" id="submit1"
												value="שלח">
											<span id="err"></span>
										</form>

									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="modal fade" id="modal-form3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content modal-popup">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">

							<div class="col-md-12 col-sm-12">
								<div class="modal-title">
									<h2>הרשמה כתלמיד</h2>
								</div>

								<!-- NAV TABS -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab"
											data-toggle="tab">צור משתמש תלמיד</a></li>
								</ul>

								<!-- TAB PANES -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="sign_up">
										<form>
											<input type="text" class="form-control" name="name123" id="name123"
												placeholder="שם פרטי" required>
											<input type="text" class="form-control" name="namel" id="namel"
												placeholder="שם משפחה" required>
											<input type="text" class="form-control" name="zehot" id="zehot"
												placeholder="תעודת זהות" required>
											<input type="telephone" class="form-control" name="telephone12"
												id="telephone12" placeholder="מספר נייד" required>
											<input type="email" class="form-control" name="email12" id="email12"
												placeholder="אימייל" required>
											<?php
                                          $res = $db->getAllCities();//m3ra5 dename ll sherak
                                              ?>
											:ערים רלוונטים<select dir="rtl" class="form-control" name="cf-budge[]"
												id="cf-budge" multiple>
												<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
												<option value="<?php echo $row["id_c"];?>"><?php echo $row['name_c']; ?>
												</option>
												<?php endwhile; ?>
											</select>

											<?php
                                     $res = $db->getAllKorses();//m3ra5 dename ll sherak
                                     ?>

											:קורסים רלוונטים<select dir="rtl" class="form-control" name="cf-kors1[]"
												id="cf-kors1" multiple>
												<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
												<option value="<?php echo $row["id_sub"];?>">
													<?php echo $row['name_sub']; ?></option>
												<?php endwhile; ?>
											</select>
											<?php
                                          $res = $db->geteducation();
                                              ?>
											<select dir="rtl" class="form-control" name="cf-budgets12" id="cf-budgets12"
												placeholder="השכלה">
												<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
												<option dir="rtl" style="color:black" value="<?php echo $row["Id_ed"];?>">
													<?php echo $row['educ']; ?></option>
												<?php endwhile; ?>
											</select>
											<input type="password" class="form-control" name="password12"
												id="password12" placeholder="סיסמא" required>
											<input type="button" class="form-control" name="submit2" id="submit2"
												value="שלח">

										</form>
										<span id="err1"></span>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-5 col-sm-12">
					<div class="footer-thumb">
						<h2>ללמוד חכם</h2>
						<p dir="rtl">ללמוד חכם עם המורים המובילים בתחום התוכנה!</p>
					</div>
				</div>

				<div class="col-md-2 col-sm-4">
					<div class="footer-thumb">
						<h2>באתר</h2>
						<ul class="footer-link">
							<li dir="rtl"><a>פורום</a></li>
							<li dir="rtl"><a>צאט</a></li>
							<li dir="rtl"><a>עמוד אישי</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-sm-4">
					<div class="footer-link">
						<h2>תקנון האתר</h2>

						<li dir="rtl"><a href="roles.php">תנאי שימוש</a></li>
					</div>
				</div>

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
								<li><a href="https://twitter.com" class="fa fa-twitter"></a></li>
								<li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.0.js"></script>
	<script src="js/sign.js"></script>
	<script src="js/signs.js"></script>
	<script src="js/message.js"></script>
	<script src="js/login.js"></script>


</body>

</html>

