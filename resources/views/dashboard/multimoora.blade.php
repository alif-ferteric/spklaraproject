@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- <h1 class="h2">Test Penilaian, {{ auth()->user()->name }}</h1> --}}
    </div>
    <div class="container">
        <div class="table-responsive col-lg">
            <h1>Metode Pertama : Ratio System</h1>
            <h2>A. Langkah Pertama</h2>
            <h5>Mengubah semua data menjadi matriks keputusan</h5>
            <div class="row">
                <div class="col-md-auto">
                    <img src="/img/thp1.png" alt="">
                </div>
                <div class="col-sm">
                    <p>
                        Keterangan: <br>
                        Xij= Matrik keputusan alternatif i pada kriteria j<br>
                        x = Nilai kriteria masing-masing kriteria yang diubah menjadi matriks<br>
                        i = Alternatif (Baris)<br>
                        j = Atribut atau Kriteria (Kolom)<br>
                        n = Jumlah Atribut atau Kriteria<br>
                        m = Jumlah Alternatif
                    </p>
                </div>
            </div>
            <table id="DataNilai" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>k1</th>
                        <th>k2</th>
                        <th>k3</th>
                        <th>k4</th>
                        <th>k5</th>
                        <th>k6</th>
                        <th>k7</th>
                        <th>k8</th>
                        <th>k9</th>
                        <th>k10</th>
                        <th>k11</th>
                        <th>k12</th>
                        <th>k13</th>
                        <th>k14</th>
                        <th>k15</th>
                        <th>k16</th>
                        <th>k17</th>
                        <th>k18</th>
                        <th>k19</th>
                        <th>k20</th>
                        <th>k21</th>
                        <th>k22</th>
                        <th>k23</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $p)
                        <tr>
                            <td>{{ $p->alternatif->kecamatan }}</td>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-responsive col-lg" style="margin-top:15px">
            <h2>B. Langkah kedua</h2>
            <h5>Lakukanlah normalisasi matriks keputusan, normalisasi ini bertujuan untuk menyatukan tiap-tiap elemen
                matriks sehingga elemen pada matriks tersebut memiliki nilai yang sama. <br>Berikut persamaan normalisasi
                matriks:</h5>
            <div class="row">
                <div class="col-md-auto">
                    <img src="/img/thp2.png" alt="">
                </div>
                <div class="col-sm">
                    <p>
                        Keterangan : <br>
                        x = nilai ke i dari alternatif pada kriteria ke j <br>
                        m = jumlah alternatif <br>
                        n = jumlah kriteria <br>
                        i = alternatif <br>
                        j = atribut <br>
                    </p>
                </div>
            </div>
            <h4>Normalisasi Tahap 1</h4>
            <table id="MatrikNormalisasi">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>k1</th>
                        <th>k2</th>
                        <th>k3</th>
                        <th>k4</th>
                        <th>k5</th>
                        <th>k6</th>
                        <th>k7</th>
                        <th>k8</th>
                        <th>k9</th>
                        <th>k10</th>
                        <th>k11</th>
                        <th>k12</th>
                        <th>k13</th>
                        <th>k14</th>
                        <th>k15</th>
                        <th>k16</th>
                        <th>k17</th>
                        <th>k18</th>
                        <th>k19</th>
                        <th>k20</th>
                        <th>k21</th>
                        <th>k22</th>
                        <th>k23</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive col-lg">
            <h4>Normalisasi Tahap 2</h4>
            <table id="LanjutanNormalisasi" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>k1</th>
                        <th>k2</th>
                        <th>k3</th>
                        <th>k4</th>
                        <th>k5</th>
                        <th>k6</th>
                        <th>k7</th>
                        <th>k8</th>
                        <th>k9</th>
                        <th>k10</th>
                        <th>k11</th>
                        <th>k12</th>
                        <th>k13</th>
                        <th>k14</th>
                        <th>k15</th>
                        <th>k16</th>
                        <th>k17</th>
                        <th>k18</th>
                        <th>k19</th>
                        <th>k20</th>
                        <th>k21</th>
                        <th>k22</th>
                        <th>k23</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive col-lg" style="margin-top:30px">
            <div class="row">
                <h2>Bobot Kriteria</h2>
                <h5>Untuk bobot setiap kriteria berdasarkan Skala Perbandingan Saaty dengan CR (Consistensy Ratio) =
                    <b>0.079120275</b><br>
                    sehingga diperoleh bobot setiap kriteria sesuai tabel berikut:
                </h5>
                <table id="Bobot" class="table table-bordered" style="margin-left:10px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>k1</th>
                            <th>k2</th>
                            <th>k3</th>
                            <th>k4</th>
                            <th>k5</th>
                            <th>k6</th>
                            <th>k7</th>
                            <th>k8</th>
                            <th>k9</th>
                            <th>k10</th>
                            <th>k11</th>
                            <th>k12</th>
                            <th>k13</th>
                            <th>k14</th>
                            <th>k15</th>
                            <th>k16</th>
                            <th>k17</th>
                            <th>k18</th>
                            <th>k19</th>
                            <th>k20</th>
                            <th>k21</th>
                            <th>k22</th>
                            <th>k23</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bobot Nilai</td>
                            <td>0.1139</td>
                            <td>0.0882</td>
                            <td>0.0807</td>
                            <td>0.0697</td>
                            <td>0.0576</td>
                            <td>0.0566</td>
                            <td>0.0544</td>
                            <td>0.0532</td>
                            <td>0.0531</td>
                            <td>0.0463</td>
                            <td>0.0448</td>
                            <td>0.0414</td>
                            <td>0.0371</td>
                            <td>0.0275</td>
                            <td>0.0219</td>
                            <td>0.0225</td>
                            <td>0.0230</td>
                            <td>0.0310</td>
                            <td>0.0180</td>
                            <td>0.0155</td>
                            <td>0.0150</td>
                            <td>0.0150</td>
                            <td>0.0136</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-responsive col-lg" style="margin-top:15px">
            <h2>C. Langkah Ketiga</h2>
            <h5>Menghitung nilai optimasi, penghitungan ini dilakukan dengan cara melakukan pengurangan pada nilai maximized
                dan minimized. Hal ini bertujuan untuk mendapatkan nilai optimasi dari data yang telah di normalisasi
                terbobot. Berikut algoritma untuk menghitung nilai optimasi:</h5>
            <div class="row">
                <div class="col-md-auto">
                    <img src="/img/thps3.png" alt="">
                </div>
                <div class="col-sm">
                    <p>
                        Keterangan :<br>
                        yi = Nilai optimasi<br>
                        Wj = Nilai bobot dari kriteria ke-j<br>
                        WjXij = Nilai dari pembentukan matriks<br>
                    </p>
                </div>
            </div>
            <table id="Langkah4" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>k1</th>
                        <th>k2</th>
                        <th>k3</th>
                        <th>k4</th>
                        <th>k5</th>
                        <th>k6</th>
                        <th>k7</th>
                        <th>k8</th>
                        <th>k9</th>
                        <th>k10</th>
                        <th>k11</th>
                        <th>k12</th>
                        <th>k13</th>
                        <th>k14</th>
                        <th>k15</th>
                        <th>k16</th>
                        <th>k17</th>
                        <th>k18</th>
                        <th>k19</th>
                        <th>k20</th>
                        <th>k21</th>
                        <th>k22</th>
                        <th>k23</th>
                    </tr>
                </thead>
            </table>

            <table id="NilaiMax" class="table table-striped table-sm">
                <thead>
                    <tr id="isiMax">
                        <th style="padding-right:40px">Nilai Max</th>
                    </tr>
                </thead>


            </table>
        </div>
        <div class="table-responsive col-lg" style="margin-top:30px">
            <h1>Metode Kedua : Defiation Refference Point</h1>
            <h5>
                The reference point menggunakan kinerja ternormalisasi alternatif ke-i pada kriteria ke-j yang dihitung
                dengan persamaan pada langkah kedua di rasio system,yang kemudian titik referensi kriteria maksimum
                ditentukan dari nilai tertinggi hasil normalisasi karena lebih realistis dan subjektif sebagai koordinat
                (rj).<br> Berikut ini merupakan formula dari tahapan reference point :
            </h5>
            <div class="row">
                <div class="col-md-auto">
                    <img src="/img/thp4.png" alt="">
                </div>
                <div class="col-sm">
                    <p>
                        Keterangan :<br>
                        Max j = Nilai tertinggi dari atribut (j) yang telah dinormalisasi<br>
                        Min i = Nilai terendah dari alternatif<br>
                        rj = Koordinat atribut<br>
                        xij= nilai ke i dari alternatif pada kriteria ke j
                    </p>
                </div>
            </div>
            <table id="RefferencePoint">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>k1</th>
                        <th>k2</th>
                        <th>k3</th>
                        <th>k4</th>
                        <th>k5</th>
                        <th>k6</th>
                        <th>k7</th>
                        <th>k8</th>
                        <th>k9</th>
                        <th>k10</th>
                        <th>k11</th>
                        <th>k12</th>
                        <th>k13</th>
                        <th>k14</th>
                        <th>k15</th>
                        <th>k16</th>
                        <th>k17</th>
                        <th>k18</th>
                        <th>k19</th>
                        <th>k20</th>
                        <th>k21</th>
                        <th>k22</th>
                        <th>k23</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive col-lg" style="margin-top:30px">
            <h1>Metode Ketiga : The full Multiplicative Form</h1>
            <h5>
                The full multiplicative form merupakan perkalian murni dari beberapa kriteria maksimal dan minimal,
                <br>berikut ini merupakan formula dari tahapan full multiplicative form :
            </h5>
            <div class="row">
                <div class="col-md-auto">
                    <img src="/img/thp5.png" alt="">
                </div>
                <div class="col-sm">
                    <p>
                        Keterangan :<br>
                        Ui = Nilai perkalian murni dari alternatif<br>
                        i = Alternatif<br>
                        j = Atribut
                    </p>
                </div>
            </div>
            <table id="MultipleForm" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>2x1</th>
                        <th>2x1x3</th>
                        <th>3x1x4</th>
                        <th>4x1x5</th>
                        <th>5x1x6</th>
                        <th>6x1x7</th>
                        <th>7x1x8</th>
                        <th>8x1x9</th>
                        <th>9x1x10</th>
                        <th>10x1x11</th>
                        <th>11x1x12</th>
                        <th>12x1x13</th>
                        <th>13x1x14</th>
                        <th>14x1x15</th>
                        <th>15x1x16</th>
                        <th>16x1x17</th>
                        <th>17x1x18</th>
                        <th>18x1x19</th>
                        <th>19x1x20</th>
                        <th>20x1x21</th>
                        <th>21x1x22</th>
                        <th>22x1x23</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="table-responsive col-lg" style="margin-top:30px; margin-bottom:50px">
            <div class="row" id="print-data">
                <h2>Hasil Akhir (Perankingan)</h2>
                <div class="col-1" >
                    <table class="table table-striped table-sm" id="rank">
                        <thead>
                            <tr>
                                <th>Rank</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            </tr>
                            <tr><td>2</td></tr>
                            <tr><td>3</td></tr>
                            <tr><td>4</td></tr>
                            <tr><td>5</td></tr>
                            <tr><td>6</td></tr>
                        </tbody>
                    </table>
                </div>
                    <div class="col-3">
                        <table  id="NilaiOptimum">
                            <thead>
                                <tr>
                                    <td>Alternatif</td>
                                    <td>R System</td>
                                    {{-- <td>R.Point</td>
                                    <td>M.Form</td> --}}
                                </tr>
                            </thead>
                        </table>
                    </div>
                      <div class="col-4">
                        <table  id="Rpoint">
                            <thead>
                                <tr>
                                    <td>Alternatif</td>
                                    <td>R Point</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                     <div class="col-4">
                        <table id="MformRank">
                            <thead>
                                <tr>
                                    <td>Alternatif</td>
                                    <td>M Form</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                <h5>Sehingga diperoleh kecamatan Terbaik diPekanbaru pada tabel diatas yang <b><i>Rank 1</i></b> <input type="button" value="Print" onclick="window.print()" /></h5> 
                
            </div>

        </div>
    </div>

    <script>
        const Data = document.getElementById("DataNilai");
        function Pangkat() {
            const x = document.getElementById("MatrikNormalisasi");
            x.className = "table table-striped table-sm";
            let xy = document.createElement("TBODY");
            xy.setAttribute("id", "xy");
            document.getElementById("MatrikNormalisasi").appendChild(xy);
            for (l = 1; l < Data.rows.length; l++) {
                let y = document.createElement("TR");
                y.setAttribute("id", "alt" + l);
                document.getElementById("xy").appendChild(y);

                let isi = Data.rows[l].cells[0].innerHTML;
                let z = document.createElement("TD");
                let t = document.createTextNode(isi);
                z.appendChild(t);
                document.getElementById("alt" + l).appendChild(z);

                for (let i = 1; i < 24; i++) {
                    isi = parseInt(Data.rows[l].cells[i].innerHTML);
                    let pangkat = isi * isi;
                    z = document.createElement("TD");
                    t = document.createTextNode(pangkat);
                    z.appendChild(t);
                    document.getElementById("alt" + l).appendChild(z);
                }
            }
        }Pangkat();

        const Data2 = document.getElementById("MatrikNormalisasi");
        //cari nilai sqrt
        function Normalisasi(a) {
            let Norm = 0;
            for (let i = 1; i < Data2.rows.length; i++) {
                let isi = parseInt(Data2.rows[i].cells[a].innerHTML);
                for (let x = 0; x < 1; x++) {
                    Norm += isi;
                }
            }
            let Test = Math.sqrt(Norm);
            return Test;
        }
        const Norm1 = Normalisasi(1);
        const Norm2 = Normalisasi(2);
        const Norm3 = Normalisasi(3);
        const Norm4 = Normalisasi(4);
        const Norm5 = Normalisasi(5);
        const Norm6 = Normalisasi(6);
        const Norm7 = Normalisasi(7);
        const Norm8 = Normalisasi(8);
        const Norm9 = Normalisasi(9);
        const Norm10 = Normalisasi(10);
        const Norm11 = Normalisasi(11);
        const Norm12 = Normalisasi(12);
        const Norm13 = Normalisasi(13);
        const Norm14 = Normalisasi(14);
        const Norm15 = Normalisasi(15);
        const Norm16 = Normalisasi(16);
        const Norm17 = Normalisasi(17);
        const Norm18 = Normalisasi(18);
        const Norm19 = Normalisasi(19);
        const Norm20 = Normalisasi(20);
        const Norm21 = Normalisasi(21);
        const Norm22 = Normalisasi(22);
        const Norm23 = Normalisasi(23);

        function Body2(a, b) {
            const x = document.getElementById(a);
            x.className = "table table-striped table-sm";
            let xy = document.createElement("TBODY");
            xy.setAttribute("id", b);
            document.getElementById(a).appendChild(xy);
        }
        Body2("LanjutanNormalisasi", "xy2");
        Body2("NilaiOptimum", "no2");
        Body2("Rpoint", "rpoint2");
        Body2("MformRank", "mfr2");
        Body2("Langkah4", "l42");
        Body2("RefferencePoint", "rp2");
        Body2("MultipleForm", "mform2");

        function Alternatif(a, b) {
            for (l = 1; l < Data.rows.length; l++) {
                const x = document.getElementById(a);
                let y = document.createElement("TR");
                y.setAttribute("id", b + l);
                document.getElementById(a).appendChild(y);

                let isi = Data.rows[l].cells[0].innerHTML;
                let z = document.createElement("TD");
                let t = document.createTextNode(isi);
                z.appendChild(t);
                document.getElementById(b + l).appendChild(z);
            }
        }
        Alternatif("xy2", "alts");
        Alternatif("no2", "altz");
        Alternatif("rpoint2","rpointnilai");
        Alternatif("mfr2","mfrank");
        Alternatif("l42", "alt4");
        Alternatif("rp2", "altr");
        Alternatif("mform2", "mf");
        //Hasil dibagikan dengan nilai sqrtnya


        function Normalisasi2(a, b) {
            for (l = 1; l < Data2.rows.length; l++) {
                for (let i = 0; i < 1; i++) {
                    isi = parseInt(Data.rows[l].cells[a].innerHTML);
                    let hasil = isi / b;
                    z = document.createElement("TD");
                    t = document.createTextNode(hasil.toFixed(5));
                    z.appendChild(t);
                    document.getElementById("alts" + l).appendChild(z);
                }
            }
        }
        Normalisasi2(1, Norm1);
        Normalisasi2(2, Norm2);
        Normalisasi2(3, Norm3);
        Normalisasi2(4, Norm4);
        Normalisasi2(5, Norm5);
        Normalisasi2(6, Norm6);
        Normalisasi2(7, Norm7);
        Normalisasi2(8, Norm8);
        Normalisasi2(9, Norm9);
        Normalisasi2(10, Norm10);
        Normalisasi2(11, Norm11);
        Normalisasi2(12, Norm12);
        Normalisasi2(13, Norm13);
        Normalisasi2(14, Norm14);
        Normalisasi2(15, Norm15);
        Normalisasi2(16, Norm16);
        Normalisasi2(17, Norm17);
        Normalisasi2(18, Norm18);
        Normalisasi2(19, Norm19);
        Normalisasi2(20, Norm20);
        Normalisasi2(21, Norm21);
        Normalisasi2(22, Norm22);
        Normalisasi2(23, Norm23);

        const Data3 = document.getElementById("LanjutanNormalisasi");
        const DataBobot = document.getElementById("Bobot");

        // function CariOptimum(a){
        //   let Optimum =0;
        //     for(b=1;b<DataBobot.rows.length;b++){
        //       let NilaiO = parseFloat(Data3.rows[a].cells[b].innerHTML);
        //       let NilaiB = parseFloat(DataBobot.rows[b].cells[1].innerHTML);
        //       let kali = NilaiO*NilaiB;
        //       for(let x=0; x<1; x++){
        //         Optimum += kali;     
        //     }  
        //     }console.log(Optimum);
        //     return Optimum;
        // }
        // CariOptimum(4);
        function Langkahke4() {
            for (l = 1; l < Data3.rows.length; l++) {
                for (let i = 1; i < 24; i++) {
                    let NilaiO = parseFloat(Data3.rows[l].cells[i].innerHTML);
                    let NilaiB = parseFloat(DataBobot.rows[1].cells[i].innerHTML);
                    let kali = NilaiO * NilaiB;
                    z = document.createElement("TD");
                    t = document.createTextNode(kali.toFixed(5));
                    z.appendChild(t);
                    document.getElementById("alt4" + l).appendChild(z);
                }
            }
        }
        Langkahke4();
        const Data4 = document.getElementById("Langkah4");

        function CariMax() {
            let Box = [];
            let Max = [];
            for (x = 1; x < 24; x++) {
                if (Box != 0) {
                    Box = [];
                }
                for (l = 1; l < Data4.rows.length; l++) {
                    let isi = parseFloat(Data4.rows[l].cells[x].innerHTML);
                    Box.push(isi);
                }
                Max.push(Math.max(...Box));
            }
            return Max;
        }
        const NilaiMax = CariMax();

        function TampilkanMax() {
            for (let i = 0; i < NilaiMax.length; i++) {
                let Nilainya = parseFloat(NilaiMax[i]);
                z = document.createElement("TD");
                t = document.createTextNode(Nilainya.toFixed(5));
                z.appendChild(t);
                document.getElementById("isiMax").appendChild(z);
            }
        }
        TampilkanMax();

        function RefferencePoint() {
            for (l = 1; l < Data4.rows.length; l++) {
                for (i = 0; i < NilaiMax.length; i++) {
                    let NilaiMaximal = parseFloat(NilaiMax[i]);
                    let isi = parseFloat(Data4.rows[l].cells[i + 1].innerHTML);
                    let nilai = parseFloat(NilaiMaximal - isi);
                    z = document.createElement("TD");
                    t = document.createTextNode(nilai.toFixed(5));
                    z.appendChild(t);
                    document.getElementById("altr" + l).appendChild(z);
                }
            }
        }
        RefferencePoint();


        // function Mform(a){
        //   let arrayNya = [];
        //      let satu = parseInt(Data.rows[a].cells[1].innerHTML);
        //      let dua = parseInt(Data.rows[a].cells[2].innerHTML);
        //      let tiga = parseInt(Data.rows[a].cells[3].innerHTML);
        //      let empat = parseInt(Data.rows[a].cells[4].innerHTML);
        //      let lima = parseInt(Data.rows[a].cells[5].innerHTML);
        //      let enam = parseInt(Data.rows[a].cells[6].innerHTML);
        //      let tujuh = parseInt(Data.rows[a].cells[7].innerHTML);
        //      let delapan = parseInt(Data.rows[a].cells[8].innerHTML);
        //      let sembilan = parseInt(Data.rows[a].cells[9].innerHTML);
        //      let sepuluh = parseInt(Data.rows[a].cells[10].innerHTML);

        //      let t1 = dua*satu;
        //      arrayNya.push(t1);
        //      let t2 = dua*satu*tiga;
        //      arrayNya.push(t2);
        //      let t3 = tiga*satu*empat;
        //      arrayNya.push(t3);
        //      let t4 = empat*satu*lima;
        //      arrayNya.push(t4);
        //      let t5 = lima*satu*enam;
        //      arrayNya.push(t5);
        //      let t6 = enam*satu*tujuh;
        //      arrayNya.push(t6);
        //      let t7 = tujuh*satu*delapan;
        //      arrayNya.push(t7);
        //      let t8 = delapan*satu*sembilan;
        //      arrayNya.push(t8);
        //       let t9 = sembilan*satu*sepuluh;
        //      arrayNya.push(t9);
        //   return arrayNya;
        //   }    

        // const cel1 = Mform(1);
        // const cel2 = Mform(2);
        // const cel3 = Mform(3);
        // const cel4 = Mform(4);
        // const cel5 = Mform(5);
        // const cel6 = Mform(6);
        // console.log(cel1,cel2,cel3,cel4,cel5,cel6);

        const MultipleForm = () => {
            for (l = 1; l < Data.rows.length; l++) {
                for (i = 1; i < 23; i++) {
                    let a = parseInt(Data.rows[l].cells[1].innerHTML);
                    let b = parseInt(Data.rows[l].cells[i].innerHTML);
                    let c = parseInt(Data.rows[l].cells[i + 1].innerHTML);
                    if (i == 1) {
                        let kali = parseInt(a * c);
                        z = document.createElement("TD");
                        t = document.createTextNode(kali);
                        z.appendChild(t);
                        document.getElementById("mf" + l).appendChild(z);
                    } else {
                        kali = parseInt(a * b * c);
                        z = document.createElement("TD");
                        t = document.createTextNode(kali);
                        z.appendChild(t);
                        document.getElementById("mf" + l).appendChild(z);
                    }

                }
            }
        }
        MultipleForm();

        //Mencari Nilai Optimum
        function OptimumNilai() {
            for (let i = 1; i < Data4.rows.length; i++) {
                let Hasil = 0;
                for (let x = 1; x < 24; x++) {
                    let isi = parseFloat(Data4.rows[i].cells[x].innerHTML);
                    for (let z = 0; z < 1; z++) {
                        Hasil += isi;
                    }
                }
                z = document.createElement("TD");
                t = document.createTextNode(Hasil.toFixed(5));
                z.appendChild(t);
                document.getElementById("altz" + i).appendChild(z);
            }
        }
        OptimumNilai();
        
        const Data5 = document.getElementById("RefferencePoint");
        function ReffrenceNilai() {
            let Box = [];
            let Max = [];
            for (x = 1; x < Data5.rows.length; x++) {
                if (Box != 0) {
                    Box = [];
                }
                for (l = 1; l < 24; l++) {
                    let isi = parseFloat(Data5.rows[x].cells[l].innerHTML);
                    Box.push(isi);
                }
                Max.push(Math.max(...Box));
            }
            return Max;
        }
        const MaxRf = ReffrenceNilai();

        function TampilkanMaxRf() {
            for (let i = 0; i < MaxRf.length; i++) {
                let Nilainya = parseFloat(MaxRf[i]);
                z = document.createElement("TD");
                t = document.createTextNode(Nilainya.toFixed(5));
                z.appendChild(t);
                document.getElementById("rpointnilai" + (i+1) ).appendChild(z);
            }
        }
        TampilkanMaxRf();

        const Data6 = document.getElementById("MultipleForm");

        function MultipleNilai() {
            for (let i = 1; i < Data6.rows.length; i++) {
                let Hasil = 0;
                for (let x = 1; x < 23; x++) {
                    let isi = parseFloat(Data6.rows[i].cells[x].innerHTML);
                    for (let z = 0; z < 1; z++) {
                        Hasil += isi;
                    }
                }
                z = document.createElement("TD");
                t = document.createTextNode(Hasil);
                z.appendChild(t);
                document.getElementById("mfrank" + i).appendChild(z);
            }
        }
        MultipleNilai();
        function sortTable(a) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById(a);
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];
                    //check if the two rows should switch place:
                    if (parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
        sortTable("NilaiOptimum");
        sortTable("MformRank");
        function sortTableRP() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("Rpoint");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];
                    //check if the two rows should switch place:
                    if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
        sortTableRP();

    </script>
@endsection
