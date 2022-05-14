"use strict";
$(document).ready(function () {
	$('#delete').click(function () {
		$.post('DeletUser.php', {
		    'delete':1
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('משתמש יקר תודה לך שהיית חלק ממשפחה שלנו ונשמח לעזור לך בכל בעיה כדי שתחזור שוב להאמין בנו ולמשפחתינו');
                window.location="http://localhost/sof3/index.php";
				}
			else{
			
				alert(data);
				$('#err').html(data);
			}
		});
	});
});