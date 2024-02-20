@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $indikator->name }}</h2>
                <a href="/dashboard/indikator" class="btn btn-success"> <span data-feather="arrow-left"></span> Kembali</a>
                @can('admin')
                    <a href="/dashboard/indikator/{{ $indikator->id }}/edit" class="btn btn-warning"> <span
                            data-feather="edit"></span> Edit</a>
                @endcan
                <article class="my-3 fs-5"> {!! $indikator->keterangan !!}</article>




            </div>
        </div>
    </div>
@endsection
