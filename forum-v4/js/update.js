"use strict";
$(document).ready(function () {
	$('#update').click(function () {
		$.post('updateteacherfunc.php', {
		    'update':1,
			'lname': $("#lname").val(),
			'fname': $("#fname").val(),
			'pass2': $("#pass2").val(),
			'pass': $("#pass").val(),
			'price': $("#price").val(),
			'tele': $("#tele").val(),
			'email': $("#email").val(),
			'about': $("#about").val(),
			'cf-korsupdate[]':$('#cf-korsupdate').val(),
			'cf-Citiesupdate[]':$('#cf-Citiesupdate').val(),
			'cf-budget': $("#cf-budget").val(),
			'load_user_file': $("#load_user_file").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('עודכן בהצלחה!');
		
				window.location.reload();
				}
			else{
				alert(data);
				alert('לא עודכן!');
			
				$('#err').html(data);
			}
		});
	});
});