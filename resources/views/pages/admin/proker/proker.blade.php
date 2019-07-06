<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 05/06/2019
 * Time: 21:42
 */
?>

@extends('templates.default')

@section('content')
    <h3 class="heading_b uk-margin-bottom">Datatables</h3>
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

    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Tipe</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @foreach($proker as $proker)

                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$proker->nama_proker}}</td>
                        <td>{{str_limit($proker->deskripsi, 20)}}</td>
                        <td><img src="{{asset('uploads/proker/'.$proker->filename)}}" width="30px" height="30px" alt="">
                        </td>
                        <td>{{$proker->judul}}</td>
                        @if($proker->tipe == '1')
                            <td><span class="uk-badge uk-badge-primary"> Terprogram</span></td>
                        @else
                            <td><span class="uk-badge uk-badge-warning"> Non Terprogram</span></td>
                        @endif
                        @if($proker->status == '1')
                            <td><span class="uk-badge uk-badge-success">Aktif</span></td>
                        @else
                            <td><span class="uk-badge uk-badge-danger">Tidak Aktif</span></td>
                        @endif
                        <td>
                            <a href="{{route('proker.edit', $proker->id)}}"
                               class="md-btn md-btn-warning md-btn-mini md-btn-wave-light waves-effect waves-button waves-light"><i
                                        class="uk-icon-edit"></i></a>

                            @if($proker->status =='1')
                                <a href="{{route('proker.destroy', $proker->id)}}"
                                   class="md-btn md-btn-danger md-btn-mini md-btn-wave-light waves-effect waves-button waves-light"
                                   onclick="return confirm('Are You Sure to Delete This?')">
                                    <i class="uk-icon-trash-o"></i></a>
                            @else
                                <a href="#"
                                   class="md-btn md-btn-danger md-btn-mini md-btn-wave-light waves-effect waves-button waves-light disabled"><i
                                            class="uk-icon-trash-o"></i></a>
                            @endif
                        </td>
                    </tr>
                    <?php $no++ ?>
                @endforeach
                </tbody>
                <div class="md-fab-wrapper">
                    <a class="md-fab md-fab-accent" href="{{route('proker.create')}}">
                        <i class="material-icons">&#xE145;</i>
                    </a>
                </div>
            </table>
        </div>
    </div>
@endsection


