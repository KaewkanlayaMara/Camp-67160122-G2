<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<style>
    body {
        font-family: "Itim", cursive;
        background-color: #eccbf0c0;
    }

    .form-control,
    .form-select {
        background-color: #d5f3ddff;
        border: 1px solid #b7f6c0ff;
    }

    /* ตกแต่งปุ่ม */
    .btn-primary {
        background-color: #FF9AA2;
        border-color: #FF9AA2;
        color: white;
    }

    .btn-primary:hover {
        background-color: #FF808A !important;
        border-color: #FF808A !important;
    }

    .btn-secondary {
        background-color: #B5EAD7;
        border-color: #B5EAD7;
        color: #555;
    }

    .btn-secondary:hover {
        background-color: #A0DAC0 !important;
        border-color: #A0DAC0 !important;
    }

    /* ตกแต่งการ์ด */
    .card {
        background-color: #F5F5DC;
        border: 4px solid #f6c8c5ff;
        border-radius: 25px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* ตกแต่งของตก (Falling Items) */
    .falling-item {
        position: fixed;
        top: -10vh;
        z-index: 9999;
        pointer-events: none;
        animation: fall linear forwards;
    }

    @keyframes fall {
        0% {
            transform: translateY(0) rotate(0deg);
        }

        100% {
            transform: translateY(110vh) rotate(360deg);
        }
    }
    </style>
    @yield('content')
    {{-- @stack('scripts')22 --}}
</body>


</html>
