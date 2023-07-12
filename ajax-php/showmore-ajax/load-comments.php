<?php 
require_once("../connection.php");
$count = $_POST['comNew'];
		$sql = "SELECT * FROM comments LIMIT $count";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		 ?>
		 <p><?php echo $row['author'].": ".$row['message'] ?></p>
		<?php }}