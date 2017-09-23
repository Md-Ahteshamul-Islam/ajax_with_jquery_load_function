
<?php 
	include 'db_connector.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax & Database</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="output">

		<?php 
			$sql = "SELECT * FROM comments LIMIT 2";

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

	</div>

	<button id="btn">Show More Comments</button>

	<script src="jquery-3.2.1.min.js"></script>
	<script src="main.js"></script>
</body>
</html>