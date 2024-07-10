@extends('layouts.home.app')

@section('title', 'Cara Memilih')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Cara Memilih</h1>
            <section id="instructions">
                <h2>Instruksi</h2>
                <ol>
                    <li>Daftar Akun terlebih dahulu jika belum memiliki akun.</li>
                    <li>Login menggunakan akun yang telah didaftarkan.</li>
                    <li>Anda hanya memiliki satu hak suara untuk satu kandidat.</li>
                    <li>Lihat detail kandidat untuk memahami platform mereka.</li>
                    <li>Pilih kandidat tanpa adanya paksaan dari pihak manapun.</li>
                    <li>Vote Anda akan direkam dan tidak dapat diubah.</li>
                    <li>Terima kasih atas partisipasi Anda!</li>
                </ol>
            </section>
            <section id="details" class="mt-4">
                <h2>Detail Pemilihan</h2>
                <p>Selamat datang di panduan pemilihan. Ikuti petunjuk di atas untuk memberikan suara Anda dengan
                    efektif.</p>
                <h3>Informasi Tambahan</h3>
                <p>Jika Anda mengalami masalah selama proses pemilihan, silakan hubungi tim dukungan kami untuk bantuan.</p>
                <p>Ingat, pemilihan ini bersifat rahasia dan pilihan Anda akan tetap anonim.</p>
            </section>
            <section id="tips" class="mt-4">
                <h2>Tips Memilih</h2>
                <ul>
                    <li>Pastikan Anda memiliki koneksi internet yang stabil untuk menghindari gangguan.</li>
                    <li>Periksa kembali pilihan Anda sebelum mengirimkan suara.</li>
                    <li>Pastikan Anda telah membaca dan memahami semua informasi yang diberikan tentang setiap kandidat.
                    </li>
                    <li>Jika memungkinkan, buat catatan tentang poin-poin utama dari platform setiap kandidat untuk membantu
                        Anda memutuskan.</li>
                </ul>
            </section>
            <section id="resources" class="mt-4">
                <h2>Sumber Daya</h2>
                <p>Untuk informasi lebih lanjut tentang para kandidat dan platform mereka, kunjungi tautan berikut:</p>
                <ul class="list-unstyled">
                    <li><a href="{{ url('https://www.instagram.com/aniesbaswedan/') }}"><i class="fas fa-user-circle"></i>
                            Profil Kandidat 1</a>
                    </li>
                    <li><a href="{{ url('https://www.instagram.com/prabowo/') }}"><i class="fas fa-user-circle"></i> Profil
                            Kandidat 2</a>
                    </li>
                    <li><a href="{{ url('https://www.instagram.com/ganjar_pranowo/') }}"><i class="fas fa-user-circle"></i>
                            Profil Kandidat 3</a>
                    </li>
                    <li><a href="/dashboard/faq-voting"><i class="fas fa-question-circle"></i> FAQ Pemilihan</a></li>
                </ul>
            </section>
            <!-- Button Vote Now -->
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ url('dashboard/voting') }}" class="btn btn-primary btn-lg">Vote Now</a>
            </div>
            <!-- Help Button -->
            <div class="mt-3">
                <a href="/dashboard/hubungikami" class="text-muted">Bantuan</a>
            </div>
        </div>
    </div>

@endsection
