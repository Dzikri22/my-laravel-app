<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamFlix - Platform Streaming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg sticky-top" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), transparent);">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-play-circle"></i> StreamFlix
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#trending">Trending</a></li>
                    <li class="nav-item"><a class="nav-link" href="#movies">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#series">Series</a></li>
                    <li class="nav-item ms-3">
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#signInModal">
                            Sign In
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1497206365907-3ff1691d495a?w=1200&h=600&fit=crop') center/cover; height: 500px; display: flex; align-items: center;">
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
                        <small class="text-muted">Drama, Historical</small>
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
                        <small class="text-muted">Fantasy, Comedy</small>
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
                        <small class="text-muted">Sci-Fi, Mystery</small>
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
                        <small class="text-muted">Drama, Crime</small>
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
                        <small class="text-muted">Action, Thriller</small>
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
                        <small class="text-muted">Action, Comedy</small>
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
                        <small class="text-muted">Sci-Fi, Thriller</small>
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
                        <small class="text-muted">Sci-Fi, Adventure</small>
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
                        <small class="text-muted">Sci-Fi, Action</small>
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
                        <small class="text-muted">Sci-Fi, Adventure</small>
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
                        <small class="text-muted">Action, Disaster</small>
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
                        <small class="text-muted">Biography, Drama</small>
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
                        <small class="text-muted">Fantasy, Drama</small>
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
                        <small class="text-muted">Comedy</small>
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
                        <small class="text-muted">Comedy, Romance</small>
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
                        <small class="text-muted">Mystery, Crime</small>
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
                        <small class="text-muted">Drama, Crime</small>
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
                        <small class="text-muted">Drama, Crime</small>
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
                        <li><a href="#" class="text-muted text-decoration-none">Stand-up</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-white mb-3">Informasi</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-muted text-decoration-none">Tentang Kami</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Kontak</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-white mb-3">Ikuti Kami</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-muted text-decoration-none"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-muted small">
                <p>&copy; 2025 StreamFlix. All rights reserved. | Design by Your Company</p>
            </div>
        </div>
    </footer>

    <!-- Modals -->
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
                            <input type="email" class="form-control bg-secondary border-secondary text-white" id="email" placeholder="your@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" class="form-control bg-secondary border-secondary text-white" id="password" placeholder="••••••••">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remember" checked>
                            <label class="form-check-label text-muted" for="remember">
                                Remember me
                            </label>
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
