<?php
ob_start();
require("common.php");
$submitted_username = '';
if (!empty($_POST)) {
    $query = "
            SELECT
                name,
                pw
				FROM User
            WHERE
                name = :username
        ";

    $query_params = array(
        ':username' => $_POST['username']
    );

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        die("Failed to run query: ");
    }

    $login_ok = false;

    $row = $stmt->fetch();


    if ($row) {
        $check_password = $_POST['password'];


        if ($check_password === $row['password']) {
            $login_ok = true;

        }
    }

    if ($login_ok) {
        unset($row['password']);
        $_SESSION['myuser_name'] = $row;
        header("Location: index.php");
        die("Redirecting to: index.php");

    } else {
        header("Location: login.php?e=1");
        die("Redirecting to: login.php");
        $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
    }
}
ob_end_flush();
?>