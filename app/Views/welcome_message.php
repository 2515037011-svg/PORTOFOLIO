<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio fotografi dan desain visual HloGaxz.">
    <title>HloGaxz | Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style {csp-style-nonce}>
        body {
            background: #f7f5f1;
            color: #242126;
        }
        .site-header {
            background: #ffc1c3;
        }
        .brand {
            font-size: .95rem;
            font-weight: 700;
            letter-spacing: .08em;
        }
        .navbar-nav .nav-link {
            color: #55494a;
            font-size: .88rem;
        }
        .navbar-nav .nav-link:hover {
            color: #171416;
        }
        .hero-section {
            background-color: #f7f5f1;
            background-image:
                radial-gradient(ellipse at center, rgba(255, 255, 255, .9), rgba(255, 255, 255, 0) 68%),
                repeating-linear-gradient(0deg, rgba(73, 56, 48, .018) 0, rgba(73, 56, 48, .018) 1px, transparent 1px, transparent 4px);
            min-height: calc(100vh - 106px);
        }
        .hero-content {
            max-width: 900px;
        }
        .eyebrow {
            color: #51484c;
            letter-spacing: .22em;
        }
        .hero-section h1 {
            color: #870048;
            font-size: clamp(2.5rem, 11.5vw, 7.8rem);
            font-weight: 900;
            letter-spacing: -.075em;
            line-height: .95;
            text-shadow: 2px 3px 0 rgba(244, 157, 204, .45);
        }
        .signature {
            font-family: Georgia, "Times New Roman", serif;
            font-size: .9rem;
            letter-spacing: .22em;
        }
        .intro {
            color: #666168;
            max-width: 490px;
        }
        .cta {
            font-size: .72rem;
            letter-spacing: .12em;
            transition: background-color 180ms ease, transform 180ms ease;
        }
        .cta:hover {
            background: #a74452;
            transform: translateY(-2px);
        }
        .site-footer {
            color: #777178;
            font-size: .78rem;
        }
        @media (max-width: 600px) {
            .hero-section {
                min-height: calc(100vh - 120px);
            }
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
                    <a class="nav-link" href="<?= site_url('work') ?>">Work</a>
                    <a class="nav-link" href="<?= site_url('portofolio') ?>">Portofolio</a>
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="hero-section d-flex align-items-center justify-content-center position-relative overflow-hidden text-center px-4 py-5">
        <section class="hero-content position-relative z-1 w-100" aria-labelledby="hero-title">
            <p class="eyebrow small fw-bold text-uppercase mb-3">Photography &amp; visual design</p>
            <h1 class="display-1 mb-0" id="hero-title">PORTOFOLIO</h1>
            <p class="signature my-3">HLOGAXZ</p>
            <p class="intro mx-auto lh-lg mb-0">Fotografi dan desain visual untuk menangkap cerita, suasana, dan ide dalam setiap karya.</p>
            <a class="cta btn btn-dark rounded-0 fw-bold mt-4 px-4 py-3" href="<?= site_url('work') ?>">LET'S WORK</a>
        </section>
    </main>

    <footer class="site-footer border-top py-3 text-center">&copy; <?= date('Y') ?> HloGaxz</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
