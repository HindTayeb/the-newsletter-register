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
            <v-header></v-header>

            <form class="w-full max-w-lg" method="post" action="/register">
                @csrf
                
                {{-- check for errors --}}
                @if ($errors->any())
                <v-flash-wrap>
                    @foreach ($errors->all() as $e)
                    <v-flash message="{{ $e }}"></v-flash>
                    @endforeach
                </v-flash-wrap>
                @endif

                {{-- success message --}}
                @if (session('status'))
                <v-flash-wrap>
                    <v-flash message="{{ session('status') }}"></v-flash> 
                </v-flash-wrap>
                @endif

                <v-input-grpud>
                    <v-double-wrap>
                        <v-label label="First Name" label-for="grid-first-name"></v-label>
                        <v-input id="grid-first-name" type="text" name="fname" placeholder="Doe">
                    </v-double-wrap>

                    <v-double-wrap>
                        <v-label label="Last Name" label-for="grid-last-name"></v-label>
                        <v-input id="grid-last-name" type="text" name="lname" placeholder="Jane">
                    </v-double-wrap>

                    </div>
                </v-input-grpud>

                <v-input-grpud>
                    <v-single-wrap>
                        <v-label label="Email Address" label-for="grid-email"></v-label>
                    </v-single-wrap>
                </v-input-grpud>

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