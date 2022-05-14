"use strict";
$(document).ready(function () {
	$('#block').click(function () {
		$.post('BlockUserAdmin.php', {
            'block':1,
            'id':$("#id").val(),
            'type':$("#type").val(),
            'blocking':$("#blocking").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('מנהל יקר הצלחת לחסום את המשתמש');
                window.location.reload();

				}
			else{
			
				alert(data);
				$('#err').html(data);
			}
		});
	});
});