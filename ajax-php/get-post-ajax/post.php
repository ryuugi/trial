<?php 
	require_once('../connection.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>get-post-ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("input").keyup(function(){
				let name = $("input").val();
				$.post("suggestions.php", {
					suggestion: name
				}, function(data){
					$("#test").html(data);
				});
			});
		});
	</script>

</head>
<body style="margin: 0; padding: 0;">
	<input type="text" name="name">
	<div id="test"></div>
</body>
</html>