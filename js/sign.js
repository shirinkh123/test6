"use strict";
$(document).ready(function () {
	$('#submit1').click(function () {
		$.post('teachers.php', {
		    'submit1':1,
			'name': $("#name").val(),
			'name1': $("#name1").val(),
			'name2': $("#name2").val(),
			'telephone': $("#telephone").val(),
			'email': $("#email").val(),
			'name45': $("#name45").val(),
			'password': $("#password").val(),
			'cf-budgets[]':$('#cf-budgets').val(),
			'cf-kors[]':$('#courses').val(),
			'cf-bdsa': $("#cf-bdsa").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
		
				alert('כרגע אתה יכול להיתחבר אחרי שמתרענן העמוד');
				window.location.reload();
				}
			else{
				alert(data);
				alert('מורה יקר לא הצלחת להירשם לאתר אחד מהפרטים שהזנת שגויים נא לנסות שנית');
				$('#err').html(data);
			}
		});
	});
});