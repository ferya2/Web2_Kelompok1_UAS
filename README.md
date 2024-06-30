<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Final Proyek Web Programming 2 
- Mata Kuliah : Web Programming 2
- Dosen Pengampu : Muhammad Ikhwan Fathulloh

## Kelompok 
- Kelompok : Kelompok 1
- Proyek : Sistem Voting
- Anggota :
  - Ketua : Adella Tasya
  - Anggota : Ade Fery Angriawan

## Judul Proyek 
Proyek ini berjudul "Sistem Voting"

## Penjelasan Proyek 
Sebuah proyek sistem voting adalah usaha untuk merancang, mengembangkan, dan mengimplementasikan sistem yang memungkinkan proses pemilihan atau pengambilan keputusan dengan cara yang adil, transparan, dan efisien. Proyek ini melibatkan berbagai tahap mulai dari perencanaan, pengembangan, serta implementasi penggunaannya 

## Komponen Proyek 
Komponen yang terdapat pada proyek ini, diantaranya :
- Fitur Peserta
- Fitur Paslon atau Calon Kandidat
- Fitur Voting
- Fitur Riwayat Voting (admin) 
- Fitur Kalkulasi Voting (admin) 

## Pembagian Tim 
Pembagian dalam proses pengerjaan proyek ini diantaranya : 
- Ade Fery, tugas pengerjaan :
  - Fitur Peserta
  - Fitur Paslon
  - Fitur Voting
- Adella Tasya, tugas pengerjaan :
  - Fitur Riwayat Voting
  - Fitur Kalkulasi Voting

 Progres pengerjaan proyek :
 - Customize Template
 - Fitur Pesera (done)
 - Fitur Paslon (done)
 - Fitur Voting (done)

# Project Structure
This project follows the MVC architecture:
    - **Model**: Manages data and business rules.
    - **View**: Handles the presentation of data to users.
    - **Controller**: Processes input, connects the model with the view, and manages the application flow.

---

Happy coding! If you have any questions, feel free to reach out.

## Getting Started

To start using this project, ensure you have Flutter installed on your system. Follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/ferya2/Web2_Kelompok1_UAS.git
   cd Web2_Kelompok1_UAS
2. **Instal Depedencies**:
   ```bash
   composer install
3. **Create file .env**:
   ```bash
   cp .env.example .env
4. **Generate App Key**:
   ```bash
   php artisan key:generate
5. **Generate App Key**:
   ```bash
   php artisan key:generate
6. **Set Database Configuration**:
   ```bash
   DB_DATABASE=web2kelompok1_uas
7. **Migrate Database**:
   ```bash
   php artisan migrate
8. **Generate Database**:
   ```bash
   php artisan db:seed
9. **Set Storage and copy images paslon in Resource ../assets/images/paslon to folder storage/app/public**:
   ```bash
   php artisan storage:link
10. **Run local server**:
   ```bash
   php artisan serve



