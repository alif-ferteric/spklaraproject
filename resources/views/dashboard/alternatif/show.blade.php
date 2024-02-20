@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
 <h2 class="mb-3">{{ $alternatif->kecamatan }}</h2>
<a href="/dashboard/alternatif" class="btn btn-success">  <span data-feather="arrow-left"></span> Kembali</a>
@can('admin')
<a href="/dashboard/alternatif/{{ $alternatif->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span> Edit</a>
@endcan
    <article class="my-3 fs-5"> {!! $alternatif->keterangan !!}</article>
   


    
        </div>
    </div>
</div>
 
@endsection