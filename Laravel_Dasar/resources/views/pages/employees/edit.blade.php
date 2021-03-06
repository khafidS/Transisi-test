@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <strong>Edit Company</strong>
      <small>{{ $items->nama }}</small>
    </div>
    <div class="card-body card-block">
      <form action="{{route('employees.update', $items->id)}}" method="POST">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="nama" class="form-control-label">Employee Name</label>
        <input  type="text"
                name="nama"
                value="{{ old('nama') ? old ('nama') : $items->nama }}"
                class="form-control @error('nama') is-invalid @enderror"/>
        @error('nama')
          <div class="text-muted">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input  type="text"
                name="email"
                value="{{ old('email') ? old('email') : $items->email }}"
                class="form-control @error('email') is-invalid @enderror"/>
        @error('email')
          <div class="text-muted">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
          <label for="company" class="form-control-label">Company</label>
          <select name="company" required class="form-control">
            <option value="{{ $comp[0]->id }}">Your Company Now [{{ $comp[0]->nama }}]</option>
            @for ($a = 0; $a < $count; $a++)
            <option value="{{ $companies[$a]->id }}" 
              @if ($comp[0]->id == $companies[$a]->id) 
                disabled 
              @endif>
              {{ $companies[$a]->nama }}
            </option>
            @endfor
          </select>
          @error('company')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
      </div>
      
      <div class="form-group w-50 mx-auto">
        <button class="btn btn-primary btn-block" type="submit">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection