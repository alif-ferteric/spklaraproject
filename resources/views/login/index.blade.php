@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <h1 class="h4 mb-3 fw-normal text-center">Sistem Pendukung Keputusan Rekomendasi Kecamatan Terbaik Kota
                    Pekanbaru</h1>
                <img src="/img/logopku.png" alt="logopku.png"
                    style="display: block; margin-left: auto; margin-right: auto; margin-bottom:20px; width: 40%;">
                <form action="/" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror"
                            id="nip" autofocus required value="{{ old('nip') }}">
                        <label for="nip">Nomor Induk Pegawai</label>
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                </form>
            </main>
        </div>
    </div>
@endsection
