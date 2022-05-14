"use strict";
$(document).ready(function () {
	$('#korsadd').click(function () {
        $.post('AddKorses.php',{
            'korsadd':1,
            'addkors':$("#addkors").val()
		}, function (data) {
			
			if (~data.indexOf('success'))
				{
                alert('נוסף הקורס בהצלחה');
                window.location.reload();

				}
			else{
			
				alert(data);
				$('#err').html(data);
			}
		});
	});
});


