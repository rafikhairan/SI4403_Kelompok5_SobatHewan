@extends('layouts.admin')

@section('content')
  <div class="container mb-4 dashboard-title">
    {{-- Products --}}
    <div class="underline position-relative">
      <h3 class="m-0 mb-5">Products</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12 border border-2 border-start-0 border-end-0 py-2">
      <div class="container d-flex">
        <form action="" style="width: 100%">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="">
            <button class="btn button-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </form>
        <a href="products/create" class="btn button-secondary ms-2">Add</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-4">
      @if (session()->has('success'))
        <div class="col-12">
          <div class='alert alert-success alert-dismissible' role='alert'>
            <span>{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      @endif
      @if ($products->count())
        @foreach ($products as $product)    
          <div class="col-3 mb-4">
            <div class="card card-product" data-bs-toggle="modal" data-bs-target="#productDetail">
              <div class="d-flex card-img">
                <img src="{{ asset('storage/images/products/' . $product->image) }}" class="product-img m-auto" alt="..." />
              </div>
              <div class="card-body card-body-product d-flex align-items-center bg-light text-break rounded rounded-top-0">
                <div>
                  <span class="text-muted product-category">{{ $product->category->name }}</span>
                  <h5 class="product-name">{{ $product->name }}{{ $product->weight == null ? '' : ' | ' . $product->weight }}</h5>
                  <span class="my-2 d-block product-stock">Stock: {{ $product->stock }}</span>
                  <h5 class="fw-bold product-price">@currency($product->price)</h5>
                  <span class="product-slug d-none">{{ $product->slug }}</span>
                  <span class="product-description d-none">{{ $product->description  }}</span>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="d-flex align-items-center justify-content-center" style="height: 450px">
          <h4 class="text-muted">No product has been added</h4>
        </div>
      @endif
    </div>
  </div>
  
  {{-- Modal --}}
  <div class="modal fade" id="productDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content"></div>
    </div>
  </div>
@endsection

@section('myscript')
  <script>
    const products = document.querySelectorAll('.card-product');

    products.forEach((product) => {
      product.addEventListener('click', function() {
        const dataProduct = getProduct(this);
        updateModal(dataProduct);
      });
    });

    function getProduct(target) {
      return {
        image: target.querySelector('.product-img').getAttribute('src'),
        category: target.querySelector('.product-category').textContent,
        name: target.querySelector('.product-name').textContent,
        stock: target.querySelector('.product-stock').textContent,
        price: target.querySelector('.product-price').textContent,
        slug: target.querySelector('.product-slug').textContent,
        description: target.querySelector('.product-description').textContent
      };
    };

    function updateModal(dataProduct) {
      const modalContent = document.querySelector('.modal-content');
      modalContent.innerHTML = `
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="productDetail">Product Detail</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="row align-items-center">
            <div class="col-5 d-flex justify-content-center">
              <img src="${dataProduct.image}" class="modal-product-img m-auto" alt="..." />
            </div>
            <div class="col-7">
              <span class="text-muted">${dataProduct.category}</span>
              <h5>${dataProduct.name}</h5>
              <span class="d-block my-2 product-stock">${dataProduct.stock}</span>
              <h5 class="fw-bold mb-4">${dataProduct.price}</h5>
              <h5>Description</h5>
              <div class="product-desc-container">
                <span>${dataProduct.description}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="/dashboard/products/${dataProduct.slug}/edit" class="btn bag-btn"><i class="bi bi-pencil"></i></a>
          <form action="/dashboard/products/${dataProduct.slug}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-eraser"></i></button>
          </form>
        </div>`;
    };
  </script>
@endsection