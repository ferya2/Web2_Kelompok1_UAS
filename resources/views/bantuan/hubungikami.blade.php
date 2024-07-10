@extends('layouts.home.app')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="container">
        <h1 class="my-4">Hubungi Kami</h1>
        <p>Jika Anda memiliki pertanyaan atau butuh bantuan, Anda bisa menghubungi kami melalui salah satu kontak di bawah
            ini:</p>
        <div class="card shadow-lg hover-card">
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="contact-item mb-3">
                        <i class="fab fa-whatsapp"></i> WhatsApp: <a href="https://wa.me/1234567890"
                            target="_blank">123-456-7890</a>
                    </li>
                    <li class="contact-item mb-3">
                        <i class="fab fa-github"></i> GitHub: <a href="https://github.com/username"
                            target="_blank">github.com/username</a>
                    </li>
                    <li class="contact-item mb-3">
                        <i class="fas fa-envelope"></i> Email: <a
                            href="mailto:kelompok1@example.com">kelompok1@example.com</a>
                    </li>
                    <li class="contact-item mb-3">
                        <i class="fab fa-instagram"></i> Instagram: <a href="https://instagram.com/username"
                            target="_blank">@username</a>
                    </li>
                    <li class="contact-item mb-3">
                        <i class="fab fa-linkedin"></i> LinkedIn: <a href="https://linkedin.com/in/username"
                            target="_blank">linkedin.com/in/username</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
