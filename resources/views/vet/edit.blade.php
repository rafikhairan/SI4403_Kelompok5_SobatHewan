@extends('layouts.vetdashboard')

@section('content')
  <div class="row justify-content-between">
    <div class="col-6">
      <div class="underline position-relative d-flex justify-content-between my-article">
        <h3>Edit Article</h3>
      </div>
    </div>
    <div class="col-6 text-end">
      <a href="/vetdashboard/articles" class="btn button-secondary">Back</a>
    </div>
  </div>
  <div class="mt-4 ps-1 pe-4 article-container">
    <form action="/vetdashboard/articles/create" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required autofocus value="{{ old('title') }}">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <img class="img-preview img-fluid mb-3 col-6" alt="">
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body" style="min-height: 200px"></trix-editor>
      </div>
      <div class="text-end">
        <button type="submit" class="btn button-primary">Edit Article</button>
      </div>
    </form>
  </div>
@endsection

@section('myscript')
  <script>
    function previewImage() {
      const image = document.getElementById('image');
      const imgPreview = document.querySelector('.img-preview');
      const oFReader = new FileReader();

      imgPreview.style.display = 'block';

      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
    
    document.addEventListener('trix-file-accept', function(e) {
      e.prevenDefault();
    })
  </script>
@endsection