<?php
require 'conn.php';

$idadmin = $_POST['idadmin'];
$kata = $_POST['kata'];

if ($idadmin == 'admin')
{
    $sql = 'SELECT * FROM admin';
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($kata, $row->kata))
    {
        $_SESSION['idadmin'] = 'admin';
        header('location: admin/');
    } else
    {
        ?>
        <script>
            alert('Maaf, kata laluan salah.');
            window.location = './';
        </script>
        <?php
    }

} else
{
    $sql = "SELECT idwarden,kata FROM warden WHERE nokpwarden = '$idadmin'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_object();
        if (password_verify($kata, $row->kata)) {
            $_SESSION['idwarden'] = $row->idwarden;
            header('location:warden/');
        } else {
            ?>
            <script>
                alert('maaf, kata laluan salah');
                window.location = './';
            </script>
            <?php
        }
    }

else
{
    $sql = "SELECT idpelajar,kata FROM pelajar WHERE nokppelajar='$idadmin'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $result->fetch_object();
        if (password_verify($kata, $row->kata))
        {
            $_SESSION['idwarden'] = $row->idwarden;
            header('location:warden/');

        } else
        {
            ?>
            <script>
                alert('Maaf, kata laluan salah');
                window.location = './';
            </script>
            <?php
        }
    }
}
}



