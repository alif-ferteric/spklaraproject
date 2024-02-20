@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat datang kembali, {{ auth()->user()->name }}</h1>
    </div>
    <div>
        <h5>Sistem Pendukung Keputusan</h5>
        <p>Sistem Pendukung Keputusan adalah suatu sistem interaktif yang membantu pengambil keputusan dengan memanfaatkan
            penggunaan data serta model-model keputusan untuk memecahkan masalah-masalah yang memiliki sifat semi
            terstruktur dan tidak terstruktur. Sehingga dapat dikatakan bahwa tujuan dari SPK adalah untuk membantu
            pengambil keputusan dengan meningkatkan efektivitas dan efesiensi dari data serta model-model keputusan.</p>
        <h5>Metode Multimoora</h5>
        <p>Metode multimoora merupakan metode moora yang ditambahkan pendekatan the full Multiplicative Form, sehingga
            Metode Multimoora terdiri dari gabungan tiga tahapan yaitu ratio system, reference point dan full multiplicative
            form</p>
        <h5>SPK Rekomendasi Kecamatan Terbaik di Kota Pekanbaru</h5>
        <ul>
            <li>Merupakan Aplikasi Pendukung keputusan dengan memanfaatkan metode multimoora dan melakukan penilaian dari
                data team EKK
                (Evaluasi Kinerja Kecamatan)</li>
            <li>Kriteria penilaian diperoleh dari kriteria/format penilaian team EKK kota Pekanbaru</li>
            <li>Alternatif atau pilihan kecamatannya merupakan kecamatan di Kota Pekanbaru</li>
        </ul>
    </div>
@endsection
