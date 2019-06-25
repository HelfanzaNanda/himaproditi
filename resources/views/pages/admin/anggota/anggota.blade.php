<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 22/05/2019
 * Time: 8:08
 */
?>

@extends('templates.default')

@section('content')

    <div id="page_content_inner">
        @if($message = Session::get('success'))
            <div class="uk-alert uk-alert-success" data-uk-alert>
                <a href="#" class="uk-alert-close uk-close"></a>
                <p style="color: white">{{$message}}</p>
            </div>
        @endif

        @if($message = Session::get('update'))
            <div class="uk-alert uk-alert-success" data-uk-alert>
                <a href="#" class="uk-alert-close uk-close"></a>
                <p style="color: white">{{$message}}</p>
            </div>
        @endif
        @if($message = Session::get('delete'))
            <div class="uk-alert uk-alert-success" data-uk-alert>
                <a href="#" class="uk-alert-close uk-close"></a>
                <p style="color: white">{{$message}}</p>
            </div>
        @endif
        <div class="uk-grid" data-uk-grid-margin>

            @foreach($anggota as $anggota)
                <div class="uk-width-medium-3-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar">
                                <div class="thumbnail">
                                    <img src="{{asset('uploads/anggota/'.$anggota->filename)}}" alt="user avatar"/>
                                </div>
                            </div>

                            <div class="user_heading_content">
                                <h2 class="heading_b uk-margin-bottom"><span
                                            class="uk-text-truncate">{{$anggota->nama}}</span>
                                    @foreach($jabatan as $j)
                                        @if($anggota->id_jabatan == $j->id)
                                            <span class="sub-heading">{{$j->jabatan}}</span>
                                        @endif
                                    @endforeach
                                </h2>
                            </div>
                            <a class="md-fab md-fab-small md-fab-accent hidden-print"
                               href="{{route('anggota.edit', $anggota->id)}}">
                                <i class="material-icons">&#xE150;</i>
                            </a>
                        </div>
                        <div class="user_content">
                            <li> {{$anggota->quote}}

                                <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom" data-uk-grid-margin>
                                    <div class="uk-width-large-4-4">
                                        {{--<h4 class="heading_c uk-margin-small-bottom">Contact Info</h4>--}}
                                        <ul class="md-list md-list-addon">
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
                                                    <span class="md-list-heading">{{'@'.$anggota->instagram}}</span>
                                                    <span class="uk-text-small uk-text-muted">Instagram</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <i class="md-list-addon-icon uk-icon-genderless"></i>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">{{$anggota->jenis_kelamin}}</span>
                                                    <span class="uk-text-small uk-text-muted">Jenis Kelamin</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-2-4">
                                    @if($anggota->status == '0')
                                        <a href="{{route('anggota.destroy', $anggota->id)}}"
                                           onclick="return confirm('Are You Sure to Delete This?')"
                                           class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light disabled"><i
                                                    class="uk-icon-trash-o"></i></a>
                                    @else
                                        <a href="{{route('anggota.destroy', $anggota->id)}}"
                                           onclick="return confirm('Are You Sure to Delete This?')"
                                           class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light"><i
                                                    class="uk-icon-trash-o"></i></a>
                                    @endif
                                </div>

                                <div class="uk-width-medium-2-10">
                                    <a href="{{route('anggota.showbyid', $anggota->id)}}"
                                       class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light"><i
                                                class="uk-icon-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="{{route('anggota.create')}}">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>



@endsection
