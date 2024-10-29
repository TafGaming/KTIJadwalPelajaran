<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM mapelxiu3 WHERE id='$id'";
$result =  mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=xiu3edit&s=view');
} else {
    include "index.php?m=xiu3edit&s=view";
    echo '<script language="JavaScript">';
    echo 'alert("Data Gagal Dihapus.")';
    echo '</script>';
}