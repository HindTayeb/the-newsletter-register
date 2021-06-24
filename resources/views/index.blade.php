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
        {{-- <header class="flex items-center bg-white text-gray-700 text-lg font-bold p-6">SDC Register</header>      --}}
        <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-white shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-gray-700 uppercase no-underline">
                    <li><a class="hover:text-gray-500 hover:underline px-4" href="#">Home</a></li>
                    <li><a class="hover:text-gray-500 hover:underline px-4" href="#">About</a></li>
                </ul>
            </nav>
        </div>
    </nav>
    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-4xl" href="#">
                The Newsletter
            </a>
            <p class="text-lg text-gray-600">
                Sign up to get the most fascinating news!
            </p>
        </div>
    </header>

        <div class="container mx-auto ">
        <div id="app">
            {{-- <section class="grid place-items-center p-10"> --}}
                <section class="w-full md:w-3/3 flex flex-col items-center px-3">
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

                <v-input-group>
                    <v-double-wrap>
                        <v-label for="grid-first-name">First Name</v-label>
                        <v-input id="grid-first-name" type="text" name="fname" placeholder="Doe">
                    </v-double-wrap>

                    <v-double-wrap>
                        <v-label for="grid-last-name">Last Name</v-label>
                        <v-input id="grid-last-name" type="text" name="lname" placeholder="Jane">
                    </v-double-wrap>
                </v-input-group>

                <v-input-group>
                    <v-single-wrap>
                        <v-label for="grid-phone">Phone Number</v-label>
                        <v-input id="grid-phone" type="tel" name="phone" placeholder="05********">
                    </v-single-wrap>
                </v-input-group>

                <v-input-group>
                    <v-single-wrap>
                        <v-label for="grid-email">Email Address</v-label>
                        <v-input id="grid-email" type="email" name="email" placeholder="Doe@email.com">
                    </v-single-wrap>
                </v-input-group>

                <v-input-group>
                    <v-single-wrap>
                        <v-label for="grid-city">City</v-label>
                        <v-select id="grid-city" name="city" title="Select">
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </v-select>
                    </v-single-wrap>
                </v-input-group>

                <v-input-group>
                    <v-single-wrap>
                        <v-label for="grid-check">
                            <input class="form-checkbox" 
                            id="grid-check" type="checkbox" value="1" name="torecieve">
                            <span>Do you want to receive your information via email?</span>
                        </v-label>
                        
                    </v-single-wrap>
                </v-input-group>

                <v-submit></v-submit>

            </form>
        
        </div>
        
    </div>
        
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