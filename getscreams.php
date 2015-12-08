<?php
/*TODO: Call this script via AJAX*/
require("common.php");
$query = $db->prepare('SELECT * FROM myscreams');
$query->execute();
$result = $query->fetchAll();

foreach ($result as $row) {

    echo "<div style='margin:100px; width: 20%'><i class='fa fa-user fa-2x'></i> " . $row['name'] . "<span style='padding-left:20px'>" . $row['reg_date'] . "</span>
    <div style='padding:20px; border:1px dotted white;'>" . $row['message'] . "</div></div>";
}