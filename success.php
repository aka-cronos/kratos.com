<html>

<body>

<?php
$redirect_to = isset($_GET["back"]) ? $_GET["back"] . ".html" : "index.html";
?>

<a href="<?php echo $redirect_to; ?>">Back</a>

</body>

</html>
