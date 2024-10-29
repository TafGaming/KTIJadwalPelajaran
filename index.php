<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>
    <link rel="shortcut icon" href="images/webpro.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href=".">
            <img src="images/pesat.jpeg" alt="Profile" height="50px">
            <span class="ms-1">Jadwal Pelajaran</span> <!-- Reduced margin -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-3 mb-2 mb-lg-0"> <!-- Reduced margin -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=".">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mapel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?m=xiu1">Kelas XI-U1</a>
                        <a class="dropdown-item" href="?m=xiu2">Kelas XI-U2</a>
                        <a class="dropdown-item" href="?m=xiu3">Kelas XI-U3</a>
                        <a class="dropdown-item" href="?m=edit">Edit</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-2">
    <?php include_once('jadwal.php'); ?>
</div>
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-2 col-lg-2 col-x1-2 mx-auto t-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Developer</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Thoriq Akhtar Febrian</a>
                    </p>
                </div>
                <div>
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Kontak</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> Jawa Barat, SMA Plus PGRI Cibinong
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> tafgaming2801@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> 0821123456789
                    </p>
                </div>
            </div>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>


</html>