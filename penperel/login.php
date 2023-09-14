<?php
require 'conn.php';

$idadmin = $_POST['idadmin'];
$kata = $_POST['kataluan'];

if ($idadmin== 'admin') {
    $sql = 'SELECT * FROM admin';
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($kata, $row->katalaluan)) {
        $_SESSION['idadmin'] = 'admin';
        header('location: admin/');
    } else {
        ?>
        <script>
            alert('Maaf, kata laluan salah.');
            window.location = './';
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert('Maaf, ID pengguna/kata laluan salah.');
        window.location = './';
    </script>
    <?php
}
