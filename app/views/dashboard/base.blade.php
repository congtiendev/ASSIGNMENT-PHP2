<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./resources/css/tailwind.css" />
    <link rel="stylesheet" href="./resources/css/base.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./resources/js/init-alpine.js"></script>
</head>

<body>
    <div style="
        background-image: url('./resources/images/background.jpg');
      "
        class="flex h-screen sm:p-5 bg-no-repeat bg-cover">
        @include('layout.dashboard_sidebar')
        @include('layout.dashboard_header')
        @yield('content')
    </div>
</body>

</html>
