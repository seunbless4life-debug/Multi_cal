<?php
include_once 'header.php';

$numb1 = $_POST['weight'];
$numb2 = $_POST['height'];
$result = $numb1 / ($numb2 * $numb2);

echo "$result";
?>