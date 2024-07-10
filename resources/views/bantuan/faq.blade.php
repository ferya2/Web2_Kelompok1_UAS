@extends('layouts.home.app')

@section('title', 'FAQ Voting')

@section('content')
    <div class="container">
        <h1 class="my-4">FAQ Voting</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q1: Bagaimana cara melakukan voting?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Untuk melakukan voting, Anda harus masuk ke akun Anda terlebih dahulu, kemudian pilih
                                kandidat yang Anda dukung dan klik tombol 'Vote'.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q3: Apakah saya bisa mengubah pilihan setelah voting?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Tidak, setelah Anda melakukan voting, pilihan Anda tidak dapat diubah.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q5: Apakah voting saya rahasia?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Ya, voting Anda bersifat rahasia dan hanya Anda yang tahu siapa yang Anda pilih.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q7: Berapa lama waktu voting berlangsung?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Waktu voting berlangsung selama satu minggu dari tanggal dimulainya pemilihan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q2: Bagaimana cara membatalkan suara?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Anda tidak dapat membatalkan suara setelah melakukan voting.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q4: Apakah saya dapat melihat hasil voting?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Hasil voting akan diumumkan setelah periode pemilihan selesai.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q6: Apakah saya bisa memberi suara lebih dari satu kali?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Setiap pengguna hanya bisa memberi suara satu kali selama periode pemilihan.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="bubble question">
                            <p><strong>Q8: Bagaimana jika saya lupa password untuk melakukan voting?</strong></p>
                        </div>
                        <div class="bubble answer">
                            <p>A: Anda dapat menggunakan fitur reset password untuk mendapatkan akses kembali.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .bubble {
            padding: 10px;
            border-radius: 10px;
            position: relative;
            font-size: 1.2em;
            margin-bottom: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .bubble:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .question {
            background-color: #f5f5f5;
            /* light gray background */
            color: #000000;
            /* black text */
            align-self: flex-start;
        }

        .answer {
            background-color: #d9edf7;
            /* light blue background */
            align-self: flex-end;
        }

        .bubble:before {
            content: "";
            position: absolute;
            top: 0;
            width: 10px;
            height: 10px;
            transform: rotate(45deg);
        }

        .question:before {
            left: -5px;
            background-color: #f5f5f5;
        }

        .answer:before {
            right: -5px;
            background-color: #d9edf7;
        }
    </style>
@endsection
