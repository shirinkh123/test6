"use strict";
$(document).ready(function () {
$('#Check_admin').click(function () {
		$.post('checkadmin.php', {
		    'Check_admin':1,
			'passadmin2': $("#passadmin2").val()
			
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('הסיסמה שהקלדת נכונה מנהל יקר');
				window.location="http://localhost/sof3/forum-v4/AddManager.php";
				$('#modal-form').modal('hide');	
      			}
			else{
				alert(data);
				$('#err3').html(data);
				
			}
			
		});
	});
});