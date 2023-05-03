<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asu</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        {{--<img class="img-thumbnail" src="{{ Vite::asset('resources/image/main.svg') }}" alt="image">--}}
        <video src="{{ Vite::asset('resources/image/test.mp4') }}" class="object-fit-contain" autoplay></video>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
