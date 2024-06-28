@extends('layouts.home.app')

@section('title', 'Cara Memilih')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Cara Memilih</h1>
            <section id="instructions">
                <h2>Instruksi</h2>
                <ol>
                    <li>Baca semua opsi dengan seksama.</li>
                    <li>Pilih opsi yang Anda inginkan dengan mengklik tombol yang sesuai.</li>
                    <li>Kirimkan suara Anda dengan mengklik tombol "Submit Vote".</li>
                </ol>
            </section>
            <section id="details" class="mt-4">
                <h2>Detail Pemilihan</h2>
                <p>Selamat datang di panduan pemilihan. Ikuti petunjuk di bawah ini untuk memberikan suara Anda dengan
                    efektif:</p>
                <ul>
                    <li><strong>Langkah 1:</strong> Tinjau profil dan kebijakan masing-masing kandidat dengan seksama.</li>
                    <li><strong>Langkah 2:</strong> Ketika Anda siap, klik tombol "Vote" di sebelah nama kandidat pilihan
                        Anda.</li>
                    <li><strong>Langkah 3:</strong> Konfirmasikan pilihan Anda di halaman konfirmasi untuk menyelesaikan
                        suara Anda.</li>
                </ul>
                <p>Penting untuk meluangkan waktu Anda dan membuat keputusan yang tepat. Suara Anda sangat penting dalam
                    membentuk masa depan komunitas kita.</p>
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
                <ul>
                    <li><a href="#">Profil Kandidat 1</a></li>
                    <li><a href="#">Profil Kandidat 2</a></li>
                    <li><a href="#">Profil Kandidat 3</a></li>
                    <li><a href="#">FAQ Pemilihan</a></li>
                </ul>
            </section>
            <!-- Button Vote Now -->
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ url('dashboard/voting') }}" class="btn btn-primary btn-lg">Vote Now</a>
            </div>
        </div>
    </div>
@endsection
