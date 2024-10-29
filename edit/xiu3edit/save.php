<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');
    $hari = $_POST['hari'];
    $mapel = $_POST['mapel'];
    $jam = $_POST['jam'];
    $gurumapel = $_POST['gurumapel'];

    $sql = "INSERT INTO mapelxiu3 SET hari='$hari', mapel='$mapel', jam='$jam', gurumapel='$gurumapel'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=xiu3edit&s=view');
    } else {
        include("index.php?m=xiu3edit");
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}