@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penilaian</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
    @endif
    <div class="table-responsive col-lg">
        @if (auth()->user()->is_admin === 0)
            <a href="/dashboard/penilaian/create" class="btn btn-primary mb-3">Tambah Penilaian (Kecamatan)</a>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Penilai</th>
                    <th scope="col">k1</th>
                    <th scope="col">k2</th>
                    <th scope="col">k3</th>
                    <th scope="col">k4</th>
                    <th scope="col">k5</th>
                    <th scope="col">k6</th>
                    <th scope="col">k7</th>
                    <th scope="col">k8</th>
                    <th scope="col">k9</th>
                    <th scope="col">k10</th>
                    <th scope="col">k11</th>
                    <th scope="col">k12</th>
                    <th scope="col">k13</th>
                    <th scope="col">k14</th>
                    <th scope="col">k15</th>
                    <th scope="col">k16</th>
                    <th scope="col">k17</th>
                    <th scope="col">k18</th>
                    <th scope="col">k19</th>
                    <th scope="col">k20</th>
                    <th scope="col">k21</th>
                    <th scope="col">k22</th>
                    <th scope="col">k23</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penilaian as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->alternatif->kecamatan }}</td>
                        <td>{{ $p->author->name }}</td>
                        <td>{{ $p->k1 == 'a'
                            ? '60'
                            : ($p->k1 == 'b'
                                ? '75'
                                : ($p->k1 == 'c'
                                    ? '65'
                                    : ($p->k1 == 'd'
                                        ? '80'
                                        : ($p->k1 == 'e'
                                            ? '70'
                                            : ($p->k1 == 'f'
                                                ? '85'
                                                : ($p->k1 == 'g'
                                                    ? '75'
                                                    : ($p->k1 == 'h'
                                                        ? '90'
                                                        : ($p->k1 == 'i'
                                                            ? '70'
                                                            : ($p->k1 == 'j'
                                                                ? '85'
                                                                : ($p->k1 == 'k'
                                                                    ? '75'
                                                                    : ($p->k1 == 'l'
                                                                        ? '90'
                                                                        : ($p->k1 == 'm'
                                                                            ? '80'
                                                                            : ($p->k1 == 'n'
                                                                                ? '95'
                                                                                : ($p->k1 == 'o'
                                                                                    ? '85'
                                                                                    : ($p->k1 == 'p'
                                                                                        ? '100'
                                                                                        : 'loh'))))))))))))))) }}
                        </td>
                        <td>{{ $p->k2 }}</td>
                        <td>{{ $p->k3 }}</td>
                        <td>{{ $p->k4 }}</td>
                        <td>{{ $p->k5 }}</td>
                        <td>{{ $p->k6 }}</td>
                        <td>{{ $p->k7 }}</td>
                        <td>{{ $p->k8 }}</td>
                        <td>{{ $p->k9 }}</td>
                        <td>{{ $p->k10 }}</td>
                        <td>{{ $p->k11 }}</td>
                        <td>{{ $p->k12 }}</td>
                        <td>{{ $p->k13 }}</td>
                        <td>{{ $p->k14 }}</td>
                        <td>{{ $p->k15 }}</td>
                        <td>{{ $p->k16 }}</td>
                        <td>{{ $p->k17 }}</td>
                        <td>{{ $p->k18 }}</td>
                        <td>{{ $p->k19 }}</td>
                        <td>{{ $p->k20 }}</td>
                        <td>{{ $p->k21 }}</td>
                        <td>{{ $p->k22 }}</td>
                        <td>{{ $p->k23 }}</td>
                        <td>
                            @can('admin')
                            <a href="/dashboard/penilaian/{{ $p->id }}" class="badge bg-info d-inline">
                                <span data-feather="eye"></span></a>
                            @endcan
                            @if(auth()->user()->is_admin == '0')
                                <a href="/dashboard/penilaian/{{ $p->id }}/edit" class="badge bg-warning d-inline">
                                    <span data-feather="edit"></span></a>
                                <form action="/dashboard/penilaian/{{ $p->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                            data-feather="x-circle"></span></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
