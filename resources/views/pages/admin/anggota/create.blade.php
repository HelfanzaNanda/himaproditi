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
    <div class="md-card">
        <div class="md-card-content">

            <h3 class="heading_a">Add Anggota</h3>
            <form action="{{route('anggota.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>NIM</label>
                            <input type="number" class="input-count md-input"
                                   {{$errors->has('nim')?'is-invalid':''}} name="nim" value="{{ old('nim') }}"/>
                            @if ($errors->has('nim'))
                                <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('nim') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Nama</label>
                            <input type="text" class="md-input input-count"
                                   {{$errors->has('nama')?'is-invalid':''}} name="nama" value="{{ old('nama') }}"/>
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('nama') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Jenis Kelamin</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="jk">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="uk-form-row" style="margin-top:30px !important;">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea cols="30" rows="4" class="md-input"
                                          name="alamat" {{$errors->has('alamat')?'is-invalid':''}}>{{old('alamat')}}</textarea>
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('alamat') }}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Agama</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="agama">
                                @foreach($agama as $agama)
                                    <option value="{{$agama->id}}">{{$agama->agama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="uk-form-row" style="margin-top:30px !important;">
                            <div class="form-group">
                                <label>Quote</label>
                                <textarea cols="30" rows="4" class="md-input"
                                          name="quote" {{$errors->has('quote')?'is-invalid':''}}>{{old('quote')}}</textarea>
                                @if ($errors->has('quote'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('quote') }}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="uk-width-medium-1-2">

                        <div class="form-group">
                            <h3 class="heading_a uk-margin-small-bottom">Foto</h3>
                            <input type="file" id="input-file-b" class="dropify" name="filename" value="{{ old('filename') }}"
                                   {{$errors->has('filename')?'is-invalid':''}} value="{{ old('filename') }}"/>
                            @if ($errors->has('filename'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('filename') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Kelas</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="kelas" >
                                @foreach($kelas as $kelas)
                                    <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Semester</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="semester" >
                                @foreach($semester as $semester)
                                    <option value="{{$semester->id}}">{{$semester->semester}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Jabatan</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="jabatan">
                                @foreach($jabatan as $jabatan)
                                    <option value="{{$jabatan->id}}">{{$jabatan->jabatan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Email</label>
                            <input type="email" class="input-count md-input" name="username"
                                   {{$errors->has('username')?'is-invalid':''}} value="{{ old('username') }}"/>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('username') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Password</label>
                            <input type="password" class="md-input input-count my-password" name="password" id="password"
                                    value="{{ old('password') }}" data-toggle="password" {{$errors->has('password')?'is-invalid':''}}/>
                            <input type="checkbox" class="showPassword">Show Password
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('password') }}</b></p>
                                </span>
                            @endif

                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Instagram</label>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon md-btn-primary">@</span>
                                <input type="text" class="input-count md-input" name="instagram"
                                       {{$errors->has('instagram')?'is-invalid':''}} value="{{ old('instagram') }}"/>
                            </div>
                            @if ($errors->has('instagram'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('instagram') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Telephone</label>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon md-btn-primary"><i class="md-list-addon-icon material-icons">&#xE0CD;</i></span>
                                <input type="number" class="md-input input-count" name="telp"
                                       {{$errors->has('telp')?'is-invalid':''}} value="{{ old('telp') }}"/>
                            </div>

                            @if ($errors->has('telp'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('telp') }}</b></p>
                                </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group float-right">
                        <button class="md-btn md-btn-success">Save</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
