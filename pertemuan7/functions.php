<?php

try {
    // $conn = mysqli_connect("localhost", "202410103042", "secret", "uas202410103042");
    $conn = mysqli_connect("localhost", "root", "", "sakila");
} catch(PDOException $e) {
    echo "err: " . $e->getMessage();
}
?>

<?php
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>