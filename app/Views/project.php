<?php
$sectionPath = $project['sectionPath'];
$sectionLabel = $project['sectionLabel'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($project['title']) ?> | HloGaxz</title>
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
        h1,
        .gallery-caption {
            font-family: Georgia, "Times New Roman", serif;
        }
        .eyebrow {
            color: #a74452;
            letter-spacing: .16em;
        }
        .gallery-image {
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }
        .gallery-button {
            border: 0;
            display: block;
            overflow: hidden;
            padding: 0;
            width: 100%;
        }
        .gallery-button:hover .gallery-image,
        .gallery-button:focus-visible .gallery-image {
            transform: scale(1.02);
        }
        .gallery-image,
        #galleryModalImage {
            transition: transform 180ms ease;
        }
        #galleryModalImage {
            max-height: 82vh;
            object-fit: contain;
        }
        .gallery-modal {
            --bs-modal-bg: rgba(20, 18, 20, .96);
        }
        .gallery-modal .modal-content {
            background: transparent;
        }
        .gallery-modal .modal-header,
        .gallery-modal .modal-footer {
            border: 0;
        }
        .gallery-modal .modal-body {
            position: relative;
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
                    <a class="nav-link <?= $sectionPath === 'portofolio' ? 'active' : '' ?>" href="<?= site_url('portofolio') ?>" <?= $sectionPath === 'portofolio' ? 'aria-current="page"' : '' ?>>Portofolio</a>
                    <a class="nav-link <?= $sectionPath === 'work' ? 'active' : '' ?>" href="<?= site_url('work') ?>" <?= $sectionPath === 'work' ? 'aria-current="page"' : '' ?>>Work</a>
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <nav aria-label="Breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="<?= site_url($sectionPath) ?>"><?= esc($sectionLabel) ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= esc($project['title']) ?></li>
            </ol>
        </nav>

        <p class="eyebrow small fw-bold text-uppercase mb-2">Galeri karya</p>
        <h1 class="display-3 fw-normal mb-3"><?= esc($project['title']) ?></h1>
        <p class="text-secondary lh-lg mb-0"><?= esc($project['description']) ?></p>

        <section class="row g-4 mt-4" aria-label="Galeri <?= esc($project['title']) ?>">
            <?php if ($images === []): ?>
                <div class="col-12">
                    <div class="alert alert-light border mb-0" role="status">
                        Belum ada gambar. Tambahkan file JPG, JPEG, PNG, atau WebP ke folder
                        <code><?= esc($project['galleryDirectory']) ?></code>.
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($images as $image): ?>
                    <figure class="col-12 col-sm-6 col-lg-4 mb-0">
                        <button type="button" class="gallery-button bg-transparent rounded shadow-sm" data-gallery-src="<?= esc($image['src']) ?>" data-gallery-alt="<?= esc($image['alt']) ?>" aria-label="Perbesar <?= esc($image['alt']) ?>">
                            <img class="gallery-image img-fluid w-100 rounded" src="<?= esc($image['src']) ?>" alt="<?= esc($image['alt']) ?>" loading="lazy">
                        </button>
                    </figure>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>

        <a class="btn btn-outline-danger mt-5" href="<?= site_url($sectionPath) ?>">&larr; Kembali ke <?= esc($sectionLabel) ?></a>
    </main>

    <?php if ($images !== []): ?>
        <div class="modal fade gallery-modal" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-6 text-light" id="galleryModalLabel"><?= esc($project['title']) ?></h2>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center p-2">
                        <button type="button" class="btn btn-light gallery-navigation position-absolute start-0 ms-2 ms-md-4" id="galleryPrevious" aria-label="Foto sebelumnya">&lsaquo;</button>
                        <img id="galleryModalImage" class="img-fluid" src="" alt="">
                        <button type="button" class="btn btn-light gallery-navigation position-absolute end-0 me-2 me-md-4" id="galleryNext" aria-label="Foto berikutnya">&rsaquo;</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <footer class="site-footer border-top py-4 text-center small">&copy; <?= date('Y') ?> HloGaxz</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php if ($images !== []): ?>
        <script>
            (() => {
                const buttons = [...document.querySelectorAll('[data-gallery-src]')];
                const modalElement = document.getElementById('galleryModal');
                const modalImage = document.getElementById('galleryModalImage');
                const modal = bootstrap.Modal.getOrCreateInstance(modalElement);
                let currentIndex = 0;

                const showImage = (index) => {
                    currentIndex = (index + buttons.length) % buttons.length;
                    modalImage.src = buttons[currentIndex].dataset.gallerySrc;
                    modalImage.alt = buttons[currentIndex].dataset.galleryAlt;
                };

                buttons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        showImage(index);
                        modal.show();
                    });
                });

                document.getElementById('galleryPrevious').addEventListener('click', () => showImage(currentIndex - 1));
                document.getElementById('galleryNext').addEventListener('click', () => showImage(currentIndex + 1));

                modalElement.addEventListener('keydown', (event) => {
                    if (event.key === 'ArrowLeft') showImage(currentIndex - 1);
                    if (event.key === 'ArrowRight') showImage(currentIndex + 1);
                });
            })();
        </script>
    <?php endif; ?>
</body>
</html>
