<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 13/05/2019
 * Time: 14:44
 */
?>

@extends('templates.default')

@section('content')
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Add inventaris</h3>
            <form action="{{route('inventaris.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Nama</label>
                            <input type="text" class="input-count md-input" name="nama_inv"
                                   value="{{old('nama_inv')}}" {{$errors->has('nama_inv')?'is-invalid':''}}/>

                            @if ($errors->has('nama_inv'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('nama_inv') }}</b></p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Jumlah</label>
                            <input type="number" class="md-input input-count" name="jumlah"
                                   value="{{old('jumlah')}}" {{$errors->has('jumlah')?'is-invalid':''}}/>
                            @if ($errors->has('jumlah'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('jumlah') }}</b></p>
                                </span>
                            @endif
                        </div>
                        <div class="uk-form-row">
                            <div class="form-group" style="margin-top:10px !important;">
                                <label>Keterangan</label>
                                <textarea cols="30" rows="4" class="md-input"
                                          name="keterangan" {{$errors->has('keterangan')?'is-invalid':''}}>{{old('keterangan')}}</textarea>
                                @if ($errors->has('keterangan'))
                                    <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('keterangan') }}</b></p>
                                </span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="form-group">
                            <h3 class="heading_a uk-margin-small-bottom">Foto</h3>
                            <input type="file" id="input-file-b" class="dropify" name="filename" {{$errors->has('filename')?'is-invalid':''}}/>
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
