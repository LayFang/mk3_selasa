<?php
require  '../conn.php';
if(!isset($_SESSION['idpengguna'])) header('location:../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Peralatan Elektrik</title>
</head>
<body>
<table>
    <tr>
        <td>Sistem Pendaftaran Peralatan Elektrik</td>
        <td>
            <a href="index.php?menu=home">Home</a>
            ::
            <a href="index.php?menu=warden">Warden</a>
            ::
            <a href="index.php?menu=peralatan">Peralatan</a>
            ::
            <a href="index.php?menu=../pelajar.php">Pelajar</a>
            ::
            <a href="../logout.php">Logout</a>
        </td>
    </tr>
</table>

<?php
$menu = 'home';
if (isset($_GET['menu']))
{
    $menu = $_GET['menu'];
}
include "$menu.php";
?>

</body>
</html>
