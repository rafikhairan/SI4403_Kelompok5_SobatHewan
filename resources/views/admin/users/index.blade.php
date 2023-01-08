@extends('layouts.admin')

@section('content')
  <div class="container mb-4 dashboard-title">
    <div class="underline position-relative">
      <h3 class="m-0 mb-5">Pet Owners</h3>
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
      </div>
    </div>
    <div class="col-12">
      <div class="container mt-3">
        @if (session()->has('success'))
          <div class='alert alert-success alert-dismissible' role='alert'>
            <span>{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if ($petOwners->count())   
          <div class="table-responsive" style="height: 31rem">
            <table class="table table-hover">
              <thead class="bg-white position-sticky top-0">
                <tr>
                  <th scope="col">Pet Owner ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Birth Date</th>
                  <th scope="col">Address</th>
                  {{-- <th scope="col">Location</th> --}}
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($petOwners as $petOwner)    
                  <tr>
                    <td scope="row">{{ $petOwner->pet_owner_id }}</td>
                    <td>{{ $petOwner->user->name }}</td>
                    <td>{{ $petOwner->user->email }}</td>
                    <td>{{ $petOwner->phone }}</td>
                    <td>{{ $petOwner->birth_date }}</td>
                    <td>{{ $petOwner->address }}</td>
                    <td>
                      <form action="/dashboard/vets/{{ $petOwner->per_owner_id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-regular fa-circle-xmark"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @else
          <div class="d-flex align-items-center justify-content-center" style="height: 450px">
            <h4 class="text-muted">There are no registered pet owners</h4>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection