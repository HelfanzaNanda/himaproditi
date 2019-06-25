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
            <h3 class="heading_a">Add Rapat</h3>
            <form action="{{route('rapat.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="uk-grid" data-uk-grid-margin>

                    <div class="uk-width-medium-1-2">

                        <div class="form-group" style="margin-top:10px !important;">
                            <label>Nama Rapat</label>
                            <input type="text" class="input-count md-input" name="nama_rapat"
                                   {{$errors->has('nama_rapat')?'is-invalid':''}} value="{{ old('nama_rapat') }}"/>
                            @if ($errors->has('nama_rapat'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('nama_rapat') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:10px !important;">
                            <label for="">Pemimpin</label>
                            <select id="select_demo_5" data-md-selectize data-md-selectize-bottom
                                    data-uk-tooltip="{pos:'top'}"
                                    name="pemimpin">
                                @foreach($anggota as $a)
                                    <option value="{{$a->id}}">{{$a->nama}}</option>
                                @endforeach
                            </select>
                        </div>



                    </div>

                    <div class="uk-width-medium-1-2">
                        <label for="">Tanggal Rapat</label>
                        <div class="uk-grid">

                            <div class="uk-width-medium-1-2">
                                <div class="uk-input-group" style="margin-top:10px !important;">
                                    <span class="uk-input-group-addon"><i
                                                class="uk-input-group-icon uk-icon-calendar"></i></span>
                                    <label for="uk_dp_1">Pilih Tanggal</label>
                                    <input class="md-input" type="text" id="uk_dp_1" name="tanggal"
                                           data-uk-datepicker="{format:'DD.MM.YYYY'}"
                                           {{$errors->has('tanggal')?'is-invalid':''}} value="{{ old('tanggal') }}">
                                    @if ($errors->has('tanggal'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('tanggal') }}</b></p>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                                <div class="uk-input-group" style="margin-top:10px !important;">
                                    <span class="uk-input-group-addon"><i
                                                class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                    <label for="uk_tp_1">Pilih Jam</label>
                                    <input class="md-input" type="text" id="uk_tp_1" data-uk-timepicker name="jam"
                                           {{$errors->has('jam')?'is-invalid':''}} value="{{ old('jam') }}">
                                    @if ($errors->has('jam'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('jam') }}</b></p>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="uk-form-row" style="margin-top:10px !important;">
                            <div class="form-group">
                                <label>Pembahasan</label>
                                <textarea cols="30" rows="4" class="md-input"
                                          name="pembahasan" {{$errors->has('pembahasan')?'is-invalid':''}}>{{ old('pembahasan') }}</textarea>
                                @if ($errors->has('pembahasan'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('pembahasan') }}</b></p>
                                    </span>
                                @endif
                            </div>
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

