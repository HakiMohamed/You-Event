<!-- <h1>Hello, from view Home view</h1>

<img src="<//?//=//ROOT?>assets/img/Uchiha Madara Sticker _ Manga Clothes.jpeg" alt="Uchiha_Itachi"> 
<img src="<//?//=//ROOT?>assets/img/download.jpeg" alt="">
<img src="<//?//=//ROOT?>assets/img/Itachi Uchiha Magnet _ Itachi.jpeg" alt=""> -->

<h1><?= NAME ?></h1>

<!-- <a href="<?= ROOT ?>/home">Home</a>
<a href="<?= ROOT ?>/login">Login</a>
<a href="<?= ROOT ?>/about?">about</a> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouEvent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-around bg-danger">
        <div class="bg-success d-flex flex-column align-items-center">
            <a class="navbar-brand" href="#"><h1 class="text-primary"><span class="text-dark">You</span>Event</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="text-center w-50 bg-info" id="navbarSupportedContent">
            <ul class="navbar-nav bg-warning w-50 d-flex justify-content-around align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><h5>Home</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><h5>About</h5></a>
                </li>
                <li class="nav-item dropdown bg-danger">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h5>
                            Dropdown
                        </h5>
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">My Reservation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/login?name=<?= NAME ?>">log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

