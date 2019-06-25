<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/06/2019
 * Time: 10:18
 */
?>

@extends('templates.default')

@section('content')
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Add Proker</h3>
            <form action="{{route('proker.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Nama Proker</label>
                            <input type="text" class="input-count md-input" name="nama_proker"
                                   value="{{old('nama_proker')}}" {{$errors->has('nama_proker')?'is-invalid':''}}/>

                            @if ($errors->has('nama_proker'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('nama_proker') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Judul</label>
                            <input type="text" class="input-count md-input" name="judul"
                                   value="{{old('judul')}}" {{$errors->has('judul')?'is-invalid':''}}/>

                            @if ($errors->has('judul'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('judul') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="5"
                                      class="md-input" {{$errors->has('deskripsi')?'is-invalid':''}}>{{old('deskripsi')}}</textarea>

                            @if ($errors->has('deskripsi'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('deskripsi') }}</b></p>
                                </span>
                            @endif
                        </div>

                    </div>

                    <div class="uk-width-medium-1-2">


                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Tipe Proker</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="tipe">
                                <option value="Terprogram">Terprogram</option>
                                <option value="Non_Terprogram">Non Terprogram</option>
                            </select>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Foto</label>
                            <input type="file" id="input-file-b" class="dropify"
                                   name="filename" {{$errors->has('filename')?'is-invalid':''}}/>
                            @if ($errors->has('filename'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('filename') }}</b></p>
                                </span>
                            @endif
                        </div>

                    </div>


                    <div class="form-group">
                        <button class="md-btn md-btn-success">Save</button>
                    </div>


                </div>
            </form>

        </div>
    </div>
@endsection