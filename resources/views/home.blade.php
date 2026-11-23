
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Home - WebsiteKu</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('layouts.header')

    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di Website Saya</h1>

            <p>
                Halo! Selamat datang di website profil pribadi saya.
                Website ini dibuat menggunakan framework Laravel.
            </p>

            <a href="/tentang" class="btn">
                Kenali Saya
            </a>
        </div>
    </section>

    @include('layouts.footer')

</body>
</html>
