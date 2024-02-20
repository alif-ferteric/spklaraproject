@extends('dashboard.layouts.main')
@section('container')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar User</h1>
        <h3>User merupakan dari team EKK (Evaluasi Kinerja Kecamatan) Kota Pekanbaru</h3>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
    @endif
    <div class="table-responsive col-lg-12">
        @can('admin')
            <a href="/dashboard/user/create" class="btn btn-primary mb-3">Tambah User</a>
        @endcan
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $a)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->nip }}</td>
                        <td>{{ $a->email }}</td>
                        <td>{{ $a->is_admin == 1 ? 'admin' : 'team penilai' }}</td>
                        <td>
                            {{-- <a href="/dashboard/user/{{ $a->id }}" class="badge bg-info d-inline"> <span
                                    data-feather="eye"></span></a> --}}
                            @can('admin')
                                <a href="/dashboard/user/{{ $a->id }}/edit" class="badge bg-warning d-inline">
                                    <span data-feather="edit"></span></a>
                                <form action="/dashboard/user/{{ $a->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                            data-feather="x-circle"></span></button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
