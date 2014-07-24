	function getMessages() {
		$.ajax({
			url: './process/processData.php',
			type: 'POST',
			data: {getMessage: true},
			dataType: 'json',
			success: function(res) {
				if (res['data']) {
					var msgArray = res['data'].split(";;;;;;;;;;");
					var HTMLCode = "<ul>", imageCode = "<div class='msg-avatar col-xs-2'><img width='30px' src='./images/gp_avatar.png'></div>";
					for (var i = 0; i < msgArray.length; i++) {
						if (msgArray[i] != "") {
							HTMLCode += "<li><div class='row'>" + imageCode + "<div class='msg-comments col-xs-10'>" + msgArray[i] + "</div></div></li>";
						}
					}
					HTMLCode += "</ul>";
					$('#messageContent')[0].innerHTML = HTMLCode;
				};
			},
			error: function(error) {console.error(error);}
		});
	}