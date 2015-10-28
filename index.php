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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.24/browser.min.js"></script>
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
<script type="text/babel">

    var React = require('react');
    var ReactDOM = require('react-dom');

    ReactDOM.render(
    < h1 > Hello, world! < / h1 >,
        document.getElementById('screams')
    );

</script>
</body>
</html>