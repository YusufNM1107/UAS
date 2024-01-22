<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ormawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/public-style.css">

</head>
<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid ">
                        <a class="navbar-brand" href="#">E-ORMAWA</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link menu-home" aria-current="page" href="index.php">Home</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link menu-ormawa" href="ormawa.php">Ormawa</a>
                            </li> -->

                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle menu-ormawa" href="#" id="ormawa-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ormawa
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ormawa-dropdown">
                                    <?php
                                        require_once '../include/koneksi.php';
                                        $sql = 'SELECT * FROM Kategori';
                                        $query = mysqli_query($conn, $sql);
                                        while($result = mysqli_fetch_assoc($query)) {
                                            echo '<li><a class="dropdown-item" href="ormawa.php?kat='.$result['id'].'">'.$result['Kategori'].'</a></li>';
                                        }
                                    ?>
                                    <!-- c
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-about" href="about.php">About</a>
                            </li>
                        </ul>
                        <span class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="../admin">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="../admin/home.php">Admin</a>
                                </li>
                            </ul> 
                        </span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="slide-ormawa" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slide-ormawa" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slide-ormawa" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slide-ormawa" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#slide-ormawa" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#slide-ormawa" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/car1.png" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="../img/car2.png" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="../img/car3.png" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="../img/car4.png" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="../img/car5.png" class="d-block w-100" >
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slide-ormawa" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slide-ormawa" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>