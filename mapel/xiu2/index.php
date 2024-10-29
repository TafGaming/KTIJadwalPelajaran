<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view':
    default:
        include('mapel/xiu2/view.php');
        break;
}
