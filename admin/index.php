<?php
include '../includes/db.php'; // connection to database
$books = getBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h1>Admin Dashboard</h1>
    <a href="add-book.php" class="btn btn-primary mb-3">Add New Book</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Cover</th><th>Title</th><th>Author</th><th>Price</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
          <td><img src="../assets/images/<?= $book['cover_image'] ?>" width="50"></td>
          <td><?= $book['title'] ?></td>
          <td><?= $book['author'] ?></td>
          <td>MWK <?= number_format($book['price'], 2) ?></td>
          <td>
            <!-- You can add edit/delete buttons later -->
            <a href="delete-book.php?id=<?= $book['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
