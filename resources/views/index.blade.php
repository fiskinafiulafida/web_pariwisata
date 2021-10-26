@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('index'))
                        <div class="alert alert-success" role="alert">
                            {{ session('index') }}
                        </div>
                    @endif
                        <center>
                            <b>
                                <h2>
                                    {{ __('Selamat Datang di Sistem Informasi Pariwisata Kota Wisata Batu') }}
                                </h2>
                            </b>
                        </center>
                        <center>
                            <img src="{{asset('image/1.jpg')}}"><br>
                        </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
