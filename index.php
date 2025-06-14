<?php
include 'db.php';

// Fetch dynamic content
$services = $pdo->query("SELECT * FROM services ORDER BY id DESC")->fetchAll();
$team = $pdo->query("SELECT * FROM team ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Azmi Energy Ltd - Fuel Transport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Segoe UI', sans-serif; background-color: #f4f4f4; }
    .navbar { background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
    .navbar-brand img { height: 40px; }
    .nav-link { margin-left: 15px; font-weight: 500; }
    .hero {
      height: 100vh;
      background: linear-gradient(to bottom right, rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
                  url('uploads/background.jpg') center/cover no-repeat;
      color: white; display: flex; align-items: center; justify-content: center; flex-direction: column;
      text-align: center;
    }
    .hero h1 { font-size: 3.2rem; font-weight: bold; }
    section { padding: 60px 0; }
    footer { background: #222; color: #bbb; padding: 30px 0; }
    .card-img-top { height: 200px; object-fit: cover; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="uploads/logo.png" alt="Logo">
      <span class="ms-2 fw-bold text-dark">Azmi Energy</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="login.php"><a class="nav-link" href="admin/login.php">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="container text-center">
    <h1 data-aos="fade-up">Azmi Energy Ltd</h1>
    <p data-aos="fade-up" data-aos-delay="100">Your Trusted Fuel Transport Partner Across East & Central Africa</p>
    <a href="#contact" class="btn btn-warning mt-4" data-aos="fade-up" data-aos-delay="200">Get a Quote</a>
  </div>
</section>

<!-- About -->
<section id="about" class="bg-white">
  <div class="container">
    <h2 class="mb-4">About Us</h2>
    <p class="lead">Azmi Energy Ltd is a fuel logistics company based in Dar es Salaam, Tanzania. We provide professional cross-border fuel transportation across East and Central Africa including Congo, Rwanda, and Burundi.</p>
  </div>
</section>

<!-- Services -->
<section id="services" class="bg-light">
  <div class="container">
    <h2 class="mb-4">Our Services</h2>
    <div class="row">
      <?php foreach ($services as $srv): ?>
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="card shadow-sm h-100">
          <img src="uploads/<?= htmlspecialchars($srv['image']) ?>" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($srv['title']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($srv['description']) ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Team -->
<section id="team" class="bg-white">
  <div class="container">
    <h2 class="mb-4">Our Team</h2>
    <div class="row">
      <?php foreach ($team as $member): ?>
      <div class="col-md-4 mb-4" data-aos="zoom-in">
        <div class="card shadow-sm text-center h-100">
          <img src="uploads/<?= htmlspecialchars($member['image']) ?>" class="card-img-top" style="height:250px;" alt="">
          <div class="card-body">
            <h5><?= htmlspecialchars($member['name']) ?></h5>
            <p class="text-muted"><?= htmlspecialchars($member['role']) ?></p>
            <a href="<?= htmlspecialchars($member['whatsapp']) ?>" class="btn btn-sm btn-outline-success">WhatsApp</a>
            <a href="<?= htmlspecialchars($member['linkedin']) ?>" class="btn btn-sm btn-outline-primary">LinkedIn</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-light">
  <div class="container">
    <h2 class="mb-4">Contact Us</h2>
    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" placeholder="Your Email" required>
      </div>
      <div class="col-12">
        <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p>&copy; <?= date('Y') ?> Azmi Energy Ltd. All rights reserved.</p>
    <small>Website by Easy Technology</small>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>
