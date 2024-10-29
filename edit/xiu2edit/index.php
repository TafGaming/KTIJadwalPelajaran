<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view':
    default:
        include('edit/xiu2edit/view.php');
        break;
    case 'add':
        include('edit/xiu2edit/add.php');
        break;
    case 'save':
        include('edit/xiu2edit/save.php');
        break;
    case 'edit':
        include('edit/xiu2edit/edit.php');
        break;
    case 'update':
        include('edit/xiu2edit/update.php');
        break;
    case 'delete':
        include('edit/xiu2edit/delete.php');
        break;
}
