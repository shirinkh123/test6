"use strict";
$(document).ready(function () {
	$('.down').on("click",function () {
		
		$.post('add_unlike.php', {
            'unlike': $(this).attr('data-id')
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('האנלייק התקבל בהצלחה לתגובה תודה לך');
				window.location.reload();
				}
			else{
				alert(data);
				alert('לא ניתן ללחוץ פעמיים לאותו אדם אנלייק');
                $('#err').html(data);
                
			}
		});
	});
});