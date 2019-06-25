<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 03/06/2019
 * Time: 14:59
 */
?>

@extends('templates.default')

@section('content')

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-large-9-10">

            <div class="md-card">
                <div class="user_heading">
                    <div class="user_heading_avatar">
                        <div class="thumbnail">
                            <img src="{{asset('uploads/anggota/'.$anggota->filename)}}" alt="user avatar"/>
                        </div>
                    </div>
                    <div class="user_heading_content">
                        <h2 class="heading_b uk-margin-bottom">
                            <span class="uk-text-truncate">{{$anggota->nama}}</span>
                            @foreach($jabatan as $j)
                                @if($anggota->id_jabatan == $j->id)
                                    <span class="sub-heading">{{$j->jabatan}}</span>
                                @endif
                            @endforeach
                            @if($anggota->status == 1)
                                <span class="uk-badge uk-badge-success"> Aktif</span>
                            @else
                                <span class="uk-badge uk-badge-danger">Tidak Aktif</span>
                            @endif
                        </h2>

                    </div>

                    <a class="md-fab md-fab-small md-fab-accent hidden-print" href="{{route('anggota.edit', $anggota->id)}}">
                        <i class="material-icons">&#xE150;</i>
                    </a>
                </div>
                <div class="user_content">
                    <li>{{$anggota->quote}}
                        <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom" data-uk-grid-margin>
                            <div class="uk-width-large-1-2">

                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon uk-icon-graduation-cap"></i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">{{$anggota->nim}}</span>
                                            <span class="uk-text-small uk-text-muted">NIM</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">{{$anggota->username}}</span>
                                            <span class="uk-text-small uk-text-muted">Email</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">{{$anggota->telephone}}</span>
                                            <span class="uk-text-small uk-text-muted">Telephone</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon uk-icon-instagram"></i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">{{'@'. $anggota->instagram}}</span>
                                            <span class="uk-text-small uk-text-muted">instagram</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="uk-width-large-1-2">
                             {{--   <h4 class="heading_c uk-margin-small-bottom">My groups</h4>--}}
                                <ul class="md-list ">
                                    <li>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">{{$anggota->jenis_kelamin}}</span>
                                            <span class="uk-text-small uk-text-muted">Jenis Kelamin</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            @foreach($kelas as $k)
                                                @if($anggota->id_kelas == $k->id)
                                                    <span class="md-list-heading">{{$k->kelas}}</span>
                                                @endif
                                            @endforeach
                                            <span class="uk-text-small uk-text-muted">Kelas</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            @foreach($semester as $s)
                                                @if($anggota->id_semester == $s->id)
                                                    <span class="md-list-heading">{{$s->semester}}</span>
                                                @endif
                                            @endforeach
                                            <span class="uk-text-small uk-text-muted">Semester</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">{{$anggota->alamat}}</span>
                                            <span class="uk-text-small uk-text-muted">Alamat</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>

    </div>
@endsection
