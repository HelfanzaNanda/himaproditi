<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/06/2019
 * Time: 10:17
 */
?>

@extends('templates.default')

@section('content')
    <h3 class="heading_b uk-margin-bottom">Rapat</h3>
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
                    <th>Nama Rapat</th>
                    <th>Tanggal</th>
                    <th>Pembahasan</th>
                    <th>Pemimpin Rapat</th>
                    <th>Hasil</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @foreach($rapat as $rapat)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$rapat->nama_rapat}}</td>
                        <td>{{$rapat->tanggal}}</td>
                        <td>{{$rapat->pembahasan}}</td>
                        <td>
                            @foreach($anggota as $a)
                                @if($a->id == $rapat->id_anggota)
                                    {{$a->nama}}
                                @endif
                            @endforeach
                        </td>
                        @if($rapat->hasil == '')
                            <td><a href="{{route('rapat.edit', $rapat->id)}}">Add Hasil</a></td>
                        @else
                            <td><a href="{{asset('uploads/rapat/'. $rapat->hasil)}}">{{$rapat->nama_rapat}}.docx</a></td>
                        @endif

                        @if($rapat->status == '1')
                            <td><span class="uk-badge uk-badge-success">Aktif</span></td>
                        @else
                            <td><span class="uk-badge uk-badge-danger">Tidak Aktif</span></td>
                        @endif
                        <td>
                            <a href="{{route('rapat.edit', $rapat->id)}}"
                               class="md-btn md-btn-warning md-btn-mini md-btn-wave-light waves-effect waves-button waves-light"><i
                                        class="uk-icon-edit"></i></a>

                            @if($rapat->status == '1')
                                <a href="{{route('rapat.destroy', $rapat->id)}}"
                                   class="md-btn md-btn-danger md-btn-mini md-btn-wave-light waves-effect waves-button waves-light"
                                   onclick="return confirm('Are You Sure to Delete This?')"><i
                                            class="uk-icon-trash-o"></i></a>
                            @else
                                <a href="#"
                                   class="md-btn md-btn-danger md-btn-mini md-btn-wave-light waves-effect waves-button waves-light disabled">
                                    <i class="uk-icon-trash-o"></i></a>
                            @endif

                        </td>
                    </tr>

                    <?php $no++ ?>
                @endforeach

                </tbody>
                <div class="md-fab-wrapper">
                    <a class="md-fab md-fab-accent" href="{{route('rapat.create')}}">
                        <i class="material-icons">&#xE145;</i>
                    </a>
                </div>
            </table>
        </div>
    </div>
@endsection

