@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Alternatif Penilaian</h1>
      </div>      
@if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
      @endif
   <div class="table-responsive col-lg">
    @can('admin')
     <a href="/dashboard/alternatif/create" class="btn btn-primary mb-3">Tambah Alternatif (Kecamatan)</a>
    @endcan   
    <div class="row">
    <div class="col-6 ">
     <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($alternatif as $a)
                
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $a->kecamatan }}</td>
              <td>{{ $a->keterangan }}</td>
              <td>
                <a href="/dashboard/alternatif/{{ $a->id }}" class="badge bg-info d-inline"> <span data-feather="eye"></span></a>
                @can('admin')
                <a href="/dashboard/alternatif/{{ $a->id }}/edit" class="badge bg-warning d-inline"> <span data-feather="edit"></span></a>
                <form action="/dashboard/alternatif/{{ $a->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form> 
                @endcan
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <div class="col-6">
      <h3>Map Kecamatan</h3>
      <div class="card-group">
        <div class="card" style="width: 15rem;">
          <img class="zoom" src="/img/tenayanraya.png" alt="Card image cap">
            <div class="card-body">
          <p class="card-text">Kecamatan Tenayan Raya</p>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img class="zoom" src="/img/binawidya.png" alt="Card image cap">
             <div class="card-body">
              <p class="card-text">Kecamatan Bina Widya</p>
              </div>
          </div>
      </div>
      <div class="card-group">
            <div class="card" style="width: 15rem;">
            <img class="zoom" src="/img/sail.png" alt="Card image cap">
             <div class="card-body">
              <p class="card-text">Kecamatan Sail</p>
              </div>
          </div>
          <div class="card" style="width: 15rem;">
            <img class="zoom" src="/img/rumbai.png" alt="Card image cap">
             <div class="card-body">
              <p class="card-text">Kecamatan Rumbai</p>
              </div>
          </div>
      </div>
    </div>
    </div>
      </div>
    
@endsection

