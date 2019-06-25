<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 15:17
 */

?>
@extends('templates.app')

@section('user')

    <section class="section-padding--small sponsor-bg">
        <div class="container">
            <div class="container">
                <div class="section-intro text-center pb-80px">
                    <h2 class="primary-text">Anggota Hima</h2>
                    <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">
                </div>

            <div class="row">

                @foreach($anggota as $anggota)
                {{--foreach disini--}}

                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card-speaker">
                        <img class="card-img rounded-0" src="{{asset('uploads/anggota/'.$anggota->filename)}}" alt="">
                        <div class="speaker-footer">
                            <h4>{{$anggota->nama}}</h4>
                            @foreach($jabatan as $j)
                                @if($anggota->id_jabatan == $j->id)
                                    <p>{{$j->jabatan}}</p>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>

                @endforeach
                {{--endforeach disini--}}

                <div class="w-100 mb-50px d-none d-lg-block"></div>
            </div>
        </div>
    </section>
@endsection

