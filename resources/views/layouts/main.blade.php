<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/skill.css" />
    <link rel="stylesheet" href="css/pendidikan.css" />

    <link rel="shortcut icon" type="png" href="img/medicine.svg" />

    <!----===== link icon yang digunakan ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/645c6ff9e5.js" crossorigin="anonymous"></script>

    <title>ASL</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @include('partials.navbar')
    <section class="home">
    <div class="container">
        @yield('container')
     </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>
