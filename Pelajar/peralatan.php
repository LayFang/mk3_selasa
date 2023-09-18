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
                    <td>Pelajar: </td>
                    <td><input type="text" name="pelajar" required></td>
                </tr>
                <tr>
                    <td>Jenis Peralatan: </td>
                    <td><input type="text" name="jenisperalatan" required></td>
                </tr>
                <tr>
                    <td>Jenama :</td>
                    <td><input type="text" name="jenama" required></td>
                </tr>
                <tr>
                    <td>No.Siri :</td>
                    <td><input type="text" name="nosiri" required></td>
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
    $idperalatan = $_GET['edit'];
    $sql = "SELECT * FROM peralatan WHERE idperalatan = $idperalatan";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    ?>
    <form action="kemaskini.php" method="post">
        <input type="hidden" name="idperalatan" value="<?php echo $row->idperalatan; ?>">
        <fieldset>
            <legend>Kemaskini Data Peralatan</legend>
            <table>
                <tr>
                    <td>Pelajar</td>
                    <td><input type="text" name="pelajar"
                               required value="<?php echo $row->pelajar; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Peralatan</td>
                    <td><input type="text" name="jenisperalatan"
                               required value="<?php echo $row->jenisperalatan; ?>"></td>
                </tr>
                <tr>
                    <td>Jenama</td>
                    <td><input type="text" name="jenama"
                               required value="<?php echo $row->jenama; ?>"                              maxlength="12"></td>
                </tr>
                <tr>
                    <td>No.Siri</td>
                    <td><input type="text" name="nosiri"
                               required value="<?php echo $row->nosiri; ?>"                               maxlength="5"></td>
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
        <th>Pelajar</th>
        <th>Jenis Peralatan</th>
        <th>Jenama</th>
        <th>No.Siri</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM peralatan ORDER BY pelajar";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->pelajar; ?></td>
            <td><?php echo $row->jenisperalatan; ?></td>
            <td><?php echo $row->jenama; ?></td>
            <td><?php echo $row->nosiri; ?></td>
            <td>
                <a href="index.php?menu=peralatan&edit=<?php echo $row->idperalatan; ?>">Edit</a>
                |
                <a href="padam.php?idperalatan=<?php echo $row->idperalatan; ?>"
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
