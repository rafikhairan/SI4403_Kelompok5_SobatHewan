@extends('layouts.admin')

@section('content')
  <div class="container mb-5">
    {{-- Awal Products --}}
    <div class="underline position-relative">
      <h3 class="m-0 mb-5">Products</h3>
    </div>
    <div class="row g-4">
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
    {{-- Akhir Products --}}

    {{-- Awal Modal --}}
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
    {{-- Akhir Modal --}}
  </div>

@endsection