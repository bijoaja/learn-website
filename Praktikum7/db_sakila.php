<?php
define("HOST","localhost");
define("USER","ifc202410103029");
define("PASS","secret");
define("DB","uas202410103029");

$db = new mysqli(HOST,USER,PASS,DB);
if ($db->connect_error) {
    //  akan dieksekusi ketika terjadi error
    die("Koneksi Gagal");
}

// define("HOST","localhost");
// define("USER","202410103010");
// define("PASS","secret");
// define("DB","uas202410103010");
