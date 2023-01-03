@extends('layouts.main')

@section('content')
  {{-- Banner --}}
  <div class="container-fluid hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="hero-title">Taking care <br>for your Smart Pet!</h1>
          <a class="btn button-secondary px-3 py-2 mt-3 rounded-1" href="">Explore More <i class="bi bi-chevron-right ms-2"></i></a>
        </div>
        <div class="col-md-6 text-end">
          <img class="hero-img" src="images/hero-img.png" alt="">
        </div>
      </div>  
    </div>
  </div> 

  {{-- Services --}}
  <div class="container my-5">
    <div class="row justify-content-between">
      <div class="col-md-2 rounded-5 text-center shadow-sm service">
        <div class="pt-5" style="height: 70%">
          <img src="images/services/grooming.png" alt="Grooming" height="75px">
        </div>
        <div class="pb-5">
          <span>Grooming</span>
        </div>
      </div>
      <div class="col-md-2 rounded-5 text-center shadow-sm service">
        <div class="pt-5" style="height: 70%">
          <img src="images/services/healthcare.png" alt="Healthcare">
        </div>
        <div class="pb-5">
          <span>Healthcare</span>
        </div>
      </div>
      <div class="col-md-2 rounded-5 text-center shadow-sm service">
        <div class="pt-5" style="height: 70%">
          <img src="images/services/daycare.png" alt="Daycare">
        </div>
        <div class="pb-5">
          <span>Daycare</span>
        </div>
      </div>
      <div class="col-md-2 rounded-5 text-center shadow-sm service">
        <div class="pt-5" style="height: 70%">
          <img src="images/services/training.png" alt="Training">
        </div>
        <div class="pb-5">
          <span>Training</span>
        </div>
      </div>
      <div class="col-md-2 rounded-5 text-center shadow-sm service">
        <div class="pt-5" style="height: 70%">
          <img src="images/services/hyginic-care.png" alt="Hyginic Care">
        </div>
        <div class="pb-5">
          <span>Hyginic Care</span>
        </div>
      </div>
    </div>
  </div>

  {{-- Foods and Stuffs Recommendation --}}
  <div class="container my-5 foods-stuffs">
    <div class="underline position-relative">
      <h2>Foods and Stuffs Recommendation</h2>
    </div>
    <div class="row g-4 mt-3">
      <div class="col-3">
        <div class="card card-product" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="d-flex card-img">
            <img src="/images/products/whiskas.png" class="img-product m-auto" alt="..." />
          </div>
          <div class="card-body card-body-product d-flex align-items-center bg-light">
            <div>
              <span class="text-muted">Dry Food</span>
              <h5>Whiskas | 1.2kg</h5>
              <h5 class="fw-bold">Rp.70.000</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card card-product" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="d-flex card-img">
            <img src="/images/products/whiskas.png" class="img-product m-auto" alt="..." />
          </div>
          <div class="card-body card-body-product d-flex align-items-center bg-light">
            <div>
              <span class="text-muted">Dry Food</span>
              <h5>Whiskas | 1.2kg</h5>
              <h5 class="fw-bold">Rp.70.000</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card card-product" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="d-flex card-img">
            <img src="/images/products/whiskas.png" class="img-product m-auto" alt="..." />
          </div>
          <div class="card-body card-body-product d-flex align-items-center bg-light">
            <div>
              <span class="text-muted">Dry Food</span>
              <h5>Whiskas | 1.2kg</h5>
              <h5 class="fw-bold">Rp.70.000</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card card-product" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="d-flex card-img">
            <img src="/images/products/whiskas.png" class="img-product m-auto" alt="..." />
          </div>
          <div class="card-body card-body-product d-flex align-items-center bg-light">
            <div>
              <span class="text-muted">Dry Food</span>
              <h5>Whiskas | 1.2kg</h5>
              <h5 class="fw-bold">Rp.70.000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- New Article --}}
  <div class="container my-5 article">
    <div class="underline position-relative">
      <h2>New Article</h2>
    </div>
    <div class="row align-items-center" style="margin-top: 35px">
      <div class="col-6">
        <img src="images/articles/article.jpg" class="img-thumbnail rounded-5 new-article-img" alt="">
      </div>
      <div class="col-6">
        <h4 class="mb-4 article-title">5 Tips on Dealing with High Energy Dogs</h4>
        <span class="text-muted">Tip 1: A Tired Dog is a Good Dog</span>
        <p class="text-muted">A tired dog is a good dog! A treadmill is a GREAT way to burn off a little extra energy before bedtime, on rainy days, or when you simply have a dog who needs a little extra burn before their daily excursions. I WALK my dogs predominately on the treadmill. The idea is not to get their fitness level so high that it exceeds your energy level, but to burn off a bit of energy in a slow, controlled fashion.</p>
        <a href="{{URL::to('article')}}" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Read More <i class="bi bi-chevron-right ms-2"></i></a>
      </div>
    </div>
  </div>

  {{-- Vet --}}
  <div class="container mt-5 vet">
    <div class="underline position-relative">
      <h2>Vet</h2>
    </div>
    <div class="row mt-3 gx-5">
      <div class="col-3">
        <div class="card my-4 border-0" style="height: 420px">
          <div class="text-center card-img-vet">
            <img src="images/vet/anna.png" class="p-2 img-vet" alt="..." />
          </div>
          <div class="text-center d-flex justify-content-center align-items-center card-body-vet">
            <div>
              <h5>Dr. Anna Christine</h5>
              <span class="text-white d-block">(+62)81211433723</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card my-4 border-0" style="height: 420px">
          <div class="text-center card-img-vet">
            <img src="images/vet/tom.png" class="p-2 img-vet" alt="..." />
          </div>
          <div class="text-center d-flex justify-content-center align-items-center card-body-vet">
            <div>
              <h5>Dr. Anna Christine</h5>
              <span class="text-white d-block">(+62)81211433723</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card my-4 border-0" style="height: 420px">
          <div class="text-center card-img-vet">
            <img src="images/vet/sindy.png" class="p-2 img-vet" alt="..." />
          </div>
          <div class="text-center d-flex justify-content-center align-items-center card-body-vet">
            <div>
              <h5>Dr. Anna Christine</h5>
              <span class="text-white d-block">(+62)81211433723</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card my-4 border-0" style="height: 420px">
          <div class="text-center card-img-vet">
            <img src="images/vet/anastasia.png" class="p-2 img-vet" alt="..." />
          </div>
          <div class="text-center d-flex justify-content-center align-items-center card-body-vet">
            <div>
              <h5>Dr. Anna Christine</h5>
              <span class="text-white d-block">(+62)81211433723</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center mt-2">
        <a href="" class="btn button-secondary px-3 py-2 mt-3 rounded-1">Explore More <i class="bi bi-chevron-right ms-2"></i></a>
      </div>
    </div>
  </div>

  {{-- Modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detail</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row align-items-center">
            <div class="col-4 d-flex justify-content-center">
              <div class="rounded d-flex" style="width: 95%; height: 95%">
                <img src="/images/products/whiskas.png" class="img-product m-auto" alt="..." style="width: 240px" />
              </div>
            </div>
            <div class="col-8">
              <span class="text-muted">Dry Food</span>
              <h5>Whiskas | 1.2kg</h5>
              <h5 class="fw-bold my-3">Rp.70.000</h5>
              <h5>Description</h5>
              <div class="product-desc">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut impedit praesentium exercitationem sed eos maxime! Dicta et atque excepturi perspiciatis eum nobis repudiandae suscipit corporis rerum officia! Repudiandae, id praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique autem error enim repellat beatae in possimus, odit asperiores nostrum nemo natus, deserunt non aperiam officiis neque voluptate tempora pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore numquam, explicabo accusamus quasi quod nihil nam at modi. Odit ex, nobis architecto veritatis id illum similique recusandae vitae. Delectus, sed?</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bag-btn"><i class="bi bi-pencil"></i></button>
          <button type="submit" class="btn btn-danger"><i class="bi bi-eraser"></i></button>
        </div>
      </div>
    </div>
  </div>
@endsection