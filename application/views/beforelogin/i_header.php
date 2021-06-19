<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- CSS Saya -->
    <link rel="stylesheet" href="<?= base_url('assets');?>/style.css" />

    <title>MyPharm</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets');?> /img/Frame 32.png" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="<?= base_url('assets');?> /img/Logo Navbar.png" alt="" width="115" height="50" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('before_shop');?>">Shop</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown07">
                <li><a class="dropdown-item" href="#">Pharmacy</a></li>
                <li><a class="dropdown-item" href="#">Personal Care</a></li>
                <li><a class="dropdown-item" href="#">Family Care</a></li>
                <li><a class="dropdown-item" href="#">Accessories</a></li>
                <li><a class="dropdown-item" href="#">Fitness</a></li>
                <li><a class="dropdown-item" href="#">Health Devices</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <form>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
          </form>
          <a class="btn btn-primary mx-2" href="<?= base_url('auth/register');?>">Sign Up</a>
            <a class="btn btn-outline-primary" href="<?= base_url('auth');?>">Login</a>
            <a class="btn btn-labeled btn-primary mx-2" href="<?= base_url('before_cart');?>">
              <span class="iconify" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9"></span>
              Cart
            </a>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->