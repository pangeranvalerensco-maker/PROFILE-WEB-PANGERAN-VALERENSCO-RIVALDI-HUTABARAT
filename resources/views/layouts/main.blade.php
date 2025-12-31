<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangeran Valerensco | Professional Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), #1a252f);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            color: white !important;
        }
        
        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            color: rgba(255,255,255,0.9) !important;
        }
        
        .nav-link:hover {
            color: var(--secondary-color) !important;
            transform: translateY(-2px);
        }
        
        .hero-section {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.95)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070');
            background-size: cover;
            background-position: center;
            color: white;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(52, 152, 219, 0.2), transparent 70%);
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
            color: var(--primary-color);
            font-weight: 700;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-bottom: none;
            font-weight: 600;
        }
        
        .badge-skill {
            background-color: #e3f2fd;
            color: var(--primary-color);
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
            margin: 5px;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .badge-skill:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: scale(1.05);
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color));
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--secondary-color);
        }
        
        footer {
            background: linear-gradient(135deg, var(--primary-color), #1a252f);
            color: white;
            margin-top: 80px;
            padding: 30px 0;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.2rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }
        
        .project-card {
            height: 100%;
            border-left: 4px solid var(--secondary-color);
        }
        
        .service-card {
            border-top: 4px solid var(--secondary-color);
        }
        
        .stat-card {
            text-align: center;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
                padding: 40px 20px !important;
            }
            
            .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-code-slash me-2"></i>Pangeran Valerensco
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-2" href="/">Home</a>
                    <a class="nav-link mx-2" href="/about">About</a>
                    <a class="nav-link mx-2" href="/services">Services</a>
                    <a class="nav-link mx-2" href="/portfolio">Portfolio</a>
                    <a class="nav-link mx-2" href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Pangeran Valerensco Rivaldi Hutabarat</h5>
                    <p class="mb-0">Mahasiswa | Aktivis Organisasi | Web Developer</p>
                    <p class="text-muted">Integrasi Teknologi & Manajemen Organisasi</p>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-icons">
                        <a href="http://github.com/pangeranvalerensco-maker" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="https://www.instagram.com/varelrivaldi_hutabarat/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/varel.rival.9" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="mailto:email@example.com"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-light my-3">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 Pangeran Valerensco Rivaldi Hutabarat. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add animation to cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>