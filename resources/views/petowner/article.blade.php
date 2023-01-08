@extends('layouts.main')

@section('content')
  <div class="container article spacing">
    <div class="row justify-content-between gx-5">
      <div class="col-6">
        <div class="underline position-relative">
          <h2>Article</h2>
        </div>
      </div>
      <div class="col-3 d-flex justify-content-end">
        <form action="" style="width: 100%">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn button-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="row align-items-center mt-3" style="margin-top: 35px">
      <div class="col-6">
        <img src="images/articles/article.jpg" class="img-thumbnail rounded-5 new-article-img" alt="">
      </div>
      <div class="col-6">
        <h4 class="mb-4 article-title">5 Tips on Dealing with High Energy Dogs</h4>
        <span class="text-muted">Tip 1: A Tired Dog is a Good Dog</span>
        <p class="text-muted">A tired dog is a good dog! A treadmill is a GREAT way to burn off a little extra energy before bedtime, on rainy days, or when you simply have a dog who needs a little extra burn before their daily excursions. I WALK my dogs predominately on the treadmill. The idea is not to get their fitness level so high that it exceeds your energy level, but to burn off a bit of energy in a slow, controlled fashion.</p>
        <a href="" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Read More <i class="bi bi-chevron-right ms-2"></i></a>
      </div>
    </div>
    <div class="row g-5" style="margin-top: 35px">
      <div class="col-md-4">
        <div class="card">
          <img src="images/articles/silentcat.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body mt-2">
            <h5 class="article-title">5 “Silent” Killers of Cats</h5>
            <p class="card-text text-muted mt-3">By following these basic tips, you can help keep your four-legged, feline friends healthy potentially for decades! But as cat guardians, you should also be aware of five “silent” killers in cats.</p>
            <a href="" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Read More <i class="bi bi-chevron-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/articles/silentcat.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body mt-2">
            <h5 class="article-title">5 “Silent” Killers of Cats</h5>
            <p class="card-text text-muted mt-3">By following these basic tips, you can help keep your four-legged, feline friends healthy potentially for decades! But as cat guardians, you should also be aware of five “silent” killers in cats.</p>
            <a href="" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Read More <i class="bi bi-chevron-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/articles/silentcat.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body mt-2">
            <h5 class="article-title">5 “Silent” Killers of Cats</h5>
            <p class="card-text text-muted mt-3">By following these basic tips, you can help keep your four-legged, feline friends healthy potentially for decades! But as cat guardians, you should also be aware of five “silent” killers in cats.</p>
            <a href="" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Read More <i class="bi bi-chevron-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/articles/silentcat.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body mt-2">
            <h5 class="article-title">5 “Silent” Killers of Cats</h5>
            <p class="card-text text-muted mt-3">By following these basic tips, you can help keep your four-legged, feline friends healthy potentially for decades! But as cat guardians, you should also be aware of five “silent” killers in cats.</p>
            <a href="" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Read More <i class="bi bi-chevron-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection