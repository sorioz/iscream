<?php
if (!empty($_GET)) {
    $login_error = $_GET['e'];
}
?>
<!--TODO Put this form into a nicely styled react modal window-->
<form name="loginform" method="post" action="conf.php">
    <label for="username">Benutzername </label>
    <input type="text" name="username" id="username" required autofocus><br><br>
    <label for="password">Passwort </label>
    <input type="password" name="passwort" id="password" required">
    <br><br>
    <input type="submit" value=" login ">
</form>
<div>
    <?php
    if (!empty($login_error)) {
        echo "<span style='color:red; font-weight: bold'>Falsche Logindaten!!!</span>";
    }

    ?>

</div>