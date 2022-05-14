"use strict";
$(document).ready(function () {
	$('#kors').click(function () {
        $.post('DeleteKorses.php',{
            'kors':1,
            'cf-korsdel[]':$("#cf-korsdel").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('הקורס נמחק בהצלחה');
                window.location.reload();

				}
			else{
				alert('הקורס לא נמחק בהצלחה');
				alert(data);
				$('#err').html(data);
			}
		});
	});
});


