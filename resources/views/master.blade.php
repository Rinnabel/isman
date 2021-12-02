<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Logo</a>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Pasien
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/form">Form Pasien</a>
          <a class="dropdown-item" href="/">List Pasien</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Ruang
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/ruang/form">Form Ruang</a>
          <a class="dropdown-item" href="/ruang/list">List Ruang</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Kamar
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/kamar/form">Form Kamar</a>
          <a class="dropdown-item" href="/kamar/list">List Kamar</a>
        </div>
      </li>
    </ul>
  </nav>
  
  <div class="container-fluid" style="margin-top:70px">

    @yield('content')

  </div>
</body>
</html>