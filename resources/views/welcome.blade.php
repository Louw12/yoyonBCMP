<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Yoyon Bagus - Laravel Developer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .hero {
      background: linear-gradient(to right, #0d6efd, #6610f2);
      color: white;
      padding: 3rem 0;
      text-align: center;
    }
    .hero img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      margin-bottom: 1rem;
    }
    section {
      padding-top: 2.5rem;
      padding-bottom: 2.5rem;
    }
    .section-divider {
      border-top: 1px solid #dee2e6;
      margin-top: 2rem;
      margin-bottom: 2rem;
    }
    .skill-badge {
      margin: 0.25rem;
    }
    .nav-link:hover {
      color: #0d6efd !important;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Yoyon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <div class="hero">
    <div class="container">
    <img src="{{ asset('images/Foto.png') }}" 
     alt="Foto Yoyon Bagus Andrianto" 
     class="rounded-circle shadow-lg border border-4 border-white mb-3"
     style="width: 200px; height: 200px; object-fit: cover;" />
      <h1 class="fw-bold">Yoyon Bagus Andrianto</h1>
      <p class="lead mb-0">Fullstack Laravel Developer</p>
    </div>
  </div>

  <div class="container">

    <!-- About -->
    <section id="about">
      <h2 class="h4 fw-bold text-dark">About Me</h2>
      <p class="text-muted">
        Fullstack Web Developer with expertise in Laravel and modern frontend technologies.
        Passionate about building efficient, scalable, and user-friendly web applications.
      </p>
      <div class="section-divider"></div>
    </section>

    <!-- Skills -->
    <section id="skills">
      <h2 class="h4 fw-bold text-dark">Skills</h2>
      <div class="d-flex flex-wrap">
        <span class="badge rounded-pill bg-primary skill-badge"><i class="bi bi-code-slash me-1"></i> Laravel</span>
        <span class="badge rounded-pill bg-secondary skill-badge">PHP</span>
        <span class="badge rounded-pill bg-info text-dark skill-badge">MySQL</span>
        <span class="badge rounded-pill bg-warning text-dark skill-badge">Bootstrap</span>
        <span class="badge rounded-pill bg-success skill-badge">RESTful API</span>
        <span class="badge rounded-pill bg-dark skill-badge">Git</span>
        <span class="badge rounded-pill bg-danger skill-badge">Docker</span>
      </div>
      <div class="section-divider"></div>
    </section>

    <!-- Experience -->
    <section id="experience">
      <h2 class="h4 fw-bold text-dark">Experience</h2>
      <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Fullstack Developer - MAN 2 KOTA KEDIRI</h5>
          <p class="text-muted">
            Developed web applications using Laravel and Vue.js, optimized APIs, and collaborated on scalable solutions.
          </p>
        </div>
      </div>
      <div class="section-divider"></div>
    </section>

    <!-- Projects -->
    <section id="projects">
      <h2 class="h4 fw-bold text-dark">Projects</h2>
      <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Profile & Management System - MAN 2 KOTA KEDIRI</h5>
          <p class="text-muted">
            Built with Laravel and Vue.js, featuring user registration, authentication for students, and an admin dashboard including a management system for school.
          </p>
          <a href="https://project-link.com" class="btn btn-outline-primary btn-sm" target="_blank">
            <i class="bi bi-box-arrow-up-right me-1"></i> View Project
          </a>
        </div>
      </div>
      <div class="section-divider"></div>
    </section>

    <!-- Contact -->
    <section id="contact" class="text-center">
      <h2 class="h4 fw-bold text-dark">Contact</h2>
      <p class="text-muted mb-3">Let's connect! Reach out for collaboration or inquiries.</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="mailto:yoyon.bagus99@gmail.com" class="btn btn-primary btn-sm"><i class="bi bi-envelope-fill me-1"></i> Email</a>
        <a href="https://github.com/Louw12" class="btn btn-outline-dark btn-sm" target="_blank"><i class="bi bi-github me-1"></i> GitHub</a>
        <a href="https://linkedin.com/in/yourusername" class="btn btn-outline-primary btn-sm" target="_blank"><i class="bi bi-linkedin me-1"></i> LinkedIn</a>
      </div>
    </section>

    <footer class="text-center py-4 mt-5 text-muted">
      &copy; {{ date('Y') }} Yoyon Bagus. All rights reserved.
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
