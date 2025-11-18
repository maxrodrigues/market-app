<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreshMarket Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/fb91899bbd.js" crossorigin="anonymous"></script>
    {{--<script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        "display": ["Montserrat", "sans-serif"]
                    }
                }
            }
        }
    </script>--}}
</head>
<body class="bg-admin font-display">
    {{ $slot }}
</body>
</html>
