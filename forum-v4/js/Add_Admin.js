"use strict";
$(document).ready(function () {
	$('#AddNewAdmin1').click(function () {
        $.post('AddAdmin.php',{
            'AddNewAdmin1':1,
            'idadmin':$("#idadmin").val(),
            'passadmin':$("#passadmin").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('ברוך הבא מנהל יקר');
                window.location.reload();

				}
			else{
			
				alert(data);
				$('#err').html(data);
			}
		});
	});
});
