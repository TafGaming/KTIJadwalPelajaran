<?php
$ip = $_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
$allowed_ips = array('123.45.67.89', '98.76.54.32', 'localhost', '182.3.42.138', '192.168.211.200', '255.255.255.0', '192.168.211.21', '::1');
if (in_array($ip, $allowed_ips)) {
    echo 'Welcome! IP Admin terdeteksi.';
} else {
    header('HTTP/1.1 403 Forbidden');
    exit('Forbidden: Terdeteksi bukan IP Address admin.');
}
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Mata Pelajaran (Admin Access)</div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <li><a href="?m=xiu1edit">Edit Kelas XI-U1</a></li>
                        <li><a href="?m=xiu2edit">Edit Kelas XI-U2</a></li>
                        <li><a href="?m=xiu3edit">Edit Kelas XI-U3</a></li>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>