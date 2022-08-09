<?php 

require 'functions.php';
$id=$_GET['id'];

$film = getData("SELECT * FROM film WHERE film_id = '$id'")[0];

$bahasa = $film['language_id'];
$bahasa = getData("SELECT * FROM language WHERE language_id = $bahasa")[0]['name'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style2.css">
    <title>detail_film</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://www.instagram.com/bijoaja/" target="_blank">Joel Binsar Jupiter </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>/
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
                <button class="btn btn-success btn-danger" type="submit">Search</button>
            </form>
        </div>
      </div>
    </nav>

    <!-- awal konten -->
    <div id="content">
    <div class="container card mt-4 mb-4 justify-content-center" style="background-color: rgba(255, 247, 237, 0.97);">
        <div class="row" style="border: 0px solid brown;">
            <div class="card text-white bg-light mb-3" style="max-width: 20rem">
                <img src="../pertemuan7/assets/1.jpg" alt="">
            </div>
            <div class="col-md-6 detailFilm">
                <div class="row judul" style="border: 0px solid brown;">
                    <div class="col judul h3"><?= $film['title']; ?>(<?= $film['release_year']; ?>)</div>
                </div>
                <div class="row rating" style="border: 0px solid brown;">
                    <div class="col rating h6">
                    <span class="badge bg-info text-dark"><?= $film['rating']; ?></span> <?= $film['special_features']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-4" style="border: 0px solid brown;">
                        <div class="h6">Overview</div>
                    </div>
                </div>
                <div class="row deskripsi">
                    <div class="col" style="border: 0px solid brown;">
                        <?= $film['description']; ?>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col"  style="border: 0px solid brown;">Language</div>
                    <div class="col"  style="border: 0px solid brown;">Rental Duration</div>
                    <div class="col"  style="border: 0px solid brown;">Rental Rate</div>
                    <div class="col"  style="border: 0px solid brown;">Replacement Cost</div>
                </div>
                <div class="row">
                    <div class="col" style="border: 0px solid brown;">
                        <div class="h6"><?= $bahasa; ?></div>
                    </div>
                    <div class="col" style="border: 0px solid brown;">
                        <h6><?= Duration($film['rental_duration']); ?></h6>
                    </div>
                    <div class="col" style="border: 0px solid brown;">
                        <h6>$ <?= $film['rental_rate']; ?></h6>
                    </div>
                    <div class="col" style="border: 0px solid brown;">
                        <h6>$ <?= $film['replacement_cost']; ?></h6>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
            <a href="index.php" class="btn btn-primary"><i class="bi bi-arrow-left-circle me-1"></i>Kembali</a>
        </div>
        </div>
    </div>
    <!-- akhir konten -->

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Created by
                <a href="https://www.instagram.com/bijoaja/?hl=en" target="_blank">Joel Binsar Jupiter</a></span>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>