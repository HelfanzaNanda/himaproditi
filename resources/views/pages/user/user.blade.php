<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 18/06/2019
 * Time: 12:54
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in Anggota!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

