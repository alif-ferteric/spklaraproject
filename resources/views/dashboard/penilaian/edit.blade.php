@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Penilaian</h1>
    </div>
    <div class="col-lg-8">
        <form class="mb-5" method="post" action="/dashboard/penilaian/{{ $penilaian->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <select class="form-control" disabled>
                    <option value="" selected>pilih kecamatan</option>
                    @foreach ($kecamatan as $k)
                        <option value="{{ $k->id }}"
                            {{ old('kecamatan_id', $penilaian->kecamatan_id) == $k->id ? 'selected' : null }}>
                            {{ $k->kecamatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="k1" class="form-label">Terpenuhinya syarat jabatan</label>
                <select class="form-control @error('k1') is-invalid @enderror" name="k1" id="k1" required>
                    <option value="" selected @if (old('k1', $penilaian->k1) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="a" @if (old('k1', $penilaian->k1) == 'a') selected="selected" @endif>IV/a ; III/d, S1
                        tanpa diklat kepamongprajaan, Diklatpim IV</option>
                    <option value="b" @if (old('k1', $penilaian->k1) == 'b') selected="selected" @endif>IV/a ; III/d, S1
                        tanpa diklat kepamongprajaan, Diklatpim IV + diklatpim III
                    </option>
                    <option value="c" @if (old('k1', $penilaian->k1) == 'c') selected="selected" @endif>IV/a ; III/d, S1+S2
                        tanpa diklat kepamongprajaan, Diklatpim IV</option>
                    <option value="d" @if (old('k1', $penilaian->k1) == 'd') selected="selected" @endif>IV/a ; III/d, S1+S2
                        tanpa diklat kepamongprajaan, Diklatpim IV + diklatpim III
                    </option>
                    <option value="e" @if (old('k1', $penilaian->k1) == 'e') selected="selected" @endif>IV/a ; III/d, S1 +
                        diklat kepamongprajaan / STPDN/IPDN, Diklatpim IV</option>
                    <option value="f" @if (old('k1', $penilaian->k1) == 'f') selected="selected" @endif>IV/a ; III/d, S1 +
                        diklat kepamongprajaan / STPDN/IPDN, Diklatpim IV +
                        diklatpim III</option>
                    <option value="g" @if (old('k1', $penilaian->k1) == 'g') selected="selected" @endif>IV/a ; III/d,
                        S1+diklat kepamongprajaan / STPDN / IPDN + S2, Diklatpim IV
                    </option>
                    <option value="h" @if (old('k1', $penilaian->k1) == 'h') selected="selected" @endif>IV/a ; III/d,
                        S1+diklat kepamongprajaan / STPDN / IPDN + S2, Diklatpim IV +
                        diklatpim III</option>

                    <option value="i" @if (old('k1', $penilaian->k1) == 'i') selected="selected" @endif>III/d + SKP 2 tahun
                        sebelumnya dengan nilai > 95
                        , S1 tanpa diklat kepamongprajaan, Diklatpim IV</option>
                    <option value="j" @if (old('k1', $penilaian->k1) == 'j') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1 tanpa diklat kepamongprajaan, Diklatpim IV + diklatpim III
                    </option>
                    <option value="k" @if (old('k1', $penilaian->k1) == 'k') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1+S2 tanpa diklat kepamongprajaan, Diklatpim IV</option>
                    <option value="l" @if (old('k1', $penilaian->k1) == 'l') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1+S2 tanpa diklat kepamongprajaan, Diklatpim IV + diklatpim III
                    </option>
                    <option value="m" @if (old('k1', $penilaian->k1) == 'm') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1 + diklat kepamongprajaan / STPDN/IPDN, Diklatpim IV</option>
                    <option value="n" @if (old('k1', $penilaian->k1) == 'n') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1 + diklat kepamongprajaan / STPDN/IPDN, Diklatpim IV +
                        diklatpim III</option>
                    <option value="o" @if (old('k1', $penilaian->k1) == 'o') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1+diklat kepamongprajaan / STPDN / IPDN + S2, Diklatpim IV
                    </option>
                    <option value="p" @if (old('k1', $penilaian->k1) == 'p') selected="selected" @endif>III/d + SKP 2
                        tahun sebelumnya dengan nilai > 95
                        , S1+diklat kepamongprajaan / STPDN / IPDN + S2, Diklatpim IV +
                        diklatpim III</option>
                </select>
                @error('k1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div>
                <h5>Terpenuhi Syarat Jabatan</h5>
                <label>Pangkat</label><br>
                <input type="radio" id="iva" name="pangkat" value="20" style="margin-right: 10px">IV/a ;
                III/d<br>
                <input type="radio" id="skp2" name="pangkat" value="30" style="margin-right: 10px">III/d + SKP 2
                tahun sebelumnya dengan nilai > 95<br>
                <label>Pendidikan</label><br>
                <input type="radio" id="s1" name="pendidikan" value="20" style="margin-right: 10px">S1 tanpa
                diklat kepamongprajaan<br>
                <input type="radio" id="s1dans2" name="pendidikan" value="25" style="margin-right: 10px">S1+S2 tanpa
                diklat kepamongprajaan<br>
                <input type="radio" id="s1dandiklat" name="pendidikan" value="30" style="margin-right: 10px">S1 +
                diklat kepamongprajaan<br>
                <input type="radio" id="stpdn" name="pendidikan" value="30"
                    style="margin-right: 10px">STPDN/IPDN<br>
                <input type="radio" id="ipdndans2" name="pendidikan" value="35" style="margin-right: 10px">S1+diklat
                kepamongprajaan / STPDN / IPDN + S2<br>
                <label>Diklat struktural</label><br>
                <input type="radio" id="diklaptim" name="diklat" value="20" style="margin-right: 10px">Diklatpim
                IV<br>
                <input type="radio" id="diklaptim2" name="diklat" value="35" style="margin-right: 10px">Diklatpim IV
                + diklatpim III<br>
            </div>
            <div>
                <h5>Kemampuan dan pemahaman terhadap PP 17/2018 dan pelaksanaan tugas deligatif</h5>
                <label>Jumlah dokumentasi/ laporan pelaksanaan tugas</label><br>
                <input type="radio" id="doc1" name="k2" value="25"style="margin-right: 10px">1-2 jenis
                kegiatan sesuai dengan PP
                17/2018<br>
                <input type="radio" id="doc2" name="k2" value="50" style="margin-right: 10px">3-4 jenis
                kegiatan sesuai dengan PP
                17/2018<br>
                <input type="radio" id="doc3" name="k2" value="75" style="margin-right: 10px">5-6 jenis
                kegiatan sesuai dengan PP
                17/2018<br>
                <input type="radio" id="doc4" name="k2" value="100" style="margin-right: 10px">7 jenis
                kegiatan sesuai dengan PP
                17/2018<br>
            </div> --}}
            <div class="mb-3">
                <label for="k2" class="form-label">Kemampuan dan pemahaman terhadap PP 17/2018 dan pelaksanaan tugas
                    deligatif</label>
                <select class="form-control @error('k2') is-invalid @enderror" name="k2" id="k2" required>
                    <option value="" @if (old('k2', $penilaian->k2) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="0" @if (old('k2', $penilaian->k2) == '0') selected="selected" @endif>tidak ada kegiatan
                    </option>
                    <option value="25" @if (old('k2', $penilaian->k2) == '25') selected="selected" @endif>1-2 jenis kegiatan
                        sesuai dengan PP 17/2018</option>
                    <option value="50" @if (old('k2', $penilaian->k2) == '50') selected="selected" @endif>3-4 jenis kegiatan
                        sesuai dengan PP 17/2018</option>
                    <option value="75" @if (old('k2', $penilaian->k2) == '75') selected="selected" @endif>5-6 jenis kegiatan
                        sesuai dengan PP 17/2018</option>
                    <option value="100" @if (old('k2', $penilaian->k2) == '100') selected="selected" @endif>7 jenis kegiatan
                        sesuai dengan PP 17/2018</option>
                </select> @error('k2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k3" class="form-label">Pelaksanaan tugas selaku PA</label>
                <select class="form-control @error('k3') is-invalid @enderror" name="k3" id="k3" required>
                    <option value="" selected @if (old('k3', $penilaian->k3) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k3', $penilaian->k3) == '100') selected="selected" @endif>Dokumen
                        perencanaan
                        + evaluasi + laporan</option>
                    <option value="80" @if (old('k3', $penilaian->k3) == '80') selected="selected" @endif>Dokumen
                        perencanaan
                        + evaluasi</option>
                    <option value="60" @if (old('k3', $penilaian->k3) == '60') selected="selected" @endif>Dokumen
                        perencanaan/evaluasi + laporan</option>
                    <option value="40" @if (old('k3', $penilaian->k3) == '40') selected="selected" @endif>Dokumen
                        perencanaan/evaluasi</option>
                    <option value="20" @if (old('k3', $penilaian->k3) == '20') selected="selected" @endif>Dokumen laporan
                    </option>
                    <option value="0" @if (old('k3', $penilaian->k3) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k3')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k4" class="form-label">Pelaksanaan tugas pemerintahan umum</label>
                <select class="form-control @error('k4') is-invalid @enderror" name="k4" id="k4" required>
                    <option value="" selected @if (old('k4', $penilaian->k4) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k4', $penilaian->k4) == '100') selected="selected" @endif>2 jenis kegiatan
                    </option>
                    <option value="45" @if (old('k4', $penilaian->k4) == '45') selected="selected" @endif>1 jenis kegiatan
                    </option>
                    <option value="0" @if (old('k4', $penilaian->k4) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k4')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k5" class="form-label">Penyelenggaraan pemberdayaan masyarakat</label>
                <select class="form-control @error('k5') is-invalid @enderror" name="k5" id="k5" required>
                    <option value="" selected @if (old('k5', $penilaian->k5) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k5', $penilaian->k5) == '100') selected="selected" @endif>Melakukan
                        penguatan kelembagaan kemasyarakatan dan edukasi/ mendidik masyarakat
                    </option>
                    <option value="45" @if (old('k5', $penilaian->k5) == '45') selected="selected" @endif>Hanya melakukan
                        salah satu pilar pemberdayaan</option>
                    <option value="0" @if (old('k5', $penilaian->k5) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k5')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k6" class="form-label">Penyelenggaraan keamanan dan ketertiban</label>
                <select class="form-control @error('k6') is-invalid @enderror" name="k6" id="k6" required>
                    <option value="" selected @if (old('k6', $penilaian->k6) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k6', $penilaian->k6) == '100') selected="selected" @endif>> 4x setahun
                    </option>
                    <option value="80" @if (old('k6', $penilaian->k6) == '80') selected="selected" @endif>4x setahun
                    </option>
                    <option value="60" @if (old('k6', $penilaian->k6) == '60') selected="selected" @endif>3x setahun
                    </option>
                    <option value="40" @if (old('k6', $penilaian->k6) == '40') selected="selected" @endif>2x setahun
                    </option>
                    <option value="20" @if (old('k6', $penilaian->k6) == '20') selected="selected" @endif>1x setahun
                    </option>
                    <option value="0" @if (old('k6', $penilaian->k6) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k6')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k7" class="form-label">Penyelenggaraan penegakkan peraturan perundang-undangan</label>
                <select class="form-control @error('k7') is-invalid @enderror" name="k7" id="k7" required>
                    <option value="" selected @if (old('k7', $penilaian->k7) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k7', $penilaian->k7) == '100') selected="selected" @endif>> 24x setahun
                    </option>
                    <option value="45" @if (old('k7', $penilaian->k7) == '45') selected="selected" @endif>≤ 24 x setahun
                    </option>
                    <option value="0" @if (old('k7', $penilaian->k7) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k7')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k8" class="form-label">Penyelenggaraan pemeliharaan prasarana dan fasilitas pelayanan
                    umum</label>
                <select class="form-control @error('k8') is-invalid @enderror" name="k8" id="k8" required>
                    <option value="" selected @if (old('k8', $penilaian->k8) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k8', $penilaian->k8) == '100') selected="selected" @endif>> 4x setahun
                    </option>
                    <option value="80" @if (old('k8', $penilaian->k8) == '80') selected="selected" @endif>4x setahun
                    </option>
                    <option value="60" @if (old('k8', $penilaian->k8) == '60') selected="selected" @endif>3x setahun
                    </option>
                    <option value="40" @if (old('k8', $penilaian->k8) == '40') selected="selected" @endif>2x setahun
                    </option>
                    <option value="20" @if (old('k8', $penilaian->k8) == '20') selected="selected" @endif>1x setahun
                    </option>
                    <option value="0" @if (old('k8', $penilaian->k8) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k8')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k9" class="form-label">Penyelenggaraan kegiatan pemerintahan</label>
                <select class="form-control @error('k9') is-invalid @enderror" name="k9" id="k9" required>
                    <option value="" selected @if (old('k9', $penilaian->k9) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k9', $penilaian->k9) == '100') selected="selected" @endif>> 12x dalam
                        setahun</option>
                    <option value="80" @if (old('k9', $penilaian->k9) == '80') selected="selected" @endif>10x - 12x dalam
                        setahun</option>
                    <option value="60" @if (old('k9', $penilaian->k9) == '60') selected="selected" @endif>7x - 9x dalam
                        setahun</option>
                    <option value="40" @if (old('k9', $penilaian->k9) == '40') selected="selected" @endif>4x - 6x dalam
                        setahun</option>
                    <option value="20" @if (old('k9', $penilaian->k9) == '20') selected="selected" @endif>≤ 3x dalam
                        setahun</option>
                    <option value="0" @if (old('k9', $penilaian->k9) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k9')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k10" class="form-label">Pembinaan kelurahan</label>
                <select class="form-control @error('k10') is-invalid @enderror" name="k10" id="k10" required>
                    <option value="" selected @if (old('k10', $penilaian->k10) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k10', $penilaian->k10) == '100') selected="selected" @endif>Pembinaan
                        lisan,tertulis, materi cakupan seluruh kelurahan</option>
                    <option value="65" @if (old('k10', $penilaian->k10) == '65') selected="selected" @endif>Pembinaan
                        lisan,tertulis, materi cakupan ≤ 50% dari jumlah kelurahan</option>
                    <option value="75" @if (old('k10', $penilaian->k10) == '75') selected="selected" @endif>Pembinaan lisan,
                        tertulis cakupan seluruh kelurahan</option>
                    <option value="40" @if (old('k10', $penilaian->k10) == '40') selected="selected" @endif>Pembinaan lisan,
                        tertulis cakupan ≤ 50% dari jumlah kelurahan</option>
                    <option value="65" @if (old('k10', $penilaian->k10) == '65') selected="selected" @endif>Pembinaan lisan
                        cakupan seluruh kelurahan</option>
                    <option value="30" @if (old('k10', $penilaian->k10) == '30') selected="selected" @endif>Pembinaan lisan
                        cakupan ≤ 50% dari jumlah kelurahan</option>
                    <option value="0" @if (old('k10', $penilaian->k10) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k10')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k11" class="form-label">Kegiatan pelayanan masyarakat</label>
                <select class="form-control @error('k11') is-invalid @enderror" name="k11" id="k11" required>
                    <option value="" selected @if (old('k11', $penilaian->k11) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k11', $penilaian->k11) == '100') selected="selected" @endif>> 4800 masyarakat
                        dalam setahun</option>
                    <option value="80" @if (old('k11', $penilaian->k11) == '80') selected="selected" @endif>3601 - 4800
                        masyarakat dalam setahun </option>
                    <option value="60" @if (old('k11', $penilaian->k11) == '60') selected="selected" @endif>2401 - 3600
                        masyarakat dalam setahun</option>
                    <option value="40" @if (old('k11', $penilaian->k11) == '40') selected="selected" @endif>1201 - 2400
                        masyarakat dalam setahun</option>
                    <option value="20" @if (old('k11', $penilaian->k11) == '20') selected="selected" @endif>≤ 1200 masyarakat
                        dalam setahun</option>
                    <option value="0" @if (old('k11', $penilaian->k11) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k11')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k12" class="form-label">Penerbitan izin dan rekomendasi</label>
                <select class="form-control @error('k12') is-invalid @enderror" name="k12" id="k12" required>
                    <option value="" selected @if (old('k12', $penilaian->k12) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k12', $penilaian->k12) == '100') selected="selected" @endif>> 60 izin dan
                        rekomendasi per tahun</option>
                    <option value="45" @if (old('k12', $penilaian->k12) == '45') selected="selected" @endif>≤ 60 izin dan
                        rekomendasi per tahun</option>
                    <option value="0" @if (old('k12', $penilaian->k12) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k12')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k13" class="form-label">Terlaksananya koordinasi</label>
                <select class="form-control @error('k13') is-invalid @enderror" name="k13" id="k13" required>
                    <option value="" selected @if (old('k13', $penilaian->k13) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k13', $penilaian->k13) == '100') selected="selected" @endif>4x lebih banyak
                        dari target kinerja pada DPA 2020</option>
                    <option value="75" @if (old('k13', $penilaian->k13) == '75') selected="selected" @endif>3x lebih banyak
                        dari target kinerja pada DPA 2020</option>
                    <option value="50" @if (old('k13', $penilaian->k13) == '50') selected="selected" @endif>2x lebih banyak
                        dari target kinerja pada DPA 2020</option>
                    <option value="25" @if (old('k13', $penilaian->k13) == '25') selected="selected" @endif>≤ target kinerja
                        pada DPA</option>
                    <option value="0" @if (old('k13', $penilaian->k13) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k13')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k14" class="form-label">Frekuensi pembinaan kepada kelurahan</label>
                <select class="form-control @error('k14') is-invalid @enderror" name="k14" id="k14" required>
                    <option value="" selected @if (old('k14', $penilaian->k14) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100" @if (old('k14', $penilaian->k14) == '100') selected="selected" @endif>≥ 50x dalam
                        setahun</option>
                    <option value="80" @if (old('k14', $penilaian->k14) == '80') selected="selected" @endif>37x -50x dalam
                        setahun</option>
                    <option value="60" @if (old('k14', $penilaian->k14) == '60') selected="selected" @endif>25 - 36x dalam
                        setahun</option>
                    <option value="40" @if (old('k14', $penilaian->k14) == '40') selected="selected" @endif>13x - 24x dalam
                        setahun</option>
                    <option value="20" @if (old('k14', $penilaian->k14) == '20') selected="selected" @endif>≤ 12x dalam
                        setahun</option>
                    <option value="0" @if (old('k14', $penilaian->k14) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k14')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k15" class="form-label">Pelaksanaan pengawasan yang jadi kewenangan camat</label>
                <select class="form-control @error('k15') is-invalid @enderror" name="k15" id="k15" required>
                    <option value="" selected @if (old('k15', $penilaian->k15) == '') selected="selected" @endif>-pilih-
                    </option>
                    <option value="100"@if (old('k15', $penilaian->k15) == '100') selected="selected" @endif>≥ 50x dalam
                        setahun</option>
                    <option value="80" @if (old('k15', $penilaian->k15) == '80') selected="selected" @endif>37x -50x dalam
                        setahun</option>
                    <option value="60" @if (old('k15', $penilaian->k15) == '60') selected="selected" @endif>25 - 36x dalam
                        setahun</option>
                    <option value="40" @if (old('k15', $penilaian->k15) == '40') selected="selected" @endif>13x - 24x dalam
                        setahun</option>
                    <option value="20" @if (old('k15', $penilaian->k15) == '20') selected="selected" @endif>≤ 12x dalam
                        setahun</option>
                    <option value="0" @if (old('k15', $penilaian->k15) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k15')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k16" class="form-label">Pelaksanaan fasilitasi yang jadi kewenangan camat</label>
                <select class="form-control @error('k16') is-invalid @enderror" name="k16" id="k16" required>
                    <option value="" selected @if (old('k16', $penilaian->k16) == '') selected="selected" @endif>
                        -pilih-
                    </option>
                    <option value="100" @if (old('k16', $penilaian->k16) == '100') selected="selected" @endif>≥ 50x dalam
                        setahun</option>
                    <option value="80" @if (old('k16', $penilaian->k16) == '80') selected="selected" @endif>37x -50x dalam
                        setahun</option>
                    <option value="60" @if (old('k16', $penilaian->k16) == '60') selected="selected" @endif>25 - 36x dalam
                        setahun</option>
                    <option value="40" @if (old('k16', $penilaian->k16) == '40') selected="selected" @endif>13x - 24x dalam
                        setahun</option>
                    <option value="20" @if (old('k16', $penilaian->k16) == '20') selected="selected" @endif>≤ 12x dalam
                        setahun</option>
                    <option value="0" @if (old('k16', $penilaian->k16) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k16')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k17" class="form-label">Pelaksanaan penetapan yang jadi kewenangan camat</label>
                <select class="form-control @error('k17') is-invalid @enderror" name="k17" id="k17" required>
                    <option value="" selected @if (old('k17', $penilaian->k17) == '') selected="selected" @endif>
                        -pilih-
                    </option>
                    <option value="100" @if (old('k17', $penilaian->k17) == '100') selected="selected" @endif>> 15x dalam
                        setahun</option>
                    <option value="45" @if (old('k17', $penilaian->k17) == '45') selected="selected" @endif>≤ 15x dalam
                        setahun</option>
                    <option value="0" @if (old('k17', $penilaian->k17) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k17')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k18" class="form-label">Penyampaian SPPT PBB</label>
                <select class="form-control @error('k18') is-invalid @enderror" name="k18" id="k18" required>
                    <option value="" selected @if (old('k18', $penilaian->k18) == '') selected="selected" @endif>
                        -pilih-
                    </option>
                    <option value="100"@if (old('k18', $penilaian->k18) == '100') selected="selected" @endif>81% - 100%
                    </option>
                    <option value="80" @if (old('k18', $penilaian->k18) == '80') selected="selected" @endif>61% - 80%
                    </option>
                    <option value="60" @if (old('k18', $penilaian->k18) == '60') selected="selected" @endif>41% - 60%
                    </option>
                    <option value="40" @if (old('k18', $penilaian->k18) == '40') selected="selected" @endif>21% - 40%
                    </option>
                    <option value="20" @if (old('k18', $penilaian->k18) == '20') selected="selected" @endif>≤ 20%</option>
                    <option value="0" @if (old('k18', $penilaian->k18) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k18')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k19" class="form-label">Sarana informasi Pelayanan Terpadu Kecamatan (PATEN) </label>
                <select class="form-control @error('k19') is-invalid @enderror" name="k19" id="k19" required>
                    <option value="" selected @if (old('k19', $penilaian->k19) == '') selected="selected" @endif>
                        -pilih-
                    </option>
                    <option value="100" @if (old('k19', $penilaian->k19) == '100') selected="selected" @endif>> 5 sarana
                        informasi</option>
                    <option value="80" @if (old('k19', $penilaian->k19) == '80') selected="selected" @endif>5 sarana
                        informasi</option>
                    <option value="60" @if (old('k19', $penilaian->k19) == '60') selected="selected" @endif>4 sarana
                        informasi</option>
                    <option value="40" @if (old('k19', $penilaian->k19) == '40') selected="selected" @endif>3 sarana
                        informasi</option>
                    <option value="20" @if (old('k19', $penilaian->k19) == '20') selected="selected" @endif>≤ 2 sarana
                        informasi</option>
                    <option value="0" @if (old('k19', $penilaian->k19) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k19')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k20" class="form-label">Respon atas partisipasi masyarakat untuk pelaksanaan
                    PATEN</label>
                <select class="form-control @error('k20') is-invalid @enderror" name="k20" id="k20" required>
                    <option value="" selected @if (old('k20', $penilaian->k20) == '0') selected="selected" @endif>
                        -pilih-
                    </option>
                    <option value="100" @if (old('k20', $penilaian->k20) == '100') selected="selected" @endif>Ada</option>
                    <option value="0" @if (old('k20', $penilaian->k20) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k20')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k21" class="form-label">Inovasi</label>
                <select class="form-control @error('k21') is-invalid @enderror" name="k21" id="k21" required>
                    <option value="" selected @if (old('k21', $penilaian->k21) == '0') selected="selected" @endif>
                        -pilih-
                    </option>
                     <option value="100" @if (old('k21', $penilaian->k21) == '100') selected="selected" @endif>100</option>
                    <option value="70" @if (old('k21', $penilaian->k21) == '70') selected="selected" @endif>70</option>
                    <option value="50" @if (old('k21', $penilaian->k21) == '50') selected="selected" @endif>50</option>
                    <option value="25" @if (old('k21', $penilaian->k21) == '25') selected="selected" @endif>25</option>
                    <option value="0" @if (old('k21', $penilaian->k21) == '0') selected="selected" @endif>Tidak ada
                        inovasi baru </option>
                </select> @error('k21')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k22" class="form-label">Penghargaan</label>
                <select class="form-control @error('k22') is-invalid @enderror" name="k22" id="k22" required>
                    <option value="" selected @if (old('k22', $penilaian->k22) == '') selected="selected" @endif>
                        -pilih-
                    </option>
                      <option value="100" @if (old('k22', $penilaian->k22) == '100') selected="selected" @endif>100</option>
                    <option value="70" @if (old('k22', $penilaian->k22) == '70') selected="selected" @endif>70</option>
                    <option value="50" @if (old('k22', $penilaian->k22) == '50') selected="selected" @endif>50</option>
                    <option value="25" @if (old('k22', $penilaian->k22) == '25') selected="selected" @endif>25</option>
                   <option value="0" @if (old('k22', $penilaian->k22) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k22')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="k23" class="form-label">Sarana literasi</label>
                <select class="form-control @error('k23') is-invalid @enderror" name="k23" id="k23" required>
                    <option value="" selected @if (old('k23', $penilaian->k23) == '') selected="selected" @endif>
                        -pilih-
                    </option>
                    <option value="100" @if (old('k23', $penilaian->k23) == '100') selected="selected" @endif>100</option>
                    <option value="70" @if (old('k23', $penilaian->k23) == '70') selected="selected" @endif>70</option>
                    <option value="50" @if (old('k23', $penilaian->k23) == '50') selected="selected" @endif>50</option>
                    <option value="25" @if (old('k23', $penilaian->k23) == '25') selected="selected" @endif>25</option>
                    <option value="0" @if (old('k23', $penilaian->k23) == '0') selected="selected" @endif>Tidak ada
                    </option>
                </select> @error('k23')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button class="btn btn-warning"><a href="/dashboard/penilaian"
                    style="text-decoration: none; color:white">cancel</a></button>
        </form>
    </div>
    <script></script>
@endsection
