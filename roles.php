<?php
require_once "get/get.php";//include
$db = new get();//meshtane mn sog dbConnection
?>
	<!DOCTYPE html>
	<html lang="he">

	<head>
<!--טעינת דף לאמצע או למקום כלשהו -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#scroll2').offset().top
    }, 'slow');
});

</script>
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
					<a href="index.php" class="navbar-brand">SMART</a>
				</div>

				<!-- MENU LINKS -->
		
					<ul class="nav navbar-nav navbar-nav-right">
						
						<li><a href="index.php" class="smoothScroll">דף הבית</a></li>

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
							</div>
						</div>
					</div>

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


		<!-- ABOUT -->
		<section id="about" data-stellar-background-ratio="0.5" >
		<div id="scroll2"></div>
			<h1 dir="rtl">תנאי שימוש באתר "ללמוד חכם"</h1>
			<h3 dir="rtl"> תקנון השימוש באתר הנ"ל נכתב בלשון זכר אך האמור בו מתייחס לנשים וגברים כאחד.</h3>
			<ol dir="rtl">
				<li>
					<h4>קדימון</h4>
					<p>אתר "ללמוד חכם" המשתמש כאתר (המקשר בין מורים פרטיים מתחום התוכנה לתלמידים פוטנציאליים) ייצוגי עבור "ללמוד חכם" והנך מוזמן לקחת בו חלק בכפוף להסכמתך לתנאי השימוש אשר יפורטו להלן</p>
					<p>בנוסף השימוש באתר זה על כל תכניו והשירותים המוצעים בו, הורדות של קבצים, מדיה כגון תמונות וסרטונים והתכנים השונים המוצעים לקהל המבקרים עשויים להשתנות מעת לעת או בהתאם לסוג התוכן.</p>
					<p>הנהלת האתר שומרת לעצמה הזכות לעדכן את תנאי השימוש המוצגים להלן מעת לעת וללא התראה או אזכור מיוחד בערוצי האתר השונים.</p>
				</li>
				<li>
					<h4>קניין רוחני</h4>
					<p>האתר כמו גם כל המידע שבו לרבות עיצוב האתר, קוד האתר, קבצי מדיה לרבות גרפיקות, סרטונים, תמונות, טקסטים, קבצים המוצעים להורדה וכל חומר אחר אשר מוצג באתר שייכים במלואם לאתר הנ"ל ומהווים קניין רוחני בלעדי של אתר "שם האתר שלכם" ואין לעשות בהם שימוש ללא אישור כתוב מראש מאתר "שם האתר שלכם".</p>
					<p>בנוסף אין להפיץ, להעתיק, לשכפל, לפרסם, לחקות או לעבד פיסות קוד, גרפיקות, סרטונים, סימנים מסחריים או כל מדיה ותוכן אחר מבלי שיש ברשותכם אישור כתוב מראש.</p>
				</li>
				<li>
					<h4>תוכן האתר</h4>
					<p>אנו שואפים לספק לכם את המידע המוצג באתר ללא הפרעות אך יתכנו בשל שיקולים טכניים, תקלות צד ג או אחרים, הפרעות בזמינות האתר. ולכן איננו יכולים להתחייב כי האתר יהיה זמין לכם בכל עת ולא יינתן כל פיצוי כספי או אחר בשל הפסקת השירות / הורדת האתר.</p>
					<p>קישורים לאתר חיצוניים אינם מהווים ערובה כי מדובר באתרים בטוחים, איכותיים או אמינים וביקור בהם נעשה על דעתכם האישית בלבד ונמצאים בתחום האחריות הבלעדי של המשתמש באתר.</p>
					<p>התכנים המוצעים באתר הינם בבעלותם הבלעדית של "שם האתר שלכם" ואין לעשות בהם שימוש אשר נועד את האמור בתקנון זה (ראה סעיף 3) למעט במקרים בהם צוין אחרת או במקרים בהם צוין כי זכויות היוצרים שייכים לגוף חיצוני. במקרים אלו יש לבדוק מהם תנאי השימוש בקישור המצורף ולפעול על פי המצוין באתר החיצוני לו שייכים התכנים.</p>
				</li>
				<li>
					<h4>ניהול משתמשים ומבקרים באתר</h4>
					<p>הנהלת האתר שומרת לעצמה את הזכות לחסום כל משתמש ובין אם על ידי חסימת כתובת הIP של המחשב שלו, כתובת הMACID של המחשב שלו או אפילו בהתאם למדינת המוצא ללא צורך לספק תירוץ אשר מקובל על הגולש.</p>
					<p>צוות האתר / הנהלת האתר יעשה כל שביכולתו להגן על פרטי המשתמשים הרשומים באתר / מנויים הרשומים באתר. במקרים בהם יעלה בידיו של צד שלישי להשיג גישה למידע מוסכם בזאת כי לגולשים, משתמשים וחברים באתר לה תהה כל תביעה, טענה או דרישה כלפי צוות האתר "שם האתר שלכם".</p>
				</li>
				<li>
					<h4>גילוי נאות</h4>
					<p>באתר זה עשוי לעשות שימוש בקבצי קוקיז (במיוחד עבור משתמשים רשומים ומנויים) ובממשקי סטטיסטיקה פנימיים בכדי לשמור תיעוד סטטיסטי אנונימי של גולשים וניתוח תנועת הגולש/ים, הרגלי גלישה באתר וניתוח קליקים וזמן שהייה.</p>
					<p>בכל העת ולבד מאשר גולשים המחוברים לאתר המידע הנשמר הוא אנונימי לחלוטין ואין בו את שם הגולש או כל פרט מזהה אחר.</p>
				</li>
				<li>
					<h4>איזור שיפוט</h4>
					<p>בעת שאתם עושים שימוש באתר ובמקרה בו התגלעה כל מחולקת אתם מסכימים להלן כי האמור לעיל נמצא תחת סמכות השיפוט הבלעדי של החוק הישראלי תוך שימוש במערכת בתי המשפט הישראליים בלבד במחוז תל אביב.</p>
				</li>
			</ol>

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
								<li dir="rtl"><a>צ'אט</a></li>
								<li dir="rtl"><a >עמוד אישי</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-4">
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
									<li><a href="https://www.facebook.com" class="fa fa-facebook-square" attr="facebook icon"></a></li>
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
		<script type="text/javascript" src="js/jquery-3.2.0.js"></script>
		<script src="js/sign.js"></script>
		<script src="js/signs.js"></script>
		<script src="js/login.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/smoothscroll.js"></script>
		<script src="js/custom.js"></script>


	</body>

	</html>
