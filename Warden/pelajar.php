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
if (!isset($_GET['edit'])) {
    ?>
    <form action="simpan.php" method="post">
        <fieldset>
            <legend>Sistem Pendaftaran Peralatan Elektrik</legend>
            <table>
                <tr>
                    <td>Warden</td>
                    <td><input type="text" name="warden" required></td>
                </tr>
                <tr>
                    <td>Nama Pelajar</td>
                    <td><input type="text" name="namapelajar" required></td>
                </tr>
                <tr>
                    <td>No.KP Pelajar</td>
                    <td><input type="text" name="nokppelajar" required minlength="12" maxlength="12"></td>
                </tr>
                <tr>
                    <td>Katalaluan</td>
                    <td><input type="text" name="kata" required minlength="12" maxlength="12"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">BATAL</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
} else {
    $idcustomer = $_GET['edit'];
    $sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    ?>
    <form action="kemaskini.php" method="post">
        <input type="hidden" name="idpelajar" value="<?php echo $row->pelajar; ?>">
        <fieldset>
            <legend>Kemaskini Data Pelajar</legend>
            <table>
                <tr>
                    <td>Warden</td>
                    <td><input type="text" name="warden"
                               required value="<?php echo $row->warden; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Pelajar</td>
                    <td><input type="text" name="namapelajar"
                               required value="<?php echo $row->cust_name; ?>"></td>
                </tr>
                <tr>
                    <td>No.KP Pelajar</td>
                    <td><input type="text" name=nokppelajar
                               required value="<?php echo $row->nric; ?>" minlength="12"                                maxlength="12"></td>
                </tr>
                <tr>
                    <td>Kata</td>
                    <td><input type="text" name="kata"
                               required value="<?php echo $row->kata; ?>" minlength="5"                                maxlength="5"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">BATAL</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
}
?>

<table class="table">
    <tr>
        <th>Bil</th>
        <th>Warden</th>
        <th>Nama Pelajar</th>
        <th>No.KP Pelajar</th>
        <th>Kata</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pelajar ORDER BY nama_pelajar";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->warden; ?></td>
            <td><?php echo $row->namapelajar; ?></td>
            <td><?php echo $row->nokppelajar; ?></td>
            <td><?php echo $row->kata; ?></td>
            <td>
                <a href="index.php?menu=pelajar&edit=<?php echo $row->idpelajar; ?>">Edit</a>
                |
                <a href="padam.php?idpelajar=<?php echo $row->idpelajar; ?>"
                   onclick="return sahkan()">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<script>
    function sahkan() {
        return confirm('Adakah anda pasti?');
    }
</script>

</body>
</html>

