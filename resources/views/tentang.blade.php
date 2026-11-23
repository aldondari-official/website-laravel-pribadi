
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('layouts.header')

    <section class="container content">
        <h1>Tentang Saya</h1>

        <img src="{{ asset('images/profil.jpg') }}"
             alt="Foto Profil"
             class="profile">

        <h2>Nama: Nama Kamu</h2>
        <p>NIM: Isi NIM Kamu</p>
        <p>Program Studi: Sistem Informasi</p>
        <p>Universitas: Nama Kampus Kamu</p>

        <p>
            Saya adalah mahasiswa yang sedang belajar
            membuat website menggunakan Laravel.
        </p>
    </section>

    @include('layouts.footer')

</body>
</html>
