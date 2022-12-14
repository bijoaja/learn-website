<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'sakila';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    http_response_code(500);
    die("Koneksi gagal: {db->connect_error}");
}

$begin = isset($_GET['begin']) ? $_GET['begin'] : 0;
$query = "SELECT * FROM film LIMIT {$begin}, 12";
$sql = $db->query($query);

$data = [];
while ($row = $sql->fetch_assoc()) {
    $row['thumbnail'] = file_exists("https://picsum.photos/536/354") ? "https://picsum.photos/536/354" : "https://picsum.photos/536/354";
    array_push($data, $row);
}

header("Content-Type: application/json");
echo json_encode($data);
