
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Galeri Saya</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('layouts.header')

    <section class="container content">
        <h1>Galeri Foto Saya</h1>

        <div class="gallery">

            <img src="{{ asset('images/foto1.jpg') }}"
                 alt="Foto 1">

            <img src="{{ asset('images/foto2.jpg') }}"
                 alt="Foto 2">

            <img src="{{ asset('images/foto3.jpg') }}"
                 alt="Foto 3">

        </div>
    </section>

    @include('layouts.footer')

</body>
</html>
