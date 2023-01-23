<?php
SESSION_start();
echo("hello ".$_SESSION['user']);

?>

<html>
<head>
</head>
<body>
<br>
<a href="login.php">LOGOUT</a>
</body>
</html>
