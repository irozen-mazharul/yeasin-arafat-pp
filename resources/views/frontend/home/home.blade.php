<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yeasin Arafat LLC</title>
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('asset/img/favicon/favicon.ico') }}" type="image/icon">
    {{-- Bootstrap-5 --}}
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    {{-- Icon--}}
    <script src="https://kit.fontawesome.com/71478cca54.js" crossorigin="anonymous"></script>
    {{-- Inline CSS for background --}}
    <style>
        body {
            background-image: url('{{ asset('asset/img/background.jpg') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
{{--            section 1--}}
            <div class="section-1 mt-3 d-flex justify-content-between">
                <div class=" d-flex bg-white subscribe-btn-parent">
                    <i class="mt-2 fa-regular fa-bell text-dark"></i>
                    <p class="mx-2 subscribe-btn fw-bolder text-dark">Subscribe</p>
                </div>
                <div class="share-btn bg-white">
                    <i class="fa-solid fa-share-nodes fw-bold text-dark share-icon"></i>
                </div>
            </div>
{{--            section 2--}}
            <div class="section-2">
                <div class="profile-image d-flex justify-content-center">
                    <img src="{{asset('asset/img/profile.jpg')}}" class="profile-avatar" alt="">
                </div>
                <div class="twitter mt-2">
                    <p class="text-center twitter-text">@yeasinArafat_25477</p>
                </div>
                <div class="academy-title">
                    <h4 class="text-center mt-5">Yeasin University</h4>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Your content goes here --}}
<script src="{{ asset('asset/js/code.jquery.com_jquery-3.7.0.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.js') }}"></script>
<script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>
