<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view':
    default:
        include('mapel/xiu1/view.php');
        break;
}
