<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Jabatan;
use App\Proker;

class FrontEndController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:anggota')->except([
            'userIndex', 'userAbout', 'userAnggota',
            'userRapat', 'userNews', 'UserNewsDetail'
        ]);
    }

    public function userIndex()
    {
        return view('pages.user.home');
    }

    public function userAbout(){
        return view('pages.user.about');
    }

    public function  userAnggota(){
        $anggota = Anggota::all();
        $jabatan = Jabatan::all();
        return view('pages.user.anggota',compact('anggota', 'jabatan'));
    }

    public function userRapat(){
        return view('pages.user.rapat');
    }

    public function userNews(){
        $news = Proker::all();
        return view('pages.user.news', compact('news'));
    }

    public function userNewsDetail($slug){

        $newsDetail = Proker::where('slug', $slug)->first();
//        dd($newsDetail);
        return view('pages.user.news-detail', [
            'newsDetail' => $newsDetail,
        ]);
    }
}
