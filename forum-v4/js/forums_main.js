"use strict";
$(document).ready(function () {
	$('#send').click(function () {
		$.post('add_topic.php', {
		    'send':1,
			'sub': $("#sub").val(),
			'desc': $("#desc").val(),
			'categories': $("#categories").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('סטודנט יקר השאלה שלך התקבלה בהצלחה');
				}
			else{
				alert(data);
				alert('סטודנט יקר השאלה שלך לא התקבלה בהצלחה');
				$('#err').html(data);
			}
		});
	});
});