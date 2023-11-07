<?php
require_once("config.php");

function db_connect() {
    $servername = HOST;
    $username = USER;
    $password = PASSWORD;
    $dbname = NAME;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Fout bij het maken van de connection: " . $conn->connect_error);
    }

    return $conn;
}