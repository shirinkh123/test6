"use strict";
$(document).ready(function () {
	$('.up').on("click",function () {
		
		$.post('add_like.php', {
            'like': $(this).attr('data-id')
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('תודה לך על הפרגון');
				window.location.reload();
				}
			else{
				alert(data);
				alert('לא ניתן לתת פעמיים לייק לאתוה תגובה');
				$('#err').html(data);

				
			}
		});
	});
});
