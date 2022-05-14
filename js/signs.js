"use strict";
$(document).ready(function () {
$('#submit2').click(function () {
		$.post('Students.php', {
		    'submit2':1,
			'name123': $("#name123").val(),
			'namel': $("#namel").val(),
			'cf-budge[]':$('#cf-budge').val(),
			'cf-kors1[]':$('#cf-kors1').val(),
			'zehot': $("#zehot").val(),
			'telephone12': $("#telephone12").val(),
			'email12': $("#email12").val(),
			'password12': $("#password12").val(),
			'cf-budgets12': $("#cf-budgets12").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				
				alert('כרגע אתה יכול להיתחבר אחרי שמתרענן העמוד');
				window.location.reload();

				}
			else{
				alert(data);
				alert('סטודנט יקר לא הצלחת להירשם לאתר אחד מהפרטים שהזנת שגויים נא לנסות שנית');
				$('#err1').html(data);
			}
			
		});
	});
});