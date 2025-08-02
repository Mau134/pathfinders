<?php
include '../includes/db.php'; // ✅ Corrected filename

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $price = $_POST['price'];
  $cover_image = $_FILES['cover_image']['name'];

  move_uploaded_file($_FILES['cover_image']['tmp_name'], "../assets/images/$cover_image");

  $stmt = $mysqli->prepare("INSERT INTO books (title, author, price, cover_image) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssds", $title, $author, $price, $cover_image);
  $stmt->execute();
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h4 class="mb-0">Add a New Book</h4>
    </div>
    <div class="card-body">
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Author</label>
          <input type="text" name="author" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Price (MWK)</label>
          <input type="number" name="price" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Cover Image</label>
          <input type="file" name="cover_image" class="form-control" required>
        </div>

        <button class="btn btn-success" type="submit">Save Book</button>
        <a href="index.php" class="btn btn-secondary ms-2">Back to Dashboard</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>
