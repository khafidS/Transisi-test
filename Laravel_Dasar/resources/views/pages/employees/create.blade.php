@extends('layouts.admin')

@section('content')
    <div class="container">
      <div class="card">
        <div class="card-header">
          <strong>Add Employee</strong>
        </div>
        <div class="card-body card-block">
          <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama" class="form-control-label">Employee Name</label>
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
                <label for="company" class="form-control-label">Company</label>
                <select name="company" required class="form-control">
                  <option value="" selected disabled> Choose Your Company</option>
                  @foreach ($companies as $company)
                      <option value="{{ $company->id }}">
                        {{ $company->nama }}
                      </option>
                  @endforeach
                </select>
                @error('company')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>
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