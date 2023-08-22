<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tugas 1 - Rosyid Eko Nugroho</title>
    <style>
        .judul {
            font-family: 'Raleway', sans-serif;
            font-style: italic;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="judul navbar-brand" href="#">
                <?php
                echo "<h4>Syiddd</h4>"
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-light" style="height: 91vh;">
        <img src="images/bahanfoto3.png" class="float-end" style="height: 91vh;" alt="..."">
        <div class="container bg-light">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center" style="height: 91vh;">
                    <div>
                        <?php
                        $nama = "Rosyid Eko Nugroho";
                        echo "<h5>Halo, Aku</h5>";
                        echo "<h1>".$nama."</h1>";
                        ?>
                        <h4><span id="element"></span></h4>
                        <button class="btn btn-secondary mt-3">Hubungi Saya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

        <script>
            var typed = new Typed('#element', {
                strings: ['Universitas Singaperbangsa Karawang', 'Informatika', 'Calon Web Developer'],
                typeSpeed: 60,
                backSpeed: 20,
                loop: true,
                showCursor: true
            });
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>