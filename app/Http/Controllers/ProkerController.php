<?php

namespace App\Http\Controllers;

use App\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
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
        $proker = Proker::all();

        return view('pages.admin.proker.proker', compact('proker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.proker.create');
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
            'nama_proker' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'filename' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $image_file = $request->file('filename');
        $filename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/proker');
        $image_file->move($destinationPath, $filename);

        if ($request->tipe == 'Terprogram')
            $tipe = '1';
        else
            $tipe = '0';


        $proker = new Proker();
        $proker->nama_proker = $request->nama_proker;
        $proker->judul = $request->judul;
        $proker->slug = str_slug($request->judul);
        $proker->deskripsi = $request->deskripsi;
        $proker->filename = $filename;
        $proker->tipe = $tipe;
        $proker->save();

        //dd($request->all());

        return redirect()->route('proker')->with('success', 'Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function show(Proker $proker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proker = Proker::find($id);
        return view('pages.admin.proker.edit', compact('proker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_proker' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'filename' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image_file = $request->file('filename');
        if($image_file == ''){
            $img_file = $request->old_filename;
        }else{
            $filename = time().'.'.$image_file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/proker');
            $image_file->move($destinationPath, $filename);
            $img_file = $filename;
        }

        if ($request->tipe == 'Terprogram')
            $tipe = '1';
        else
            $tipe = '0';

        if ($request->status)
            $status = '1';
        else
            $status = '0';

        $proker = Proker::find($id);
        $proker->nama_proker = $request->nama_proker;
        $proker->judul = $request->judul;
        $proker->slug = str_slug($request->judul);
        $proker->deskripsi = $request->deskripsi;
        $proker->filename = $img_file;
        $proker->tipe = $tipe;
        $proker->status = $status;
        $proker->update();

        //dd($request->all());

        return redirect()->route('proker')->with('update', 'Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proker = Proker::find($id);
        $proker->update(['status' => '0']);

        return redirect()->route('proker')->with('delete', 'Data Berhasil Di Hapus');
    }
}
