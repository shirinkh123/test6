"use strict";
$(document).ready(function () {
	$('#submit').click(function () {
		$.post('upload.php', {
		    'submit':1,
			'file': $("#file").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('SUCCESS!!!');
                window.location.reload();
				}
			else{
			alert(data);
                alert('NO SUCCESS!!!');
                $('#err').html(data);
                
			}
		});
	});
});