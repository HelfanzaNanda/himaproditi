<?php

namespace App\Http\Controllers;

use App\Inventaris;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Validation;
use Illuminate\Support\Facades\Auth;

class InventarisController extends Controller
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
        $inventaris = Inventaris::where('status', '1')->get();
        return view('pages.admin.inventaris.inventaris', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.inventaris.create');
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
            'nama_inv' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
            'filename' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image_file = $request->file('filename');
        $filename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/inventaris');
        $image_file->move($destinationPath, $filename);

        $inventaris = new Inventaris();
        $inventaris->nama_inv = $request->nama_inv;
        $inventaris->jumlah = $request->jumlah;
        $inventaris->keterangan = $request->keterangan;
        //$inventaris->created_by = Auth::user()->username;
        $inventaris->filename = $filename;
        //$inventaris->created_by = Auth::user()->getAuthIdentifierName(name);
        //$inventaris->updated_by = Auth::user()->getRememberTokenName();
        $inventaris->save();


        //dd($request->all());

        return redirect()->route('inventaris')->with('success', 'Successfuly Insert to Database');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventaris = Inventaris::find($id);

        return view('pages.admin.inventaris.edit', compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_inv' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
            'filename' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'jumlah_terakhir' => 'required'
        ]);

        $inventaris = Inventaris::find($id);
        $inventaris->nama_inv = $request->nama_inv;
        $inventaris->jumlah = $request->jumlah;
        $inventaris->keterangan = $request->keterangan;
        $image_file = $request->file('filename');
        if($image_file == ''){
            $inventaris->filename = $request->old_filename;
        }else{
            $filename = time().'.'.$image_file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/inventaris');
            $image_file->move($destinationPath, $filename);
            $inventaris->filename = $filename;
        }
        $inventaris->jumlah_terakhir = $request->jumlah_terakhir;
        if ($request->status)
            $inventaris->status = '1';
        else
            $inventaris->status = '0';
        $inventaris->update();

        //dd($request->all());

        return redirect()->route('inventaris')->with('update', 'Successfuly Update to Database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->update(['status' => '0']);

        return redirect()->route('inventaris')->with('delete', 'Successfuly Delete from Database');
    }

}
