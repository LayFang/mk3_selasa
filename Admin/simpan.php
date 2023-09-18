<?php
require '../include/conn.php';
/** @var object $conn */

$namawarden = $_POST['namawarden'];
$nokpwarden = $_POST['nokpwarden'];
$kata = password_hash($nokpwarden,PASSWORD_BCRYPT);

$sql = "INSERT INTO warden VALUES(null, '$namawarden', '$nokpwarden','$kata')";
$conn->query($sql);
#echo $conn->error;
header('location: index.php?menu=warden');
