<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>
        <?= $title; ?>
    </title>
</head>

<body>
    <div class="container border border-3 rounded">
        <h1 class="mt-3 mb-3">PENDAFTARAN ASISTEN PRAKTIKUM</h1>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded mb-3">
            <div class="container-fluid">
                <a class="navbar-brand">Asisten Praktikum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/asisten">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/asisten/simpan">Simpan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/asisten/update">Update</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/asisten/delete">Delete</a>
                        </li>
                    </ul>
                    <form action="/asisten/search" method="post" class="d-flex">
                        <?= csrf_field() ?>
                        <input type="text" name="key" placeholder="Masukkan NIM" class="form-control-sm">
                        <input type="submit" name="submit" value="Search" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </nav>