<?php
/*File to connect to the database*/

$mysqli = new mysqli('localhost', 'root', 'Michael#77', 'nonnastable');
/* check connection */
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
//select a database to work with
$mysqli->select_db('nonnastable');