$(document).ready(function(){
	var commentCount = 2;
	$("#btn").click(function(){
		commentCount += 2;
		$("#output").load('load-comments.php', {
			commentNewCount : commentCount
		});
	});
});