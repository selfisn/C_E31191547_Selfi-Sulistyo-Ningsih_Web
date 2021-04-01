<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/bootstrap-4.0.0-dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <title>E31191547 - Selfi Sulistyo Ningsih</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        main>.container {
            padding: 60px 15px 0;
        }

        .on-hover:hover {
            color: lightslategray;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
            <div class="container-fluid mx-5">
                <a class="navbar-brand text-light">Pemrograman Web Framework</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if(uri_string()=='') echo "active"; ?>" aria-current="page" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(uri_string()=='Template') echo "active"; ?>" href="<?= base_url() ?>Template">Template</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(uri_string()=='mahasiswa') echo "active"; ?>" href="<?= base_url() ?>mahasiswa">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(uri_string()=='prodi') echo "active"; ?>" href="<?= base_url() ?>prodi">Prodi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(uri_string()=='angkatan') echo "active"; ?>" href="<?= base_url() ?>angkatan">Angkatan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>