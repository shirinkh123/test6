"use strict";
$(document).ready(function () {
	$('#sendopt').click(function () {
		$.post('addpoll.php', {
            'sendopt':1,
            
            'opt':$("#opt1").val(),
            'opt2':$("#opt2").val(),
            'opt3':$("#opt3").val()
           
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
				alert('תודה לך שמחנו שהשתתפת בסקר שלנו');
               
				}
			else{
			
				alert(data);
				$('#err').html(data);
			}
		});
	});
});
