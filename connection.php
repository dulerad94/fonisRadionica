<?php

global $conn;
$conn = new mysqli('localhost','root', '' , 'radionica');
if($conn->connect_error) {
    die('Greska pri konekciji sa bazom');
}


?>