<?php
require("common.php");

unset($_SESSION['myuser_name']);

header("Location: index.php");
die("Redirecting to: index.php");

?>