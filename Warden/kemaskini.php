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
$idpelajar = $_POST['idpelajar'];
$warden = $_POST['warden'];
$namapelajar = $_POST['namapelajar'];
$nokppelajar = $_POST['nokppelajar'];
$kata = $_POST['kata'];

$sql = "UPDATE pelajar  
        SET warden= '$warden', namapelajar = '$namapelajar', nokppelajar = '$nokppelajar', kata = '$kata'  
        WHERE idpelajar = $idpelajar";
$conn->query($sql);

header('location: index.php?menu=pelajar');
?>

</body>
</html>

