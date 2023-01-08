@extends('layouts.main')

@section('content')
  <div class="container vet spacing">
    <div class="row justify-content-between gx-5">
      <div class="col-6">
        <div class="underline position-relative d-flex">
          <h2>Vet</h2>
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
    <div class="row mt-1 gx-5">
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
              <h5>Dr. Tom Tobby</h5>
              <span class="text-white d-block">(+62)81255637235</span>
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
              <h5>Dr. Sindy Lau</h5>
              <span class="text-white d-block">(+62)81284862333</span>
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
              <h5>Dr. Anastasia Cain</h5>
              <span class="text-white d-block">(+62)8136653723</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card my-4 border-0" style="height: 420px">
          <div class="text-center card-img-vet">
            <img src="images/vet/caleb.png" class="p-2 img-vet" alt="..." />
          </div>
          <div class="text-center d-flex justify-content-center align-items-center card-body-vet">
            <div>
              <h5>Dr. Caleb Heller</h5>
              <span class="text-white d-block">(+62)81255686735</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card my-4 border-0" style="height: 420px">
          <div class="text-center card-img-vet">
            <img src="images/vet/kent.png" class="p-2 img-vet" alt="..." />
          </div>
          <div class="text-center d-flex justify-content-center align-items-center card-body-vet">
            <div>
              <h5>Dr. Kent Miller</h5>
              <span class="text-white d-block">(+62)81284866734</span>
              <span class="text-white d-block"><i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> <i class="fa-solid fa-bone bone"></i> 5/5</span>
              <a href="" class="btn btn-outline-light">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection