@extends('layouts.main')

@section('content')
  <div class="container spacing profile">
    <div class="position-relative underline">
      <h2>My Profile</h2>
    </div>
    <div class="edit-form">
      <div class="row mt-4 gx-5 position-relative">
        <div class="col-8">
          <div class="border border-2 rounded-4 p-4">
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
            </div>
            <div class="mb-2">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
            </div>
            <div class="mb-2">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}" readonly>
            </div>
            <div class="mb-2">
              <label for="birth_date" class="form-label">Birth Date</label>
              <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ auth()->user()->birth_date }}" readonly>
            </div>
            <div class="mb-2">
              <label for="address" class="form-label">Address</label>
              <textarea class="form-control" id="address" name="address" rows="4" readonly>{{ auth()->user()->address }}</textarea>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="border border-2 rounded-4 p-4 text-center">
            <img class="rounded-4 profile-picture" src="images/@if(auth()->user()->profile_picture != null){{ auth()->user()->profile_picture }}@else{{ "no-pp.jpg" }}@endif" alt="{{ auth()->user()->name }}"/>
          </div>
        </div>
        <div class="col-8 mt-4">
          <div class="position-relative underline">
            <h2>Change Password</h2>
          </div>
          <div class="border border-2 rounded-4 p-4 mt-4">
            <div class="mb-2">
              <label for="new_password" class="form-label">New Password</label>
              <input type="password" class="form-control" id="new_password" name="new_password" readonly>
            </div>
            <div class="mb-2">
              <label for="confirm_new_password" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" readonly>
            </div>
          </div>
        </div>
        <div class="position-absolute w-100 text-end edit">
          <button class="btn button-primary edit-btn">Edit Profile</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('myscript')
  <script>
    const editButton = document.querySelector(".edit-btn");
    const editForm = document.querySelector(".edit-form");
    const editFormContent = /* HTML */ `
    <form action="/myprofile" method="post">
      @csrf
      <div class="row mt-4 gx-5 position-relative">
        <div class="col-8">
          <div class="border border-2 rounded-4 p-4">
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" autofocus>
            </div>
            <div class="mb-2">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
            </div>
            <div class="mb-2">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}">
            </div>
            <div class="mb-2">
              <label for="birth_date" class="form-label">Birth Date</label>
              <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ auth()->user()->birth_date }}">
            </div>
            <div class="mb-2">
              <label for="address" class="form-label">Address</label>
              <textarea class="form-control" id="address" name="address" rows="4">{{ auth()->user()->address }}</textarea>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="border border-2 rounded-4 p-4 text-center">
            <img class="rounded-4 profile-picture img-preview" alt="Profile Picture Preview" style="display: none" />
            <label for="image" class="position-relative bg-light change-img">
              <i class="fa-solid fa-plus"></i>
            </label>
            <input type="file" class="d-none" name="image" id="image" accept="image/*" onchange="previewImage()" />
          </div>
        </div>
        <div class="col-8 mt-4">
          <div class="position-relative underline">
            <h2>Change Password</h2>
          </div>
          <div class="border border-2 rounded-4 p-4 mt-4">
            <div class="mb-2">
              <label for="new_password" class="form-label">New Password</label>
              <input type="password" class="form-control" id="new_password" name="new_password">
            </div>
            <div class="mb-2">
              <label for="confirm_new_password" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password">
            </div>
          </div>
        </div>
        <div class="position-absolute w-100 text-end edit">
          <button type="submit" class="btn button-primary">Save</button>
        </div>
      </div>
    </form>`

    editButton.addEventListener("click", () => {
      editForm.innerHTML = editFormContent;
    });

    function previewImage() {
      const image = document.getElementById('image');
      const imgPreview = document.querySelector('.img-preview');
      const changeImg = document.querySelector('.change-img');
      const oFReader = new FileReader();

      imgPreview.style.display = 'block';

      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
        changeImg.style.display = 'none';
    }
  }
  </script>
@endsection

