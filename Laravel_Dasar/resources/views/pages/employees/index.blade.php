@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h4 class="box-title">List Employee</h4>
        </div>
        <div class="card-body">
          <div class="table-stats order-table ov-h">
            <table class="table">
              <thead>
                <tr class="text-left">
                  <th>No</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $index => $item)
                <tr class="text-left">
                  <td>{{ $items->firstItem() + $index }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->company()->get('nama')->implode('nama') }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                    <a href="{{ route('employees.edit', $item->id)}}" class="btn btn-info btn-sm">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('employees.destroy', $item->id) }}" 
                          method="POST" 
                          class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @empty
                    <tr>
                      <td colspan="6" class="text-center p-5">
                        Data Tidak Tersedia !
                      </td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3">
        {{ $items->links() }}
      </div>
    </div>
  </div>
</div>
@endsection