<?php
/*TODO: Call this script via Ajax*/
require("common.php");
$user = $_SESSION['myuser_name'];
$myMessage = $_POST['scream'];
try {
    $statement = $db->prepare("INSERT INTO myscreams(name, message)
            VALUES(?,?)");

    $statement->execute(array($user, $myMessage));
    header("Location: index.php");
    die("Redirecting to: index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}