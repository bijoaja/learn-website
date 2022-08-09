<?php
require_once("./database.php");
// echo "TES";
$searching = $_GET["search"];

$searchingrgx = "/($searching)/i";
foreach ($data as $DATA) {
    if (strlen($searching) > 0) {
        if (preg_match($searchingrgx, $DATA["Judul"]) || preg_match($searchingrgx, $DATA["Status"])) {

            echo "
            <center>
              <table>
                <tbody>
                  <tr>
                    <td>
                      <div class='col mt-5'>
                        <div class='card text-dark bg-light mb-3' style='max-width: 14rem'>
                          <img src='{$DATA["gambar"]}' class='card-img-top' alt='{$DATA["alt"]}' />
                          <div class='card-body'>
                            <h5 class='card-title'>{$DATA["Judul"]}</h5>
                            <p class='card-text'>{$DATA["Status"]}</p>
                            <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
                              <button type='button' class='btn btn-primary btn-sm'><i class='bi bi-pencil-square'></i></button>
                              <button class='btn btn-danger btn-sm me-md-2' type='button'><i class='bi bi-trash'></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </center>
            ";
        }
    } else {
        echo "
        <center>
              <table>
                <tbody>
                  <tr>
                    <td>
                      <div class='col mt-5'>
                        <div class='card text-dark bg-light mb-3' style='max-width: 14rem'>
                          <img src='{$DATA["gambar"]}' class='card-img-top' alt='{$DATA["alt"]}' />
                          <div class='card-body'>
                            <h5 class='card-title'>{$DATA["Judul"]}</h5>
                            <p class='card-text'>{$DATA["Status"]}</p>
                            <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
                              <button type='button' class='btn btn-primary btn-sm'><i class='bi bi-pencil-square'></i></button>
                              <button class='btn btn-danger btn-sm me-md-2' type='button'><i class='bi bi-trash'></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </center>
        ";
    }
};
