<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Regiser</title>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col content-center min-h-screen">

        <div id="app">
            @yield('content')
        </div>

    </div>
    <footer class="footer w-full border-t bg-white pb-12 border-t-2 border-purple-700">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-3">
                    <p class="text-sm text-purple-700 font-bold mb-2">
                        © 2021 The Newsletter
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>