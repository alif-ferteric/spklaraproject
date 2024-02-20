<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dashboard.alternatif.index',
            [
                'alternatif' => Alternatif::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kecamatan' => 'required|max:255',
            'keterangan'  => 'required'
        ]);
        Alternatif::create($validatedData);
        return redirect('dashboard/alternatif')->with('success', 'New alternatif has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        return view('dashboard.alternatif.show', [
            'alternatif' => $alternatif
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        return view('dashboard.alternatif.edit', [
            'alternatif' => $alternatif
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatif $alternatif)
    { {
            $rules = [
                'kecamatan' => 'required|max:255',
                'keterangan' => 'required'
            ];

            $validatedData = $request->validate($rules);

            Alternatif::where('id', $alternatif->id)->update($validatedData);
            return redirect('dashboard/alternatif')->with('success', ' Alternatif has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        Alternatif::destroy($alternatif->id);
        Nilai::where('kecamatan_id', '=', $alternatif->id)->delete();
        return redirect('dashboard/alternatif')->with('success', 'Alternatif has been deleted!');
    }
}
