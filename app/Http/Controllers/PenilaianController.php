<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            return view(
                'dashboard.penilaian.index',
                [
                    'penilaian' => Nilai::all()
                ]
            );
        } else {
            return view(
                'dashboard.penilaian.index',
                [
                    'penilaian' => Nilai::where('user_id', auth()->user()->id)->get()
                ]
            );
        }
    }
    public function show(Nilai $penilaian)
    {
        // return var_dump($penilaian->toArray());
        return view('dashboard.penilaian.show', [
            'penilaian' => $penilaian,
            'kecamatan' => Alternatif::all()
        ]);
    }
    public function moora()
    {
        return view('dashboard.multimoora', [
            'data' => Nilai::all()
        ]);
    }
    public function create()
    {
        return view('dashboard.penilaian.create', [
            'kecamatan' => Alternatif::all()
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kecamatan_id' => 'required|unique:Nilais|max:255',
            'user_id' => 'required',
            'k1'  => 'required',
            'k2'  => 'required',
            'k3'  => 'required',
            'k4'  => 'required',
            'k5'  => 'required',
            'k6'  => 'required',
            'k7'  => 'required',
            'k8'  => 'required',
            'k9'  => 'required',
            'k10'  => 'required',
            'k11'  => 'required',
            'k12'  => 'required',
            'k13'  => 'required',
            'k14'  => 'required',
            'k15'  => 'required',
            'k16'  => 'required',
            'k17'  => 'required',
            'k18'  => 'required',
            'k19'  => 'required',
            'k20'  => 'required',
            'k21'  => 'required',
            'k22'  => 'required',
            'k23'  => 'required'
        ]);
        Nilai::create($validatedData);
        return redirect('dashboard/penilaian')->with('success', 'New Penilaian has been added!');
    }

    public function edit(Nilai $penilaian)
    {
        return view('dashboard.penilaian.edit', [
            'penilaian' => $penilaian,
            'kecamatan' => Alternatif::all()
        ]);
    }
    public function update(Request $request, Nilai $penilaian)
    { {
            $rules = [
                'k1'  => 'required',
                'k2'  => 'required',
                'k3'  => 'required',
                'k4'  => 'required',
                'k5'  => 'required',
                'k6'  => 'required',
                'k7'  => 'required',
                'k8'  => 'required',
                'k9'  => 'required',
                'k10'  => 'required',
                'k11'  => 'required',
                'k12'  => 'required',
                'k13'  => 'required',
                'k14'  => 'required',
                'k15'  => 'required',
                'k16'  => 'required',
                'k17'  => 'required',
                'k18'  => 'required',
                'k19'  => 'required',
                'k20'  => 'required',
                'k21'  => 'required',
                'k22'  => 'required',
                'k23'  => 'required'
            ];

            $validatedData = $request->validate($rules);

            Nilai::where('id', $penilaian->id)->update($validatedData);
            return redirect('dashboard/penilaian')->with('success', ' penilaian has been updated!');
        }
    }
    public function destroy(Nilai $penilaian)
    {

        Nilai::destroy($penilaian->id);
        return redirect('dashboard/penilaian')->with('success', 'Penilaian has been deleted!');
    }
}
