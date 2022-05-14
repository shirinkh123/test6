<?php
require_once "get/get.php";//include
$db = new get();//meshtane mn sog dbConnection
?>
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


<!DOCTYPE html>
<html lang="he">

<head>

	<title>ללמוד חכם</title>
	<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
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
			<div class="pull-right" class="collapse navbar-collapse">

				<ul class="nav navbar-nav navbar-nav-right">
					<li class="pull-right"><a href="index.php">דף הבית</a></li>

				</ul>
			</div>
		</div>
	</section>



	<!-- BLOG HEADER -->
	<section id="blog-header" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-offset-1 col-md-5 col-sm-12">
					<h2 dir="rtl">איך לשפר את הציונים?</h2>
				</div>

			</div>
		</div>
	</section>

	<!-- BLOG DETAIL -->
	<section id="blog-detail" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-offset-1 col-md-10 col-sm-12">
					<!-- BLOG THUMB -->
					<div class="blog-detail-thumb">
						<!-- ******קישור לסקריפט בתחילת הדף ********-->
						<div id="scroll3"></div>
						<!--סוף-->
						<div class="blog-image">
							<img src="images/blog-detail-image.jpg" class="img-responsive" alt="Blog Image">
						</div>
						<h2 dir="rtl">להתרכז ללמוד ולהצליח - הטיפים שישפרו לכם ציונים</h2>
						<p ir="rtl">זוכרים את הרגעים שבהם ניסיתם להתכונן למבחן חשוב ולהפנים כמה שיותר מידע, אבל הראש לא
							פשוט קולט. במקום להתרכז בלימודים מחשבות שונות ומשונות מציפות אתכם וכל צפירת רכב או נביחת כלב
							מסיחה את דעתכם. הצלחה בלימודים תלויה בראש ובראשונה ביכולת שלכם להתרכז תוך כדי לימודים
							ובמיוחד לפני מבחן חשוב. במדריך שלפניכם נציע כמה טיפים שיסייעו לכם להתמודד עם הקושי.</p>
						<div class="blog-ads">
							<h4 dir="rtl">"אדם פסימי רואה את הקושי בכל הזדמנות,אדם אופטימי רואה הזדמנות בכל קושי"
							</h4>
							<h4 dir="rtl">ווינסטון צ'רצ'יל</h4>
						</div>

						<h2 dir="rtl">היפטרו מגורמים בעלי פוטנציאל להסיח את דעתכם</h2>
						<p dir="rtl">מסתבר כי העצה הטריוויאלית הזאת לא ברורה לכל אחד. אי אפשר ללמוד כהלכה כשיש גירויים
							מהסביבה. לכן לפני שתפתחו את הספר או המחברת וודאו כי כל אמצעי התקשורת מנוטרלים ואין סיכוי
							שמישהו יטריד אתכם. כבו את המכשיר הסלולארי (לא, רטט לא מספיק הרי אתם יודעים שתרימו את המכשיר
							בזמזום הראשן); כבו את המחשב אם אינכם משתמשים בו ללמידה; סגרו את הדלת ובקשו מבני הבית לא
							להפריע. אם אתם חוששים שהם לא יעתרו לבקשתכם צאו ולמדו בספרייה או בכל מקום שקט אחר</p>
						<h2 dir="rtl">הכינו מענה לצרכים הפיסיים שלכם</h2>
						<p dir="rtl">
							אחרת בדיוק שתשקעו בחומר הלימוד תרגישו צורך עז להתפנות, כשתפתחו את הדלת יזכיר לכם השותף שעוד
							לא שטפתם כלים ואז הטלפון בבית יצלצל וחבר יבקש לדבר רק איתכם. למה לכם לפתוח פתח להסחות דעת?
							לפני תחילת הלימודים התפנו והביאו לחדר שתייה וחטיפים. אגב, חטיפי אנרגיה יתרמו במידה רבה
							ליכולת שלכם להתרכז, גם לפירות יש השפעה דומה.</p>
						<h2 dir="rtl">לימודים - בחרו זמן מתאים לכך</h2>
						<p dir="rtl">.בבחירת שעות הלמידה כדאי להתחשב בכמה גורמים - ראשית באשיות שלכם. יש אנשים שמתרכזים
							היטב בבוקר ואילו אחרים מצליחים ללמוד טוב יותר דווקא בשעות הערב. אתם מכירים את עצמכם טוב יותר
							מאחרים, אל תתחשבו בעצות שונות ומשונות לימדו בשעות הערניות שלכם גם אם זה קורה בחצות. שנית -
							בבחירת שעת הלימוד כדאי להתחשב הכמות האנשים בבית, שכן תמיד עדיף ללמוד כשהבית ריק מאנשים
							וגירויים. לבסוף - השתדלו לו ללמוד בשעות בהן משודרות תוכניות טלוויזיה אהובות. הידיעה כי ברגע
							זה אתם מפספסים משהו מעניין תקשה עליכם ללמוד ברצינות
						</p>
						<h2 dir="rtl">ספקו פתרון לשאלות פנימיות</h2>
						<p dir="rtl">לפעמים המקור להסחת הדעת פנימי ואינו קשור לסביבה החיצונית. אם מטרידות אתכם שאלות
							עדיף לפתור אותן או לפחות לקבל את העובדה כי אי אפשר לספק להן פתרון. אם אתם מחכים לשיחת טלפון
							חשובה עדיף להתקשר ולסיים את הפרשה. אם אינכם יכולים קבלו זאת, אין טעם לייסר את עצמכם בגלל
							משהו שאינו בשליטתכם. הבינו כי ממילא אתם לא יודעים מתי יתקשרו אליכם ולכן עדיף ללמוד.</p>
						<h2 dir="rtl">הפעילו את הגוף תוך כדי לימודים</h2>
						<p dir="rtl"> רבים מצליחים להתרכז בעזרת פעולות לא מודעות שהם עושים תוך כדי לימודים. למשל ציור עם
							העט, השלכת כדור או תיפוף על השולחן. אם זה מה שעוזר לכם להתרכז עשו זאת. מה עושים עם עט? אפשר
							לסמן משפטים חשובים תוך כדי קריאה, לרשום הערות תוך כדי למידה או אפילו לסכם את עיקרי הדברים.
							אפשר להשליך כדור עם כל תשובה נכונה או ללפף גומייה סביב העט. אולי למתבונן מהצד הפעולות האלה
							יראו מוזרות, אבל כל עוד הן תורמות לריכוז ומאפשרות לכם ללמוד כדאי להתמיד בהן.</p>
						<div class="blog-ads">
							<h4>"כשהם אומרים לך שאתה לא יכול, הם מראים לך את הגבולות שלהם, לא שלך"</h4>
							<h4>קווין קינו</h4>
						</div>
						<h2 dir="rtl">להצלחה בלימודים - שמרו על מתח חיובי</h2>
						<p dir="rtl">מתח רב מידיי עלול לפגום בריכוז ולגרום לחרדות לא רציונאליות, אבל גם חוסר מתח אינו
							מומלץ כי מצב כזה מעודד שעננות ולמידה מעטה מידי.
							<br> אם המתח מקשה עליכם ללמוד נסו ליישם את העצות הבאות:
						</p>


						<ul dir="rtl">
							<li dir="rtl">הציבו מטרות ריאליות - אל תצפו לציון שאינו בהישג ידיכם ואל תשוו את עצמכם
								לאחרים. הגדירו מטרות שהולמות את רמת הידע והיכולת שלכם, המטרה צריכה להיות עמידה ביעד הזה
								בלי קשר להישגים של החברים שלכם.</li>
							<li dir="rtl">זכרו שהמבחן הוא בחירה שלכם - כמו הרבה דברים בחיים גם כאן זו החלטה שלכם לגשת
								למבחן כמו גם ההחלטה ללמוד. הזכירו את זה לעצמכם.</li>
							<li dir="rtl">אל תקשיבו לעצות ורעיונות שליליים - אל תאפשרו לאחרים לפגוע בביטחונכם העצמי. רק
								אתם יודעים מה אתם מסוגלים להשיג במבחן. אם יש מישהו שמערער את ביטחונכם נסו לא לשוחח איתו
								בתקופת המבחנים או לא לשתף אותו במה שעובר עליכם. תמיד תוכלו לספר לו אחרי שהמבחן הסתיים.
							</li>
							<li dir="rtl">זכרו שתמיד יש מועד ב' - אף מבחן אינו חורץ גורלות ואפשר לתקן כל כשלון. לכל מבחן
								יש מועד ב' ובמקרה הכי גרוע תחזרו על אותו קורס בשנית. אף אחד לא מת מכך אז למה להיכנס
								לפאניקה?</li>
							<li dir="rtl"> השתמשו בעט משובך שתחושת הכתיבה איתו טוב ונעימה. לעיתים כתיבה בעט פשוט מפחיתה
								מערך הלמידה, ואילו השימוש בעט היוקרתי ייתן תחושת מכובדות וחגיגיות.</li>
							<li dir="rtl"> אל תלבשו בגד מרושל. יכול להיות שטרנינג מעניק תחושה נוחה ונעימה, אבל הוא גם
								יעודד אתכם להשתרע על הספא ולנמנם. עדיף ללבוש את הבגדים שמשמשים אתכם ביום-יום.
							</li>
							<li dir="rtl"> לחשוב באופן חיוב. אם דעתכם הוסחה או לא הבנתם משהו, אל תרימו ידיים. אמרו
								לעצמכם שאתם יכולים ללמוד וששום דבר לא קרה. חזרו על החומר שפספסתם שוב ושוב עד שתרגישו
								שאתם בקיאים בו.</li>
							<li dir="rtl"> השתמשו בעט משובך שתחושת הכתיבה איתו טוב ונעימה. לעיתים כתיבה בעט פשוט מפחיתה
								מערך הלמידה, ואילו השימוש בעט היוקרתי ייתן תחושת מכובדות וחגיגיות.</li>
						</ul>

						<div class="blog-social-share">
							<h4>שתפו את המאמר </h4>
							<a href="https://www.facebook.com/templatemo" class="btn btn-primary"><i
									class="fa fa-facebook"></i>facebook</a>
							<a href="https://twitter.com/login/error" class="btn btn-success"><i
									class="fa fa-twitter"></i>twitter</a>
							<a href="https://www.instagram.com" class="btn btn-danger"><i
									class="fa fa-google-plus"></i>google plus</a>
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
							<li dir="rtl"><a>צ'אט</a></li>
							<li dir="rtl"><a>עמוד אישי</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-4">
					<div class="footer-link">
						<h2 dir="rtl">תקנון האתר</h2>
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
								<li><a href="https://twitter.com/login/error" class="fa fa-twitter"></a></li>
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