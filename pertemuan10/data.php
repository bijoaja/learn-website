<?php
require_once("../pertemuan7/functions.php");

$data = query("SELECT * FROM film");
// echo "TES";
$searching = $_GET["search"];

$searchingrgx = "/($searching)/i";
foreach ($data as $DATA) :
  if (preg_match($searchingrgx, $DATA["title"]) || preg_match($searchingrgx, $DATA["rating"])) : ?>
    <!-- <?php var_dump($searching); ?> -->

    <div class="col mt-5">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
        <img class="card-img-top" src="https://picsum.photos/536/354" alt="">
        <div class="card-body">
          <h4 class="card-title"><?= $DATA["title"] ?></h4>
          <p class="card-text">Tahun rilis : <?= $DATA["release_year"] ?></p>
          <p class="card-text">Rating : <?= $DATA["rating"] ?></p>
          <p class="card-text"><?= $DATA["description"] ?></p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-outline-light btn-sm me-md-2" type="button"><i class="bi bi-trash"></i></button>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endforeach; ?>