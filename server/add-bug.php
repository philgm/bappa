<?php
$server = "mysql51-104.perso";
$username = "argosappsql";
$password = "ilest11h29";
$database = "argosappsql";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

$bugTitle = mysql_real_escape_string($_POST["bug-title"]);
$bugDetails = mysql_real_escape_string($_POST["bug-details"]);
$bugPriority = mysql_real_escape_string($_POST["bug-priority"]);

$sql = "INSERT INTO bapp_bugs (title, details, priority) ";
$sql .= "VALUES ('$bugTitle', '$bugDetails', $bugPriority)";

if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
} else {
        echo "Bug added";
}

mysql_close($con);
?>