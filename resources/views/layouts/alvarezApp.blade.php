<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('broswerTitle')</title>
    @yield('favicon')
    @yield('addCssFiles')
</head>
<body>
    @yield('mainContent')
</body>

@yield('addJsFiles')
</html>


