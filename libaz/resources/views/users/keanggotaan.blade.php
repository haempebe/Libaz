@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')
<main class="main-content pt-md-6 pt-6 mt-2 ps">
    <div class="col my-6 mb-8">
        <div class="my-6">
            <div class="">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="h3" style="text-align: left;">Keanggotaan</div>
                                <div class="col-lg-12 mb-2" style="text-align: left;">Untuk menjadi anggota Libaz
                                    Perpustakaan
                                    Digital SMK TI BAZMA, Peserta Didik, Tenaga Pendidik, dan Kependidikan harus memenuhi
                                    beberapa persyaratan kanggotaan berikut:</div>
                                <br>
                                <div class="h4" style="text-align: left;">Syarat dan ketentuan Keanggotaan</div>
                                <div class="col-lg-12 mb-2" style="text-align: left;">1. Hanya Peserta Didik, Tenaga
                                    Pendidik,
                                    dan Kependidikan SMK TI BAZMA yang memenuhi syarat untuk menjadi anggota LiBaz.
                                    Pendaftaran terbuka untuk semua tingkatan kelas atau tingkat jabatan.</div>
                                <div class="col-lg-12 mb-2" style="text-align: left;">2. Proses pendaftaran dilakukan secara
                                    daring melalui portal resmi Libaz. Calon anggota akan diminta untuk mengisi formulir
                                    pendaftaran yang mungkin mencakup informasi seperti nama lengkap, nomor induk, dan
                                    informasi kontak.</div>
                                <div class="col-lg-12 mb-2" style="text-align: left;">3. Calon anggota diharapkan untuk
                                    mengetahui dan setuju dengan aturan dan etika penggunaan Perpustakaan Digital. Ini
                                    termasuk komitmen untuk menggunakan sumber daya dengan etika, tidak menyalahgunakan
                                    informasi, dan menjaga keamanan akses.</div>
                                <div class="col-lg-12 mb-2" style="text-align: left;">4. Anggota diharapkan untuk menjadi
                                    anggota
                                    aktif dengan berpartisipasi dalam kegiatan Perpustakaan Digital, seperti diskusi
                                    literasi, klub buku, atau kegiat
                                    an literasi lainnya. </div>
                                <div class="col-lg-12 mb-2" style="text-align: left;">Setelah memenuhi persyaratan di atas,
                                    calon
                                    anggota akan diberikan akses penuh ke platform Perpustakaan Digital, termasuk koleksi
                                    digital, layanan peminjaman buku digital, dan kegiatan literasi lainnya. Keanggotaan ini
                                    memberikan akses eksklusif dan mendukung para anggota dalam perjalanan literasi digital.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form method="POST" action="{{ route('anggota.perform') }}">
                                @csrf
                            <div class="card p-5 shadow">
                                <div class="h2 my-6 text-start">ISI FORMULIR KEANGGOTAAN
                                    <br> DI SINI
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" name="username" class="form-control" placeholder="Username"
                                        aria-label="Name" value="{{ old('username') }}">
                                    @error('username')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                    <label for="floatingInput">Nama</label>
                                    
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        aria-label="Email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                    <label for="floatingPassword">Email</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        aria-label="Password">
                                    @error('password')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <button type="submit" class="btn btn-dark">Daftar</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="ps__rail-x" style="width: 2062px; left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</main>

@endsection
