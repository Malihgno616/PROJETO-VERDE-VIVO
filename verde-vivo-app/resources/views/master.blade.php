<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
    <title>Verde Vivo</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body class="h-full max-h-full">
    @include('layout.navbar')
    @include('components.cards')
    @include('layout.footer')

