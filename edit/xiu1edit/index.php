<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view':
    default:
        include('edit/xiu1edit/view.php');
        break;
    case 'add':
        include('edit/xiu1edit/add.php');
        break;
    case 'save':
        include('edit/xiu1edit/save.php');
        break;
    case 'edit':
        include('edit/xiu1edit/edit.php');
        break;
    case 'update':
        include('edit/xiu1edit/update.php');
        break;
    case 'delete':
        include('edit/xiu1edit/delete.php');
        break;
}
