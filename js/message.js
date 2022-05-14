"use strict";
$(document).ready(function () {
$('#submit0').click(function () {
		$.post('sentmessage.php', {
		    'submit0':1,
			'cf-name': $("#cf-name").val(),
			'cf-email': $("#cf-email").val(),
			'cf-number': $("#cf-number").val(),
			'cf-budgets1': $("#cf-budgets1").val(),
			'cf-message': $("#cf-message").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('ההודעה שלך נשלחה בהצלחה לצוות האתר וכרגע נמצאת בטיפול נחזור אלייך עם תשובה מיידית בהקדם האפשרי ');
				$('#submit0').attr("disabled",true);
				}
			else{
				alert(data);
				alert('ההודעה שלך לא נשלחה נא לחזור שנית על הפרטים ש הקלדת');
				$('#err4').html(data);
			}
		});
	});
});