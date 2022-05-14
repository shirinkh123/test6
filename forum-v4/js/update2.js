"use strict";
$(document).ready(function () {
	$('#updates').click(function () {
		$.post('updatestudentfunc.php', {
		    'updates':1,
			'lnames': $("#lnames").val(),
			'fnames': $("#fnames").val(),
			'passs2': $("#passs2").val(),
			'passss': $("#passss").val(),
			'teles': $("#teles").val(),
			'emails': $("#emails").val(),
			'cf-korsupdates[]':$('#cf-korsupdates').val(),
			'cf-Citiesupdates[]':$('#cf-Citiesupdates').val(),
			'cf-budgets': $("#cf-budgets").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('עודכן בהצלחה!');
                window.location.reload();
				}
			else{
		
				alert('לא עודכן!');
                $('#err').html(data);
                
			}
		});
	});
});