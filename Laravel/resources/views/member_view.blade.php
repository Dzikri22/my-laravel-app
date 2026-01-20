<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamFlix - Platform Streaming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --netflix-red: #e50914;
            --dark-bg: #141414;
        }

        body {
            background-color: var(--dark-bg);
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent) !important;
        }

        .navbar-brand {
            font-size: 1.8rem;
            color: var(--netflix-red) !important;
            letter-spacing: 1px;
        }

        .nav-link {
            color: #fff !important;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--netflix-red) !important;
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1497206365907-3ff1691d495a?w=1200&h=600&fit=crop') center/cover;
            height: 500px;
            display: flex;
            align-items: center;
            margin-bottom: 3rem;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 900;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }

        .card-movie {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }

        .card-movie img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card-movie:hover img {
            transform: scale(1.05);
        }

        .card-movie .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-movie:hover .overlay {
            opacity: 1;
        }

        .card-movie .overlay button {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .btn-danger {
            background-color: var(--netflix-red) !important;
            border-color: var(--netflix-red) !important;
        }

        .btn-danger:hover {
            background-color: #f40612 !important;
            box-shadow: 0 0 20px rgba(229, 9, 20, 0.5);
        }

        section h2 {
            font-size: 1.8rem;
            font-weight: 900;
            margin-bottom: 2rem;
        }

        footer {
            background-color: #1a1a1a;
            margin-top: 4rem;
            padding: 3rem 0 2rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-play-circle"></i> StreamFlix
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#trending">Trending</a></li>
                    <li class="nav-item"><a class="nav-link" href="#movies">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#series">Series</a></li>
                    @auth
                        <li class="nav-item ms-3">
                            <span class="nav-link">Welcome, {{ Auth::user()->name }}</span>
                        </li>
                        <li class="nav-item ms-2">
                            <form action="{{ route('auth.logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item ms-3">
                            <a href="{{ route('auth.login') }}" class="btn btn-danger btn-sm">Login</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a href="{{ route('auth.register') }}" class="btn btn-outline-danger btn-sm">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold text-white mb-3">Stranger Things</h1>
                    <p class="text-white mb-4 fs-5">
                        Ketika seorang anak hilang, teman-temannya, keluarganya, dan polisi lokal harus menghadapi kekuatan-kekuatan rahasia dan misteri yang gila.
                    </p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#playModal">
                            <i class="fas fa-play"></i> Putar
                        </button>
                        <button class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle"></i> Info Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Section -->
    <section id="trending" class="py-5">
        <div class="container-fluid px-4">
            <h2 class="text-white mb-4 fw-bold">Trending Sekarang</h2>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1485579149c0-123123ee63e0?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">The Crown</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Wednesday</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1533023666867-343c63602b59?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Dark Matter</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1551316679-9c6ae9dec224?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Breaking Bad</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Peppermint</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1594566403407-21d83a9c7e94?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">The Boys</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Movies Section -->
    <section id="movies" class="py-5">
        <div class="container-fluid px-4">
            <h2 class="text-white mb-4 fw-bold">Koleksi Film</h2>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Inception</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1488891455558-aa6cc42f3f66?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Interstellar</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1496681869696-d16b42c9b623?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Avatar</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1560169897-fc0cdbdfa4d5?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Dune</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Twisters</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1599566121604-c82a83a53fa0?w=300&h=450&fit=crop" alt="Movie" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Oppenheimer</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Series Section -->
    <section id="series" class="py-5">
        <div class="container-fluid px-4">
            <h2 class="text-white mb-4 fw-bold">Series Populer</h2>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?w=300&h=450&fit=crop" alt="Series" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Game of Thrones</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=450&fit=crop" alt="Series" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">The Office</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1516763981292-a393e3b6d9c9?w=300&h=450&fit=crop" alt="Series" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Friends</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1489599849228-8d85f179e8df?w=300&h=450&fit=crop" alt="Series" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Sherlock</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1520763185298-1b434c919eba?w=300&h=450&fit=crop" alt="Series" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Mindhunter</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card-movie">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=450&fit=crop" alt="Series" class="img-fluid rounded">
                        <div class="overlay">
                            <button class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <h6 class="text-white mt-2">Ozark</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark border-top border-secondary py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="text-white mb-3"><i class="fas fa-play-circle"></i> StreamFlix</h5>
                    <p class="text-muted small">Platform streaming terbaik untuk hiburan tanpa batas.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-white mb-3">Kategori</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-muted text-decoration-none">Film</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Series</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Documentary</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-white mb-3">Informasi</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-muted text-decoration-none">Tentang Kami</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Kontak</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-white mb-3">Ikuti Kami</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-muted small">
                <p>&copy; 2025 StreamFlix. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title text-white">Sign In</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="email" class="form-control bg-secondary border-secondary text-white" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" class="form-control bg-secondary border-secondary text-white" id="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Play Modal -->
    <div class="modal fade" id="playModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title text-white">Stranger Things</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/b9ncM3d68Jc" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>