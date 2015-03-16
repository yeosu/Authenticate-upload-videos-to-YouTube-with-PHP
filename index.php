<?php
session_start();
//ini_set("display_errors", 'on');
// check api line #44 - 54
$videoName = 'test.3gp';
$videoTitle = 'test title';
$videoInfo = 'test info';
$format = strtolower(array_pop(explode(".", $videoName)));
require_once('api.php');
?>

<!doctypehtml>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<title>Upload Video to Your Youtube Account</title>
</head>
<body>
<h1 class="text-center">You are attempting to upload the file: <span class="label label-warning"><?php echo $videoName; ?></span></h1>

<div class="text-center jumbotron col-md-6 col-md-offset-3">
<h1>Preview:</h1>
<video controls>
<source src="videos/<?php echo $videoName; ?>" type="video/<?php echo $format; ?>">
Your browser does not support HTML5 Videos

</video>
</div>
<script>
    $(function() {
        $(".modal").modal("show");

    })
</script>
</body>
</html>