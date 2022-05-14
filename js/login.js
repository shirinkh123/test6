"use strict";
$(document).ready(function () {
$('#sub').click(function () {
		$.post('checklogin.php', {
		    'sub':1,
			'mail': $("#mail").val(),
			'pass': $("#pass").val(),
			'stud': $("#stud").val()
		}, function (data) {
			
			if (~data.indexOf('student'))
				{
				alert('ברוך הבא סטודנט יקר!');
				window.location="http://localhost/sof3/forum-v4/pagestudentone.php";
				$('#modal-form').modal('hide');	
      			}
			else
				if 
				  (~data.indexOf('teacher'))
				{
				alert('ברוך הבא מורה יקר!');
				window.location="http://localhost/sof3/forum-v4/pageteacherone.php";
				$('#modal-form').modal('hide');	
      			}
			else
				if 
				  (~data.indexOf('admin'))
				{
				alert('ברוך הבא מנהל יקר!');
				window.location="http://localhost/sof3/forum-v4/pagemanager.php";
				$('#modal-form').modal('hide');	
				  }
				  else
				if 
				  (~data.indexOf('מורה יקר עבר שלושה חודשים ועדיין לא שינית את הסיסמה עלייך לשנות את הסיסמה בבקשה לצורך ביטחות המערכת'))
				{
				alert('מורה יקר עבר שלושה חודשים ועדיין לא שינית את הסיסמה עלייך לשנות את הסיסמה בבקשה לצורך ביטחות המערכת');

				window.location="http://localhost/sof3/forum-v4/updateteacher.php";
				
				$('#modal-form').modal('hide');	
				  }
				  else
				  if 
					(~data.indexOf('תלמיד יקר עבר שלושה חודשים ועדיין לא שינית את הסיסמה עלייך לשנות את הסיסמה בבקשה לצורך ביטחות המערכת'))
				  {
				  alert('תלמיד יקר עבר שלושה חודשים ועדיין לא שינית את הסיסמה עלייך לשנות את הסיסמה בבקשה לצורך ביטחות המערכת');
  
				  window.location="http://localhost/sof3/forum-v4/updatestudent.php";
				  
				  $('#modal-form').modal('hide');	
					}
			else{
				alert(data);
				$('#err3').html(data);
				
			}
			
		});
	});
});