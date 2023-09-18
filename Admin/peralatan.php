<h1>Senarai Peralatan</h1>
<form action="index.php?menu=peralatan" method="post">
    <table>
        <tr>
            <td>No.Siri:</td>
            <td><input type="text" name="nosiri" required></td>
            <td>
                <button type="submit">Cari</button>
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['nosiri'])) {
    $nosiri = $_POST['nosiri'];
    $sql = "SELECT * FROM peralatan
            JOIN pelajar ON peralatan.pelajar=pelajar.idpelajar
            JOIN warden ON pelajar.warden=warden.idwarden
            WHERE nosiri='$nosiri'";
    $result=$conn->query($sql);
    if($result->num_rows==0){
        echo "No.Siri $nosiri tidak ditemui";
    }else{
        $row= $result->fetch_object();
        ?>
        <table>
            <tr>
                <th>No.Siri</th>
                <td><?= $row->nosiri ?></td>
            </tr>
            <tr>
                <th>Pelajar</th>
                <td><?= $row->pelajar ?></td>
            </tr>
            <tr>
                <th>Jenis Peralatan</th>
                <td><?= $row->jenisperalatan ?></td>
            </tr>
            <tr>
                <th>Jenama</th>
                <td><?= $row->jenama ?></td>
            </tr>
            <tr>
                <th>Warden</th>
                <td><?= $row->namawarden ?></td>
            </tr>
        </table>
        <?php
    }
}
