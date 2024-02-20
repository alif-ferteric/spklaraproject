@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Membuat user baru</h1>
    </div>
    <div class="col-lg-8">
        <form class="mb-5" method="post" action="/dashboard/user" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="nip" class="form-label">NIP</label>
                <input type="number" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip"
                    required value="{{ old('nip') }}">
                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" required value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="is_admin" class="form-label">Status</label>
                <select name="is_admin" id="is_admin" class="form-control @error('is_admin') is-invalid @enderror">
                    <option value="" selected @if (old('is_admin') == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="1" @if (old('is_admin') == '1') selected="selected" @endif>admin</option>
                    <option value="0" @if (old('is_admin') == '0') selected="selected" @endif>team penilai
                    </option>
                </select>
                @error('is_admin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah User</button>

            <button class="btn btn-warning"><a href="/dashboard/user"
                    style="text-decoration: none; color:white">Kembali</a></button>
        </form>
    </div>
@endsection
