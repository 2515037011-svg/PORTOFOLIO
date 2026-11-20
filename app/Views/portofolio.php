<?php
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
$scriptPath = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');
$indexPage = trim(config('App')->indexPage, '/');
$siteBasePath = rtrim('/' . trim($scriptPath . '/' . $indexPage, '/'), '/');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | HloGaxz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f5f1;
            color: #222126;
        }
        .site-header {
            background: #ffc1c3;
        }
        .brand {
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: .08em;
        }
        .navbar-nav .nav-link {
            color: #000000;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #171416;
        }
        h1,
        h2,
        .art-window {
            font-family: Georgia, "Times New Roman", serif;
        }
        h1 {
            letter-spacing: -.06em;
        }
        .eyebrow {
            color: #a74452;
            letter-spacing: .18em;
        }
        .intro {
            max-width: 620px;
        }
        .project-art {
            aspect-ratio: 16 / 9;
            background: linear-gradient(135deg, #33235b, #b45f83);
        }
        article:nth-child(2) .project-art {
            background: linear-gradient(135deg, #163d45, #72b69c);
        }
        article:nth-child(3) .project-art {
            background: linear-gradient(135deg, #4a2d24, #e1a358);
        }
        article:nth-child(4) .project-art {
            background: linear-gradient(135deg, #242c55, #8298e3);
        }
        .project:hover .card-title {
            color: #a74452;
        }
        .art-window {
            background: rgba(16, 17, 20, .84);
            border: 1px solid rgba(255, 255, 255, .35);
            border-radius: 9px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, .25);
            color: #fff;
            font-size: clamp(1.1rem, 3vw, 2rem);
            font-weight: 700;
        }
        .site-footer {
            color: #777178;
        }
    </style>
</head>
<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg container py-3" aria-label="Navigasi utama">
            <a class="navbar-brand brand text-dark" href="<?= esc($siteBasePath . '/') ?>">HLOGAXZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= esc($siteBasePath . '/') ?>">Home</a>
                    <a class="nav-link active" href="<?= esc($siteBasePath . '/portofolio') ?>" aria-current="page">Portofolio</a>
                    <a class="nav-link" href="<?= esc($siteBasePath . '/work') ?>">Work</a>
                    <a class="nav-link" href="<?= esc($siteBasePath . '/about') ?>">About</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <p class="eyebrow small fw-bold text-uppercase mb-2">Pilihan karya</p>
        <h1 class="display-3 fw-normal mb-3">Portofolio desain</h1>
        <p class="intro text-secondary fs-5 lh-lg">Kumpulan eksplorasi desain visual dan digital. Halaman ini bisa kamu kembangkan dengan gambar dan detail proyek milikmu.</p>

        <section class="row g-4 mt-4" aria-label="Daftar proyek">
            <article class="col-12 col-md-6">
                <a class="project card h-100 border-0 shadow-sm text-decoration-none text-dark" href="<?= esc($siteBasePath . '/portofolio/brand-identity') ?>">
                    <div class="project-art d-flex align-items-center justify-content-center p-4">
                        <div class="art-window px-4 py-3 text-center">Brand Identity</div>
                    </div>
                    <div class="card-body p-4">
                        <h2 class="h5 card-title">Identitas Brand</h2>
                        <p class="card-text text-secondary lh-base mb-0">Eksplorasi logo, warna, dan tampilan visual untuk sebuah brand.</p>
                        <span class="d-inline-block small fw-bold text-danger mt-3">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
            <article class="col-12 col-md-6">
                <a class="project card h-100 border-0 shadow-sm text-decoration-none text-dark" href="<?= esc($siteBasePath . '/portofolio/ui-ux-design') ?>">
                    <div class="project-art d-flex align-items-center justify-content-center p-4">
                        <div class="art-window px-4 py-3 text-center">UI / UX Design</div>
                    </div>
                    <div class="card-body p-4">
                        <h2 class="h5 card-title">Desain Aplikasi</h2>
                        <p class="card-text text-secondary lh-base mb-0">Rancangan antarmuka aplikasi yang sederhana dan mudah digunakan.</p>
                        <span class="d-inline-block small fw-bold text-danger mt-3">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
            <article class="col-12 col-md-6">
                <a class="project card h-100 border-0 shadow-sm text-decoration-none text-dark" href="<?= esc($siteBasePath . '/portofolio/photography') ?>">
                    <div class="project-art d-flex align-items-center justify-content-center p-4">
                        <div class="art-window px-4 py-3 text-center">Photography</div>
                    </div>
                    <div class="card-body p-4">
                        <h2 class="h5 card-title">Fotografi</h2>
                        <p class="card-text text-secondary lh-base mb-0">Kumpulan foto dengan fokus pada komposisi, suasana, dan cerita.</p>
                        <span class="d-inline-block small fw-bold text-danger mt-3">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
            <article class="col-12 col-md-6">
                <a class="project card h-100 border-0 shadow-sm text-decoration-none text-dark" href="<?= esc($siteBasePath . '/portofolio/digital-artwork') ?>">
                    <div class="project-art d-flex align-items-center justify-content-center p-4">
                        <div class="art-window px-4 py-3 text-center">Digital Artwork</div>
                    </div>
                    <div class="card-body p-4">
                        <h2 class="h5 card-title">Karya Digital</h2>
                        <p class="card-text text-secondary lh-base mb-0">Eksperimen visual digital dengan warna dan bentuk yang ekspresif.</p>
                        <span class="d-inline-block small fw-bold text-danger mt-3">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
        </section>
    </main>

    <footer class="site-footer border-top py-4 text-center small">&copy; <?= date('Y') ?> HloGaxz</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
