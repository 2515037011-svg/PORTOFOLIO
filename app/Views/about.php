<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | HloGaxz</title>
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
        h1 {
            font-family: Georgia, "Times New Roman", serif;
        }
        .portrait {
            aspect-ratio: 4 / 5;
            border-radius: 1rem;
            overflow: hidden;
        }
        .portrait img {
            display: block;
            height: 100%;
            object-fit: cover;
            width: 100%;
        }
        .eyebrow {
            color: #a74452;
            letter-spacing: .16em;
        }
        .bio .lead {
            color: #302b30;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 1.2rem;
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
                    <a class="nav-link" href="<?= site_url('work') ?>">Work</a>
                    <a class="nav-link active" href="<?= site_url('about') ?>" aria-current="page">About</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <section class="row align-items-center g-5" aria-labelledby="about-title">
            <div class="col-12 col-md-5">
                <div class="portrait position-relative overflow-hidden">
                    <img src="<?= esc(base_url($profile['image_path'])) ?>" alt="<?= esc($profile['alt_text']) ?>">
                </div>
            </div>
            <div class="col-12 col-md-7 bio">
                <p class="eyebrow small fw-bold text-uppercase mb-2">Kenalan lebih dekat</p>
                <h1 class="display-3 fw-normal mb-3" id="about-title">About</h1>
                <p class="lead lh-base">Halo, saya Kholiq Bagas Kusuma. Saya tertarik pada desain visual, fotografi, dan cara sebuah ide bisa terasa lewat gambar.</p>
                <p class="text-secondary lh-lg">Saya menikmati proses merancang karya dari awal: memahami cerita, mencari arah visual, lalu menyusun warna, bentuk, dan detailnya. Buat saya, desain yang baik bukan hanya menarik dilihat, tetapi juga terasa tepat untuk pesannya.</p>
                <p class="text-secondary lh-lg">Di halaman ini, kamu bisa mengenal karya dan pendekatan saya lebih jauh. Kalau ada ide yang ingin diwujudkan, mari mulai dari obrolan.</p>
                <div class="row g-3 border-top mt-4 pt-3" aria-label="Fokus kreatif">
                    <a class="col-4 small text-secondary text-decoration-none" href="https://wa.me/6289513866695" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                    <a class="col-4 small text-secondary text-decoration-none" href="https://www.instagram.com/_khlqbgzzz/" target="_blank" rel="noopener noreferrer">Instagram</a>
                    <a class="col-4 small text-secondary text-decoration-none" href="mailto:kusumabagas49@gmail.com">Email</a>
                </div>
                <a class="btn btn-outline-danger mt-4" href="<?= site_url('work') ?>">Lihat karya pilihan &rarr;</a>
            </div>
        </section>
    </main>

    <footer class="site-footer border-top py-4 text-center small">&copy; <?= date('Y') ?> HloGaxz</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
