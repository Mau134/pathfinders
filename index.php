<?php include('includes/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>African Pathfinders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>html { scroll-behavior: smooth; }</style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">African Pathfinders</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navMenu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">Authors</a></li>
        <li class="nav-item"><a href="#books" class="nav-link">Books</a></li>
        <li class="nav-item"><a href="#store" class="nav-link">Store</a></li>
        <li class="nav-item"><a class="nav-link" href="#poetry">Poetry</a></li>
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


<section id="about" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Authors</h2>

    <div class="row align-items-center">
      <!-- CEO Image -->
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="assets/images/Bright Molande.jpg" 
     alt="Dr Bright Molande" 
     class="shadow" 
     style="width: 250px; height: 250px; border-radius: 50%; object-fit: cover;">

      </div>

      <!-- CEO Info -->
      <div class="col-md-8">
        <h3 class="mb-3">Bright Molande</h3>
        <p>
          Bright Molande lectures in Literature at the University of Malawi, after earning his Masters and Doctorate at the University of Essex. 
          He is a published poet, with some poetry discussed in academic circles in Africa and the US. Now he returns 
          with a conscience-probing pen rewriting memories and voices. Pain finds pleasure in the sublime of tragedy
        </p>
        <p>
This poetry demonstrates well-versed creativity, high imagination and deep agony but delivered in pleasures of intertextuality, poetics of repetition, 
rewriting mythology and at times reinventing poetic form. This is a new voice of African poetry, sublime imagination soothing beyond the agony of tragic lamentations. 
It's poetry that comes once in a generation.        </p>
      </div>
    </div>
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
    <h2 class="text-center mb-4">Store</h2>
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

<section id="poetry" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Poetry</h2>
    <div class="row g-4">
      
      <!-- Poetry Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Whispers of Ink</h5>
            <p class="card-text">
              In pages worn and stories old,  
              Our words take root, our thoughts unfold.  
              The poet’s hand, both bold and kind,  
              Weaves tales of heart and soul and mind.
            </p>
          </div>
        </div>
      </div>

      <!-- Poetry Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Bound in Verse</h5>
            <p class="card-text">
              Between each rhyme, a truth is found,  
              Soft echoes carried, sound to sound.  
              Let poetry be the voice we lend,  
              To every dream we dare defend.
            </p>
          </div>
        </div>
      </div>

      <!-- Poetry Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Echoes of Thought</h5>
            <p class="card-text">
              Beneath the stars, within the night,  
              Our musings drift on winds of light.  
              A poet's pen, a soulful guide,  
              To where our hopes and fears reside.
            </p>
          </div>
        </div>
      </div>

    </div>
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
<script>
  // Add .scrolled class to navbar on scroll
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>

</body>
</html>
