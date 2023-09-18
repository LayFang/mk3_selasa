<?php
// Sambungan pangkalan data MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "senaraipendaftaranperalatanelektrik";

$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan pangkalan data
if ($conn->connect_error) {
    die("Sambungan pangkalan data gagal: " . $conn->connect_error);
}

// Fungsi untuk mendapatkan senarai peralatan berdasarkan peranan
function dapatkanSenaraiPeralatan($id_pengguna, $peranan) {
    global $conn;
    $senarai_peralatan = [];

    if ($peranan == 'pelajar') {
        $sql = "SELECT * FROM peralatan WHERE pelajar = '$id_pengguna'";
    } elseif ($peranan == 'warden') {
        // Anda perlu menyesuaikan bagaimana warden dapat mengakses senarai peralatan pelajar di bawah tanggungjawabnya.
        // Ini adalah contoh asas dan bergantung kepada rekod pangkalan data.
        $sql = "SELECT * FROM peralatan WHERE pelajar IN (SELECT id_pengguna FROM pengguna WHERE kad_warden = '$id_pengguna')";
    } elseif ($peranan == 'admin') {
        // Admin boleh mencari peralatan, tidak perlu menyusun senarai peralatan di sini
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $senarai_peralatan[] = $row;
        }
    }

    return $senarai_peralatan;
}

// Fungsi untuk mencari maklumat pelajar dan warden berdasarkan ID peralatan
function cariMaklumatPelajarWarden($idperalatan) {
    global $conn;
    $maklumat = [];

    $sql = "SELECT pelajar, kad_warden FROM peralatan WHERE idperalatan = '$idperalatan'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $maklumat['pelajar'] = $row['pelajar'];
        $maklumat['warden'] = $row['kad_warden'];
    }

    return $maklumat;
}

?>
