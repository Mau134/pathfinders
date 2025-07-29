<?php include('includes/db.php'); include('includes/fetch.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pathfinders Publishing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>html { scroll-behavior: smooth; }</style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">African Pathfinders</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navMenu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#books" class="nav-link">Books</a></li>
        <li class="nav-item"><a href="#store" class="nav-link">Store</a></li>
        <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="hero" class="vh-100 d-flex align-items-center text-white text-center position-relative">
  <div class="hero-bg"></div>
  <div class="container position-relative z-1">
    <h1 class="display-3 fw-bold">African Pathfinders</h1>
    <p class="lead">Discover books that inspire, educate, and transform.</p>
    <a href="#books" class="btn btn-light mt-3">Browse Books</a>
  </div>
</section>


<!-- About Section -->
<section id="about" class="py-5 bg-light">
  <div class="container text-center">
    <h2>About Us</h2>
    <p class="lead">Pathfinders is committed to promoting local and international literary voices. We publish, promote, and distribute books that inspire and create mindset change.</p>
  </div>
</section>

<!-- Books Section -->
<section id="books" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Our Books</h2>
    <div class="row g-4">
      <?php foreach (getBooks() as $book): ?>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="assets/images/<?= $book['cover_image'] ?>" class="card-img-top" alt="<?= $book['title'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p class="card-text"><?= $book['author'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Store Section -->
<section id="store" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Buy Books</h2>
    <div class="row g-4">
      <?php foreach (getBooks() as $book): ?>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="assets/images/<?= $book['cover_image'] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p>Price: MWK <?= number_format($book['price'], 2) ?></p>
            <button class="btn btn-success w-100">Add to Cart</button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Blog Section -->
<section id="blog" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Blog & News</h2>
    <?php foreach (getPosts() as $post): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5><?= $post['title'] ?></h5>
        <p><?= nl2br($post['content']) ?></p>
        <p class="text-muted small">Posted on <?= date("F j, Y", strtotime($post['created_at'])) ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <form method="post" action="contact_process.php" class="mx-auto" style="max-width: 600px;">
      <div class="mb-3">
        <input name="name" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="mb-3">
        <input name="email" type="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
      </div>
      <button class="btn btn-primary w-100">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container text-center text-md-start">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5>Pathfinders Publishing</h5>
        <p>Your trusted source for books that inspire, educate, and entertain.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h6>Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#about" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="#books" class="text-white text-decoration-none">Books</a></li>
          <li><a href="#blog" class="text-white text-decoration-none">Blog</a></li>
          <li><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h6>Contact</h6>
        <p>Email: info@pathfinders.com</p>
        <p>Phone: +265 888 123 456</p>
        <div>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-light">
    <p class="text-center small mb-0">&copy; <?= date('Y') ?> Pathfinders Publishing. All rights reserved.</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
