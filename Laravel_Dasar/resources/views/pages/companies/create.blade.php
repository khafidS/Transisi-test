@extends('layouts.admin')

@section('content')
    <div class="container">
      <div class="card">
        <div class="card-header">
          <strong>Add Company</strong>
        </div>
        <div class="card-body card-block">
          <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama" class="form-control-label">Company Name</label>
              <input  type="text"
                      name="nama"
                      value="{{ old('nama') }}"
                      class="form-control @error('nama') is-invalid @enderror"/>
              @error('nama')
                <div class="text-muted">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="email" class="form-control-label">Email</label>
              <input  type="text"
                      name="email"
                      value="{{ old('email') }}"
                      class="form-control @error('email') is-invalid @enderror"/>
              @error('email')
                <div class="text-muted">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="website" class="form-control-label">Website</label>
              <input  type="text"
                      name="website"
                      value="{{ old('website') }}"
                      class="form-control @error('website') is-invalid @enderror"/>
              @error('website')
                <div class="text-muted">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="logo" class="form-control-label">Logo</label>
              <input  type="file"
                      name="logo"
                      value="{{ old('logo') }}"
                      accept="image/*"
                      class="form-control @error('logo') is-invalid @enderror"/>
              @error('logo')
                <div class="text-muted">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group w-50 mx-auto">
              <button class="btn btn-primary btn-block" type="submit">CREATE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection