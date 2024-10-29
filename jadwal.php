<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home':
    default:
        include('home.php');
        break;
    case 'mapel':
        include('mapel/index.php');
        break;
    case 'xiu1':
        include('mapel/xiu1/index.php');
        break;
    case 'xiu2':
        include('mapel/xiu2/index.php');
        break;
    case 'xiu3':
        include('mapel/xiu3/index.php');
        break;
    case 'edit':
        include('edit/view.php');
        break;
    case 'xiu1edit':
        include('edit/xiu1edit/index.php'); 
        break;
    case 'xiu2edit':
        include('edit/xiu2edit/index.php');
        break;
    case 'xiu3edit':
        include('edit/xiu3edit/index.php');
        break;
    }