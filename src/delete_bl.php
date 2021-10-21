<?php
include("constants.php");
$reci_id = $_GET['id'];
$sql = "DELETE FROM `BLOOD_RECIPIENT` WHERE reci_id = $reci_id";
$res = mysqli_query($conn, $sql);

if ($res == true) {
    header("location:index.php");
} else {
    header("location:index.php");
}
