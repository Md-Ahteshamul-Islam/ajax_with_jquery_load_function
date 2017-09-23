<?php 
	
	include 'db_connector.php';

	$commentNewCount = $_POST['commentNewCount'];

	$sql = "SELECT * FROM comments LIMIT $commentNewCount";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$comment = "<p>"."<b><u>".$row['author']."</u></b>"."<br>".$row['comment']."</p>";
			echo $comment;
		}
	}
	else
	{
		echo "There are no comments to show";
	}

?>