<?php require '../conn.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$idperalatan = $_POST['idperalatan'];
$pelajar = $_POST['pelajar'];
$jenisperalatan = $_POST['jenisperalatan'];
$jenama = $_POST['jenama'];
$nosiri = $_POST['nosiri'];

$sql = "UPDATE peralatan  
        SET pelajar= '$pelajar', jenisperalatan = '$jenisperalatan', jenama = '$jenama', nosiri = '$nosiri'  
        WHERE idperalatan = $idperalatan";
$conn->query($sql);

header('location: index.php?menu=peralatan');
?>

</body>
</html>
