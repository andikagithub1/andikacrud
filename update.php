<<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: read.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="mt-5">Update Data Pengguna</h1>
        <form method="POST" class="mt-3">
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="<?= $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" value="<?= $row['email']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        <a href="read.php" class="btn btn-link mt-3">Kembali</a>
    </div>
</body>
</html>
