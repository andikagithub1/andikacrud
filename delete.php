<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: read.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
