@extends('layouts.vetdashboard')

@section('content')
  <div class="rounded-4 shadow bg-white vetdashboard-container" style="margin-top: 100px">
    <div class="p-4">
      <div class="row justify-content-between">
        <div class="col-4">
          <div class="underline position-relative d-flex justify-content-between my-article">
            <h3>Create New Article</h3>
          </div>
        </div>
        <div class="col-3 text-end">
          <a href="/vetdashboard/article" class="btn button-secondary">Back</a>
        </div>
      </div>
      <div class="mt-4 ps-1 pe-4 article-container">
        <form action="/dashboard/posts/" method="post" class="mb-4" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required autofocus value="{{ old('title') }}">
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') }}">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body" style="height: 200px"></trix-editor>
          </div>
          <div class="text-end">
            <button type="submit" class="btn button-primary">Create Post</button>
          </div>
        </form>
      </div>
    </div>
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