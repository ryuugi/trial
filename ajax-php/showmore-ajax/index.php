<?php 
	require_once("../connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax-PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			let comCount = 2;
			$("#showMore").click(function(){
				comCount += 2;
				$("#comments").load("load-comments.php", {
					comNew: comCount
				});
			});
		});
	</script>
</head>
<body>
	<div id="comments">
		<?php 
		$sql = "SELECT * FROM comments LIMIT 2";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		 ?>
		 <p><?php echo $row['author'].": ".$row['message'] ?></p>
		<?php }} ?>
	</div>
	<button id="showMore">Show More</button>
</body>
</html>