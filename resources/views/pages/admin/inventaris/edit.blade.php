<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 13/05/2019
 * Time: 15:12
 */
?>

@extends('templates.default')

@section('content')
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Edit inventaris</h3>
            <form action="{{route('inventaris.update', $inventaris->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Nama</label>
                            <input type="text" class="input-count md-input" name="nama_inv"
                                   value="{{$inventaris->nama_inv}}" {{$errors->has('nama_inv')?'is-invalid':''}}/>

                            @if ($errors->has('nama_inv'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('nama_inv') }}</b></p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Jumlah</label>
                            <input type="number" class="md-input input-count" name="jumlah"
                                   value="{{$inventaris->jumlah}}" {{$errors->has('jumlah')?'is-invalid':''}}/>
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
                                          name="keterangan" {{$errors->has('keterangan')?'is-invalid':''}}>{{$inventaris->keterangan}}</textarea>
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
                            <input type="hidden" name="old_filename" value="{{$inventaris->filename}}">
                            <input type="file" id="input-file-b" class="dropify"
                                   name="filename" data-default-file="{{asset('uploads/inventaris/'.$inventaris->filename)}}"
                                   value="{{asset('uploads/inventaris/'.$inventaris->filename)}}"/>
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Jumlah Terakhir</label>
                            <input type="number" class="md-input input-count" name="jumlah_terakhir"
                                   value="{{old('jumlah_terakhir')}}" {{$errors->has('jumlah_terakhir')?'is-invalid':''}}/>
                            @if ($errors->has('jumlah_terakhir'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('jumlah_terakhir') }}</b></p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group" style="margin-top:10px !important;">
                            @if($inventaris->status == '0')
                                <input type="checkbox" name="status" data-switchery/>
                            @else
                                <input type="checkbox" name="status" data-switchery checked/>
                            @endif
                            <label class="inline-label">Status</label>
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