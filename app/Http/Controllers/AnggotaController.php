<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Anggota;
use App\Jabatan;
use App\Kelas;
use App\Proker;
use App\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AnggotaController extends Controller
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
        $kelas = Kelas::all();
        $semester = Semester::all();
        $jabatan = Jabatan::all();
        $agama = Agama::all();
        $anggota = Anggota::where('status', '1')->get();

        return view('pages.admin.anggota.anggota', compact('kelas', 'semester', 'jabatan', 'agama', 'anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $semester = Semester::all();
        $jabatan = Jabatan::all();
        $agama = Agama::all();

        return view('pages.admin.anggota.create', compact('kelas', 'semester', 'jabatan', 'agama'));
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
            'nim' => 'required|unique:anggotas|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'quote' => 'required',
            'filename' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'username' => 'required|unique:anggotas',
            'password' => 'required|min:8',
            'instagram' => 'required|unique:anggotas',
            'telp' => 'required',

        ]);

        $image_file = $request->file('filename');
        $filename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/anggota');
        $image_file->move($destinationPath, $filename);

        $anggota = new Anggota();
        $anggota->nim = $request->nim;
        $anggota->nama = $request->nama;
        $anggota->jenis_kelamin = $request->jk;
        $anggota->alamat = $request->alamat;
        $anggota->id_agama = $request->agama;
        $anggota->quote = $request->quote;
        $anggota->filename = $filename;
        $anggota->id_kelas = $request->kelas;
        $anggota->id_semester  =$request->semester;
        $anggota->id_jabatan = $request->jabatan;
        $anggota->username = $request->username;
        $anggota->password = bcrypt($request->password);
        $anggota->remember_token = bcrypt($request->nim);
        $anggota->instagram = $request->instagram;
        $anggota->telephone = $request->telp;
        $anggota->save();

        //dd($request->all());

        return redirect()->route('anggota')->with('success', 'Successfuly Insert to Database');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function showbyid($id)
    {
        $kelas = Kelas::all();
        $semester = Semester::all();
        $jabatan = Jabatan::all();
        $agama = Agama::all();
        $anggota = Anggota::find($id);
        return view('pages.admin.anggota.showbyid', compact('kelas', 'semester', 'jabatan', 'anggota', 'agama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::all();
        $semester = Semester::all();
        $jabatan = Jabatan::all();
        $agama = Agama::all();
        $anggota = Anggota::find($id);

        //dd($anggota);

        return view('pages.admin.anggota.edit', compact('kelas', 'semester', 'jabatan', 'anggota', 'agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'quote' => 'required',
            'filename' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'required|min:8',
            'telp' => 'required',

        ]);

        $anggota = Anggota::find($id);
        $anggota->nama = $request->nama;
        $anggota->jenis_kelamin = $request->jk;
        $anggota->alamat = $request->alamat;
        $anggota->id_agama = $request->agama;
        $anggota->quote = $request->quote;

        $image_file = $request->file('filename');
        if($image_file == ''){
            $anggota->filename = $request->old_filename;
        }else{
            $filename = time().'.'.$image_file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/anggota');
            $image_file->move($destinationPath, $filename);
            $anggota->filename = $filename;
        }
        $anggota->id_kelas = $request->kelas;
        $anggota->id_semester  =$request->semester;
        $anggota->id_jabatan = $request->jabatan;
        $anggota->password = bcrypt($request->password);
        $anggota->telephone = $request->telp;
        if ($request->status)
            $anggota->status = '1';
        else
            $anggota->status = '0';
        $anggota->update();

        //dd($request->all());

        return redirect()->route('anggota')->with('update', 'Successfuly Update to Database');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->update(['status' => '0']);

        return redirect()->route('anggota')->with('delete', 'Successfuly Delete from Database');
    }
}
