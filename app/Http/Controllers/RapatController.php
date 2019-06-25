<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Rapat;
use Illuminate\Http\Request;

class RapatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rapat = Rapat::all();
        $anggota = Anggota::all();

        return view('pages.admin.rapat.rapat',compact('rapat', 'anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rapat = Rapat::all();
        $anggota = Anggota::all();

        return view('pages.admin.rapat.create',compact('rapat', 'anggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_rapat' => 'required',
            'tanggal'   => 'required',
            'jam'   => 'required',
            'pembahasan' => 'required',
        ]);

        $rapat = new Rapat();
        $rapat->nama_rapat = $request->nama_rapat;
        $rapat->tanggal = $request->tanggal;
        $rapat->jam = $request->jam;
        $rapat->pembahasan = $request->pembahasan;
        $rapat->id_anggota = $request->pemimpin;
        $rapat->save();

        //dd($request->all());

        return redirect()->route('rapat')->with('success', 'Berhasil DiTambahkan');

    }

    public function uploadPdf(Request $request, $id){


        $pdf_file = $request->file('hasil');
        $filename = time().'.'.$pdf_file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/pdf');
        $pdf_file->move($destinationPath, $filename);

        $rapat = Rapat::find($id);
        $rapat->hasil = $filename;
        $rapat->update();
        //dd($request->all());
        return redirect()->route('rapat')->with('success', 'Berhasil DiTambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rapat  $rapat
     * @return \Illuminate\Http\Response
     */
    public function show(Rapat $rapat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rapat  $rapat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rapat = Rapat::find($id);
        $anggota = Anggota::all();

        return view('pages.admin.rapat.edit', compact('rapat', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rapat  $rapat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama_rapat' => 'required',
            'tanggal'   => 'required',
            'jam'   => 'required',
            'pembahasan' => 'required',
            'hasil' => 'required|max:10000|mimes:doc,docx'
        ]);


        $hasil_file = $request->file('hasil');
        $filename = $hasil_file->getClientOriginalName();
        $destinationPath = public_path('/uploads/rapat');
        $hasil_file->move($destinationPath, $filename);

        $rapat = Rapat::find($id);
        $rapat->nama_rapat = $request->nama_rapat;
        $rapat->tanggal = $request->tanggal;
        $rapat->jam = $request->jam;
        $rapat->pembahasan = $request->pembahasan;
        $rapat->id_anggota = $request->pemimpin;
        $rapat->hasil = $filename;
        if ($request->status)
            $rapat->status = '1';
        else
            $rapat->status = '0';
        $rapat->update();

        //dd($request->all());

        return redirect()->route('rapat')->with('update', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rapat  $rapat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rapat = Rapat::find($id);
        $rapat->update(['status' => '0']);

        return redirect()->route('rapat')->with('delete', 'Data Berhasil di Hapus');

    }
}
