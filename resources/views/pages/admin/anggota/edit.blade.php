<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 22/05/2019
 * Time: 8:09
 */
?>
@extends('templates.default')

@section('content')
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Edit Anggota</h3>
            <form action="{{route('anggota.update', $anggota)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>NIM</label>
                            <input type="number" class="input-count md-input" name="nim" disabled value="{{$anggota->nim}}"/>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Nama</label>
                            <input type="text" class="md-input input-count" name="nama"
                                   value="{{$anggota->nama}}" {{$errors->has('nama')?'is-invalid':''}}/>
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
                                    name="jk" >
                                <option value="Laki-Laki" @if($anggota->jenis_kelamin=='laki-laki') {{ "selected" }} @endif>
                                    Laki-Laki
                                </option>
                                <option value="Perempuan" @if($anggota->jenis_kelamin=='perempuan') {{ "selected" }} @endif>
                                    Perempuan
                                </option>
                            </select>

                        </div>

                        <div class="uk-form-row" style="margin-top:30px !important;">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea cols="30" rows="4" class="md-input"
                                          name="alamat" {{$errors->has('alamat')?'is-invalid':''}}>{{$anggota->alamat}}</textarea>
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
                                    name="agama" {{$errors->has('agama')?'is-invalid':''}}>
                                @foreach($agama as $agama)
                                    <option value="{{$agama->id}}"
                                            @if($agama->id == $anggota->id_agama)selected @endif>{{$agama->agama}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('agama'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('agama') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="uk-form-row" style="margin-top:30px !important;">
                            <div class="form-group">
                                <label>Quote</label>
                                <textarea cols="30" rows="4" class="md-input"
                                          name="quote" {{$errors->has('quote')?'is-invalid':''}}>{{$anggota->quote}}</textarea>
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
                            <input type="hidden" name="old_filename" value="{{$anggota->filename}}">
                            <input type="file" id="input-file-b" class="dropify" name="filename"
                                   data-default-file="{{asset('uploads/anggota/'.$anggota->filename)}}"
                                   value="{{asset('uploads/anggota/'.$anggota->filename)}}"/>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Kelas</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="kelas" {{$errors->has('kelas')?'is-invalid':''}}>
                                @foreach($kelas as $kelas)
                                    <option value="{{ $kelas->id }}"
                                            @if($anggota->id_kelas == $kelas->id) selected @endif>{{ $kelas->kelas }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kelas'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('kelas') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Semester</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="semester" {{$errors->has('semester')?'is-invalid':''}}>
                                @foreach($semester as $semester)
                                    <option value="{{ $semester->id }}"
                                            @if($anggota->id_semester == $semester->id) selected @endif>{{ $semester->semester }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('semester'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('semester') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Jabatan</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="jabatan" {{$errors->has('jabatan')?'is-invalid':''}}>
                                @foreach($jabatan as $jabatan)
                                    <option value="{{ $jabatan->id }}"
                                            @if($anggota->id_jabatan == $jabatan->id)selected @endif>{{ $jabatan->jabatan }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('jabatan'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('jabatan') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Email</label>
                            <input type="email" class="md-input input-count" name="email" disabled value="{{$anggota->username}}"/>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Password</label>
                            <input type="password" class="md-input my-password" name="password" id="password"
                                   value="{{old('password')}}" {{$errors->has('password')?'is-invalid':''}}/>
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
                                <input type="text" class="input-count md-input" name="instagram" disabled value="{{ $anggota->instagram }}"/>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Telephone</label>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon md-btn-primary"><i class="md-list-addon-icon material-icons">&#xE0CD;</i></span>
                                <input type="number" class="md-input input-count" name="telp"
                                       {{$errors->has('telp')?'is-invalid':''}} value="{{ $anggota->telephone }}"/>
                            </div>

                            @if ($errors->has('telp'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('telp') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            @if($anggota->status == '0')
                                <input type="checkbox" name="status" data-switchery/>
                            @else
                                <input type="checkbox" name="status" data-switchery checked/>
                            @endif
                            <label class="inline-label">Status</label>
                        </div>

                    </div>

                    <div class="form-group float-right">
                        <button class="md-btn md-btn-success">Update</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
