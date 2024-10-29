<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $mapel = $_POST['mapel'];
    $jam = $_POST['jam'];
    $gurumapel = $_POST['gurumapel'];

    $sql = "UPDATE mapel SET hari='$hari', mapel='$mapel', jam='$jam' , gurumapel='$gurumapel' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=xiu1edit&s=view');
    } else {
        include("index.php?m=xiu1edit");
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Diperbarui.")';
        echo '</script>';
    }
}