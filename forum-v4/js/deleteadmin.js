"use strict";
$(document).ready(function () {
	$('#del').click(function () {
		$.post('DeleteUserAdmin.php', {
            'del':1,
            'id':$("#id").val(),
            'type':$("#type").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('מנהל יקר המשתמש נמחק בהצלחה');
                window.location.reload();

				}
			else{
			
				alert(data);
				$('#err').html(data);
			}
		});
	});
});