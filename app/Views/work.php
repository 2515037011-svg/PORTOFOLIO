<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work | HloGaxz</title>
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
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .08em;
        }
        .navbar-nav .nav-link {
            color: #55494a;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #171416;
        }
        .eyebrow {
            color: #a74452;
            letter-spacing: .16em;
        }
        h1,
        h2,
        .art-label {
            font-family: Georgia, "Times New Roman", serif;
        }
        .intro {
            max-width: 600px;
        }
        .work-art {
            aspect-ratio: 4 / 3;
        }
        .work-art::before,
        .work-art::after {
            content: "";
            position: absolute;
        }
        .art-brand {
            background: linear-gradient(145deg, #edd6cc, #c58f83);
        }
        .art-brand::before {
            background: #fff8f1;
            border-radius: 50%;
            height: 70%;
            right: -14%;
            top: -18%;
            width: 70%;
        }
        .art-photo {
            background: linear-gradient(150deg, #8b9b8a, #e1bc93 52%, #8d5f4b);
        }
        .art-photo::before {
            background: #f5e8d0;
            border-radius: 50%;
            height: 36%;
            left: 18%;
            top: 16%;
            width: 36%;
        }
        .art-photo::after {
            background: #536a5d;
            border-radius: 50% 50% 0 0;
            bottom: -34%;
            height: 70%;
            right: 7%;
            width: 75%;
        }
        .art-editorial {
            background: #d7d4cb;
        }
        .art-editorial::before {
            background: #f4f0e9;
            height: 68%;
            transform: rotate(-8deg);
            width: 53%;
        }
        .art-editorial::after {
            background: #262827;
            height: 42%;
            transform: rotate(12deg);
            width: 25%;
        }
        .art-digital {
            background: linear-gradient(135deg, #9fb3bb, #4b6873);
        }
        .art-digital::before {
            border: 2px solid rgba(255, 255, 255, .75);
            border-radius: 50%;
            height: 70%;
            width: 70%;
        }
        .art-digital::after {
            background: #ffc1c3;
            border-radius: 50%;
            height: 28%;
            right: 18%;
            top: 18%;
            width: 28%;
        }
        .art-label {
            background: rgba(255, 255, 255, .88);
            color: #2a2527;
            font-size: 1.1rem;
        }
        .project-card:hover .card-title {
            color: #a74452;
        }
        .site-footer {
            color: #777178;
        }
    </style>
</head>
<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg container py-3" aria-label="Navigasi utama">
            <a class="navbar-brand brand text-dark" href="<?= site_url('/') ?>">HLOGAXZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= site_url('/') ?>">Home</a>
                    <a class="nav-link" href="<?= site_url('portofolio') ?>">Portofolio</a>
                    <a class="nav-link active" href="<?= site_url('work') ?>" aria-current="page">Work</a>
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <p class="eyebrow small fw-bold text-uppercase mb-2">Pilihan karya</p>
        <h1 class="display-3 fw-normal mb-3">Selected Work</h1>
        <p class="intro text-secondary lh-lg mb-0">Beberapa eksplorasi visual dari desain identitas, fotografi, editorial, dan karya digital.</p>

        <section class="row g-4 mt-4" aria-label="Pilihan karya">
            <article class="col-12 col-sm-6 col-lg-3">
                <a class="project-card card h-100 border-0 bg-transparent text-decoration-none text-reset" href="<?= site_url('work/brand-identity') ?>">
                    <div class="work-art art-brand d-flex align-items-center justify-content-center overflow-hidden position-relative p-3">
                        <span class="art-label position-relative z-1 px-3 py-2 text-center">Brand identity</span>
                    </div>
                    <div class="card-body px-0">
                        <h2 class="h5 card-title">Identitas visual</h2>
                        <p class="card-text small text-secondary lh-base">Logo, palet warna, dan arah visual sebuah brand.</p>
                        <span class="small fw-bold text-danger">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
            <article class="col-12 col-sm-6 col-lg-3">
                <a class="project-card card h-100 border-0 bg-transparent text-decoration-none text-reset" href="<?= site_url('work/photography') ?>">
                    <div class="work-art art-photo d-flex align-items-center justify-content-center overflow-hidden position-relative p-3">
                        <span class="art-label position-relative z-1 px-3 py-2 text-center">Photography</span>
                    </div>
                    <div class="card-body px-0">
                        <h2 class="h5 card-title">Fotografi</h2>
                        <p class="card-text small text-secondary lh-base">Permainan cahaya dan komposisi untuk bercerita.</p>
                        <span class="small fw-bold text-danger">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
            <article class="col-12 col-sm-6 col-lg-3">
                <a class="project-card card h-100 border-0 bg-transparent text-decoration-none text-reset" href="<?= site_url('work/editorial-design') ?>">
                    <div class="work-art art-editorial d-flex align-items-center justify-content-center overflow-hidden position-relative p-3">
                        <span class="art-label position-relative z-1 px-3 py-2 text-center">Editorial</span>
                    </div>
                    <div class="card-body px-0">
                        <h2 class="h5 card-title">Desain editorial</h2>
                        <p class="card-text small text-secondary lh-base">Tata letak dan tipografi untuk menyampaikan ide.</p>
                        <span class="small fw-bold text-danger">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
            <article class="col-12 col-sm-6 col-lg-3">
                <a class="project-card card h-100 border-0 bg-transparent text-decoration-none text-reset" href="<?= site_url('work/digital-artwork') ?>">
                    <div class="work-art art-digital d-flex align-items-center justify-content-center overflow-hidden position-relative p-3">
                        <span class="art-label position-relative z-1 px-3 py-2 text-center">Digital design</span>
                    </div>
                    <div class="card-body px-0">
                        <h2 class="h5 card-title">Karya digital</h2>
                        <p class="card-text small text-secondary lh-base">Eksperimen bentuk, warna, dan antarmuka digital.</p>
                        <span class="small fw-bold text-danger">Lihat galeri &rarr;</span>
                    </div>
                </a>
            </article>
        </section>
    </main>

    <footer class="site-footer border-top py-4 text-center small">&copy; <?= date('Y') ?> HloGaxz</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
