<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Regiser</title>
</head>
<body>        
        <div id="app">
            <header-component></header-component>

            <form class="w-full max-w-lg" method="post" action="/register">
                @csrf
                
                {{-- check for errors --}}
                @if ($errors->any())
                <flash-wrap-component>
                    @foreach ($errors->all() as $e)
                    <flash-component message="{{ $e }}"></flash-component>
                    @endforeach
                </flash-wrap-component>
                @endif

                {{-- success message --}}
                @if (session('status'))
                <flash-wrap-component>
                    <flash-component message="{{ session('status') }}"></flash-component> 
                </flash-wrap-component>
                @endif

                

            </form>
        </div>
        <footer class="footer pt-1 border-t-2 border-blue-700">
            <div class="container mx-auto px-6">
                <div class="flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-blue-700 font-bold mb-2">
                            © 2021 by Hind Tayeb
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="{{mix('/js/app.js')}}"></script>
        
        </body>
        </html>