<!DOCTYPE html>

<?php

include 'dbh.php';

?>
<html>

<head>

    <title>

    </title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(document).ready(function () {
            var commentCount = 2;

            $("button").click(function () {
                commentCount = commentCount + 1;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount


                });


            });


        });


    </script>
</head>

<body>


    <div id="comments">

        <?php

$sql = "SELECT * FROM comments LIMIT 2";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0) {

	while ($row = mysqli_fetch_assoc($result)) {
	echo "<p>";
	echo $row['author'];
	echo "<br>";
	echo $row['message'];
	echo "</p>";
	

    }
}else {
    echo "No result";

}

?>

    </div>
    <button>show more</button>

</body>

</html>