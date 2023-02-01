<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
<div class="container">
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</div>
</body>

</html>
