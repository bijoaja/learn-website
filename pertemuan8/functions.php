<?php 

$conn = mysqli_connect("localhost","root","","sakila");
// $conn = mysqli_connect("localhost","202410103042","secret","uas202410103042");

function getData($query)
{
    global $conn;
    $hasil= mysqli_query($conn, $query);
     
    $penampung = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $penampung[] = $row;  
    }
    return $penampung;
}

function Duration($length) {
    $length = floatval($length) * 10;
    $minute = fmod($length, 60);
    $hour = $length - $minute;
    $hour /= 60;
    if ($hour == 0) {
        return "$minute m";
    } else {
        return "$hour h $minute m";
    }
}
?>