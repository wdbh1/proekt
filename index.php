<?php
require_once __DIR__ . '/dbconnect.php';

$sql = "SELECT * FROM `kategorii`";
$result = $mysqli->query($sql);
$num=$result->num_rows;
$mysqli->close();