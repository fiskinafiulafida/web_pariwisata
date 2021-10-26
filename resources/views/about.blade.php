@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Halaman About Website Pariwisata') }}</div>

                <div class="card-body">
                    @if (session('about'))
                        <div class="alert alert-success" role="alert">
                            {{ session('about') }}
                        </div>
                    @endif
                        <center>
                            <b>
                                <h3>
                                    {{ __('Sistem Informasi Pariwisata Kota Wisata Batu') }}
                                </h3>
                            </b>
                        </center>
                        <center>
                            <img src="{{asset('image/1.jpg')}}"><br>
                        </center>
                            {{ __('Pada Halaman Website Pariwisata Kota Batu merupakan salah satu Sistem Informasi Tentang Pariwisata.
                                Batu merupakan salah satu kota berhawa sejuk yang bertetangga dengan Malang dan Kediri dikenal sebagai gudangnya objek wisata. 
                                Kota yang dulunya merupakan bagian dari Kabupaten Malang dan lalu berstatus kota administratif itu kini sudah 
                                menjadi kota otonom. Sejak berdiri sendiri, Batu telah berbenah mengembangkan potensi wisatanya. Hasilnya, 
                                sebagian besar wisata populer dan kekinian yang ada di Malang Raya saat ini merupakan protected kota Batu.')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
