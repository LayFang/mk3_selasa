<?php require '../conn.php';
$idperalatan= $_GET['idperalatan'];
$sql = "DELETE FROM peralatan WHERE idperalatan= $idperalatan";
$conn->query($sql);

header('location: index.php?menu=peralatan');
