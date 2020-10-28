@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="head mb-5">
                <h1 class="display-4 text-center">Tentang Elia</h1>
                <p class="text-center">Halo! Kenalin, gw Elia 👋</p>
            </div>
            <div class="summary text-left">
                <p>
                    Halo, gw Elia. seseorang yang demen banget nyebut dirinya sebagai Web Developer, ya walaupun skill masih pemula banget, yang dimana sekarang sedang seneng banget eksplorasi dengan semua mengenai Web Developing kaya Laravel, Vue, dll.
                </p>
                <p class="py-4">
                    Kalo belom kenal secara langsung, ini foto gw yang kaya "kuproy" yang kaga nyelesain semenan tembok di belakang gw. 😅
                </p>
                <div class="w-100 text-center">
                    <img src="https://drive.google.com/uc?id=1fFRpww-jQ0k8NghXav74Nb5Cu-TSP129" width="480px" alt="" class="img-fluid rounded shadow-lg">
                </div>

                <p class="pt-4">
                    Untuk sekarang gw tinggal di Jakarta Utara (Sunter) tepatnya di kecamatan Tanjung Priok yang memiliki suhu cuaca panas terus.
                </p>

                <p class="pt-4">
                    Gw seneng banget eksplorasi, eksperimen walaupun gagal, belajar, berbagi tentang apa yang gw tau, bertanya dan kepo tentang apa yang gw gatau.
                </p>
                
                <p class="pt-4">
                    Kalau mau tau apa yang lagi gw kerjakan pas downtime, bisa cek di <a href="https://github.com/eliabrian" class="text-decoration-none">Github</a>, dan kalo mau liat apa yang sedang gw pelajari dan dalemin bisa lihat <a href="/blog">blog</a> ini.
                </p>

                <p class="pt-4">
                    Akan ada banyak kekurangan di web dan di blog yang saya tulis disini, jadi mohon dimaafkan jika ada perkataan yang tidak patut dan tidak mengenakan pembaca.
                </p>

                <p class="pt-4">
                    Terima kasih telah mengunjungi halaman ini, selamat menikmat blog ini!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>
    a{
        color: #42b883;
    }

    a:hover{
        color: #35495e
    }
</style>
@endsection