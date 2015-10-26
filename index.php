<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> TODO: responsive -->
    <title>iScream</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href="styles/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css"/>
    <link href="styles/stylesheets/print.css" media="print" rel="stylesheet" type="text/css"/>
    <!--[if IE]>
    <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <script src="js/script.js"></script>
</head>
<body>
<div id="main">
    <header><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i>
        <?php
        if (!empty($_SESSION['myuser_name'])) {
            echo '<a href="logout.php" title="logout" class="log"><i class="fa fa-lock"></i></a>';
        } else
            echo '<a href="login.php" title="login" class="log"><i class="fa fa-unlock"></i></a>';
        ?>

        <i class="fa fa-cog fa-spin"></i></header>
    <div id="backGround" class="fade-in one">
        <img src="img/icecream.png" alt="iScream logo"/>

        <h1>iScream</h1>
    </div>
    <div id="screams">
        <?php

        if (!empty($_SESSION['myuser_name'])) {
            include 'screams.php';
        }
        ?>
    </div>
</div>
<footer>

</footer>
</body>
</html>