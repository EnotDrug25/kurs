$(document).ready(function(){
	$('#logout').click(function(){
		$.ajax({
			url:"users/logout.php",
			cache: false,
			success: function(html){
				$("#divavtorhead").html(html);
			}
		});
		location.reload();
	});
});