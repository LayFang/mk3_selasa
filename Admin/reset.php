<?php require '../include/conn.php';
$idwarden= $_GET['idwarden'];
$sql = "SELECT * FROM warden WHERE idwarden= $idwarden";
$row=$conn->query($sql)->fetch_object();
$kata=password_hash($row->nokpwarden,PASSWORD_BCRYPT);
$sql="UPDATE warden SET kata='$kata' WHERE idwarden=$idwarden";
$conn->query($sql);

header('location: index.php?menu=warden');

