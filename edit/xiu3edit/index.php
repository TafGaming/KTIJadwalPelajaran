<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view':
    default:
        include('edit/xiu3edit/view.php');
        break;
    case 'add':
        include('edit/xiu3edit/add.php');
        break;
    case 'save':
        include('edit/xiu3edit/save.php');
        break;
    case 'edit':
        include('edit/xiu3edit/edit.php');
        break;
    case 'update':
        include('edit/xiu3edit/update.php');
        break;
    case 'delete':
        include('edit/xiu3edit/delete.php');
        break;
}
