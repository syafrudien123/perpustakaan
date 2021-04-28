<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?= base_url() ?>">Perpustakaan #01</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('buku') ?>">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penerbit') ?>">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penulis') ?>">Penulis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('siswa') ?>">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kategori') ?>">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin</a>
                    </li>
                </ul>
            </div>
        </nav>