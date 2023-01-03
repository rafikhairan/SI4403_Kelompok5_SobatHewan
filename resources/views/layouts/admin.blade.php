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
</head>
<body>
  <div class="container-fluid">
    <div class="row min-vh-100">
      {{-- Awal Navbar Side --}}
      <div class="col-2 border-3 border-end">
        <div class="tes">
          <div class="text-center">
            <img class="mt-3" src="/images/logo.png" alt="Sobat Hewan" width="80%">
          </div>
          <nav class="side-nav ms-4 position-relative">
            <a class="nav-link mb-3 {{ Request::is('dashboard') ? 'active-link' : '' }}" href="/dashboard"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
            <a class="nav-link mb-3 {{ Request::is('dashboard/products') ? 'active-link' : '' }}" href="/dashboard/products"><i class="fa-solid fa-store me-2"></i>Products</a>
            <a class="nav-link mb-3 {{ Request::is('dashboard/orders') ? 'active-link' : '' }}" href="/dashboard/orders"><i class="fa-solid fa-cash-register me-2"></i>Orders</a>
            <div class="position-absolute admin-logout">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-danger border-1"><i class="fa-solid fa-right-from-bracket me-2"></i>Log Out</button>
              </form>
            </div>
          </nav>
        </div>
      </div>
      {{-- Akhir Navbar Side --}}

      {{-- Awal Content --}}
      <div class="col-10 dashboard">
        @yield('content')
      </div>
      {{-- Akhir Content --}}
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>