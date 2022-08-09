<?php

require_once("./functions.php");
require_once("./sort.php");

$data = query("SELECT * FROM fakultas ORDER BY animo $sort_option");

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
    <title>UTS PWEB</title>

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
          <form action="" method="GET">
            <div class="row">
              <div class="col-md-15">
                <div class="input-group mb-3">
                  <select name="sort_animo" class="form-control" id="">
                    <option value="">Pilih Sorting</option>
                    <option value="kecil" <?php if(isset($_GET['sort_animo']) && $_GET['sort_animo'] == "kecil"){echo "SELECTED";}?>>ASCENDING</option>
                    <option value="besar" <?php if(isset($_GET['sort_animo']) && $_GET['sort_animo'] == "besar"){echo "SELECTED";}?>>DESCENDING</option>
                  </select>
                  <button type="submit"class="input-group-text btn btn-primary" id="basic-addon2">Sorting</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </nav>

    <div class="container m-5 mx-auto" >
    <a href="tambah.php">Tambah data</a>
      <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark text-center">
          <tr>
            <th>FAKULTAS</th>
            <th>Jumlah Animo</th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody class="text-center">
            <?php $i = 0; ?>
              <?php foreach ($data as $DATA) : ?>
                <tr>
                  <td><?= $DATA["fakultas_name"]; ?></td>
                  <td><?= $DATA["animo"]; ?></td>
                  <td class="d-grid gap-2 d-md-flex justify-content-md-end ">
                      <button type="button" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-pencil-square"></i>
                        <a href="ubah.php?id=<?= $DATA["id"]; ?>">Edit</a>
                      </button>
                      <button type="button" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-trash"></i>
                        <a href="hapus.php?id=<?= $DATA["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data?');">Delete</a>
                      </button>
                  </td>
                </tr>
                  <?php

                  $i++;
                  ?>
              <?php endforeach; ?>
        </tbody>
      </table>   
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>