<?php
require("common.php");
$query = $db->prepare('SELECT * FROM myscreams');
$query->execute();
$result = $query -> fetchAll();

foreach( $result as $row ) {
    //echo $row['name'];
    echo "<div style='padding:20px; margin:100px; width: 20%; border: 2px dotted white'> <i class='fa fa-user-secret fa-2x'></i>
            ".$row['message']."</div>";
}