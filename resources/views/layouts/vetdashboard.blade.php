<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sobat Hewan</title>
  {{-- My CSS --}}
  <link rel="stylesheet" href="/css/style.css">
  
  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  {{-- Icon --}}
  <link rel="icon" type="png" href="/images/web-icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/5173488c2b.js" crossorigin="anonymous"></script>

  {{-- Trix --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
</head>
<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #A0D6E7">
    <div class="container pb-2">
      <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="Logo" width="200px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav align-items-center ms-auto navbar-end">
          <a class="nav-link mx-2 {{ Request::is('vetdashboard') ? 'active-link' : '' }}" href="/vetdashboard">Appointment</a>
          <a class="nav-link mx-2 {{ Request::is('vetdashboard/article*') ? 'active-link' : '' }}" href="/vetdashboard/article">Article</a>
          <div class="nav-item dropdown">
            <a class="nav-link align-items-center d-flex {{ Request::is('myprofile') || Request::is('petprofile') ? 'active-link' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vet <img class="ms-2 rounded-circle nav-profile-picture" src="/images/no-pp.jpg" alt="Profile Picture">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/myprofile"><i class="fa-solid fa-user me-2"></i> My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item logout"><i class="fa-solid fa-right-from-bracket me-2"></i>Log Out</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  {{-- Content --}}
  <div class="container-fluid" style="background-color: #A0D6E7">
    <div class="container">
      <div class="row min-vh-100">
        <div class="col-3">
          <div class="left-side-vet">
            <img src="/images/vet/ilustration.png" alt="">
          </div>
        </div>
        <div class="col-9">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  {{-- My Script --}}
  @yield('myscript')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>