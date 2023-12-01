@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')


    <div class="container text-center">
        <div class="row align-items-center py-5">
            <div class="col-6 h2 text-start">tentang perpustakaan</div>
            <div class="row align-items-center py-5">
                <img src="./img/illustrations/image/logo-ct-dark.png" alt="logo libaz" class="w-35 mt-5 col-6 ms-3">


                <div class="col-6 mt-5 ms-5" style="text-align: left ">
                    LiBaz adalah platform Perpustakaan Digital SMK TI BAZMA, memadukan literasi dengan teknologi modern.
                    Disini
                    siswa dapat menjelajahi koleksi buku yang beragam, menjadikan proses pembelajaran lebih dinamis dan
                    terkini.
                    Untuk meningkatkan aksesibilitas, kami menyediakan media peminjaman buku digital, memudahkan siswa untuk
                    mengakses dan menikmati bahan bacaan kapan saja.Berbagai rekomendasi buku-buku yang relevan dan menarik
                    disesuaikan dengan minat juga kebutuhan belajar masing-masing Peserta Didik sehingga dapat meningkatkan
                    minat literasi. LiBaz bukan hanya tempat untuk membaca, tetapi juga untuk memperluas wawasan dan
                    mendukung
                    pembelajaran. Selamat mengeksplorasi dan menikmati keberagaman pengetahuan di Perpustakaan Digital kami!
                </div>
            </div>
            <div class="col-5 h2 text-start">libaz hadir sebagai solusi</div>
            <div class="border border-dark border-3 opacity-50 mt-7"></div>
        </div>
        <div class="col-6 h3" style="text-align: left;">informasi perpustakaan:</div>
        <div class="row text start">
            <div class="col-3 text-start sm-12">
                <h5>Jam Buka</h5>
                <p> Senin-Jumat :</p>
                <p>Buka : 08.00</p>
                <p>istirahat : 12.00-13.00</p>
                <p>Tutup : 15.00</p>
                <p>Sabtu-minggu:</p>
                <p>Buka : 10.00</p>
                <p>istirahat: 12.00-13.00</p>
                <p>Tutup : 15.00</p>
            </div>
            <div class="col-12 text-start sm-12">
                <h5>Peraturan Perpustakaan</h5>
                <h6>Berikut aturan umum terkait dengan peminjaman buku di LIBAZ:</h6>
                <p>1. Peminjam adalah anggota aktif LIBAZ;
                </p>
                <p>2. Maksimal durasi peminjaman buku adalah 7 hari, jika belum
                    selesai maka wajib lapor;</p>
                <p> 3. Batas jumlah buku yang dapat dipinjam
                    adalah 1 buku dalam satu kali peminjaman;</p>

                <p>
                    4. Perpanjangan waktu peminjaman dapat dilakukan melalui portal dengan maksimal 3hari;
                </p>
                <p>5. Anggota perpustakaan akan menerima notifikasi otomatis menjelang batas waktu peminjaman berakhir;</p>
                <p>6. Denda keterlambatan pengembalian buku berlaku jika terlambat tanpa ada perpanjangan:</p>
                <p>7. Denda dihitung perhari;</p>
                <p>8. Anggota bertanggung jawab penuh atas buku yang dipinjam, jika terjadi kerusakan atau kehilangan maka
                    dikenakan biaya perbaikan atau penggantian;</p>
                <p>9. Anggota diharap kan untuk memberikan ulasan atau rating terhadap buku yang telah mereka pinjam. Hal
                    ini
                    dapat membantu anggota lain dalam memilih buku yang sesuai dengan minat dan kebutuhan mereka;</p>
                <p>10. Dilarang meminjam menggunakan akun orang lain.</p>
            </div>
        </div>

        <div class="col-lg-12 h6" style="text-align: right;"><a href="#"><U>perjalanan singkat</U></a></div>

        <div class="row mx-5">
            <div class="col-3 px-3">
                <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
            </div>
            <div class="col-3 px-3">
                <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
            </div>
            <div class="col-3 px-3">
                <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
            </div>
            <div class="col-3 px-3">
                <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
            </div>
            <div class="col-3 h4 mt-5 " style="text-align: left;">Image Tim</div>
            <div class="col-12 px-5"> <img class="d-block w-60 mt-5" src="./img/illustrations/image/logo-ct-dark.png"
                    style="item-align-center"></div>
        </div>
    </div>

@endsection
