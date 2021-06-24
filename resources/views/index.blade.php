@extends('layouts.master')

@section('content')
<v-nav>
    <v-nav-item link="#">Home</v-nav-item>
    <v-nav-item link="#">About</v-nav-item>
</v-nav>

<v-header title="The Newsletter" subtitle="Sign up to get the most fascinating news!"></v-header>


<div class="container mx-auto ">
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
        
        </section>

</div>

@endsection
    
    

