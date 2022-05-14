"use strict";
$(document).ready(function () {
	$('#comment').click(function () {
		$.post('add_replies.php', {
		    'comment':1,
            'reply': $("#reply").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('התגובה שלך נקלטה בהצלחה');
				window.location.reload();
				}
			else{
				alert(data);
				alert('התגובה שלך לא נקלטה ');
				$('#err').html(data);
			}
		});
	});
});