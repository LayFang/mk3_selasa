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
$idwarden = $_POST['idwarden'];
$namawarden = $_POST['namawarden'];
$nokpwarden = $_POST['nokpwarden'];
$kata = $_POST['kata'];

$sql = "UPDATE warden  
        SET namawarden= '$namawarden', nokpwarden = '$nokpwarden', kata = '$kata'  
        WHERE idwarden = $idwarden";
$conn->query($sql);

header('location: index.php?menu=warden');
?>

</body>
</html>

