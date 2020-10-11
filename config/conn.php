<?php
require'const.php';

$conn = mysqli_connect(servername, username, password, dbname);
if(!$conn) {
    die("Connection Failed " . mysqli_erroro($conn));
}