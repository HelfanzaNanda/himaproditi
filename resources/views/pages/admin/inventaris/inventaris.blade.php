<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 12/05/2019
 * Time: 11:41
 */
?>

@extends('templates.default')

@section('content')
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

    <h3 class="heading_b uk-margin-bottom">Inventaris</h3>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Foto</th>
                    <th>Keterangan</th>
                    <th>Jumlah Terakhir</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($inventaris as $inventaris)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$inventaris->nama_inv}}</td>
                        <td>{{$inventaris->jumlah}}</td>
                        <td><a href="{{asset('uploads/inventaris/'. $inventaris->filename)}}"
                               data-uk-lightbox="{group:'gallery'}">
                                <img src="{{asset('uploads/inventaris/'. $inventaris->filename)}}"
                                     style="width: 40px; height: 40px">
                            </a>
                        </td>
                        <td>{{$inventaris->keterangan}}</td>
                        @if($inventaris->jumlah_terakhir == '')
                            <td><a href="{{route('inventaris.edit', $inventaris->id)}}">Tambah Jumlah Terakhir</a></td>
                        @else
                            <td>{{$inventaris->jumlah_terakhir}}</td>
                        @endif
                        @if($inventaris->status == '1')
                            <td><span class="uk-badge uk-badge-success"> Aktif</span></td>
                        @else
                            <td><span class="uk-badge uk-badge-danger">Tidak Aktif</span></td>
                        @endif
                        <td>
                            <a href="{{route('inventaris.edit', $inventaris->id)}}"
                               class="md-btn md-btn-warning md-btn-mini md-btn-wave-light waves-effect waves-button waves-light"><i
                                        class="uk-icon-edit"></i></a>
                            @if($inventaris->status == '1')
                                <a href="{{route('inventaris.destroy', $inventaris->id)}}"
                                   class="md-btn md-btn-danger md-btn-mini md-btn-wave-light waves-effect waves-button waves-light"
                                   onclick="return confirm('Are You Sure to Delete This?')"><i
                                            class="uk-icon-trash-o"></i></a>
                            @else
                                <a href="{{route('inventaris.destroy', $inventaris->id)}}"
                                   class="md-btn md-btn-danger md-btn-mini md-btn-wave-light waves-effect waves-button waves-light disabled"
                                   onclick="return confirm('Are You Sure to Delete This?')"><i
                                            class="uk-icon-trash-o"></i></a>
                            @endif

                        </td>
                    </tr>
                    <?php $no++ ?>
                @endforeach

                </tbody>
                <div class="md-fab-wrapper">
                    <a class="md-fab md-fab-accent" href="{{route('inventaris.create')}}">
                        <i class="material-icons">&#xE145;</i>
                    </a>
                </div>
            </table>
        </div>
    </div>
@endsection
