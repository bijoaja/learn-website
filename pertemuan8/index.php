<?php

require_once("functions.php");

$data = getData("SELECT * FROM film");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Pertemuan 8</title>
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

    <div class="container m-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-4 g-5" id="main-content">

            <?php $i = 0; ?>
            <?php foreach ($data as $DATA) : ?>

                <div class="col mt-5">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
                        <img class="card-img-top" src="../pertemuan7/assets/1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?= $DATA["title"] ?></h4>
                            <p class="card-text">Tahun rilis : <?= $DATA["release_year"] ?></p>
                            <p class="card-text">Rating : <?= $DATA["rating"] ?></p>
                            <p class="card-text"><?= $DATA["description"] ?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-outline-light btn-sm me-md-2" type="button"><i class="bi bi-trash"></i></button>
                                <a href="../pertemuan8\detail_film.php?id=<?= $DATA["film_id"]; ?>" class="btn btn-primary">Detail film</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                $i++;
                if ($i == 12) {
                    break;
                };
                ?>
            <?php endforeach; ?>

        </div>
    </div>

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