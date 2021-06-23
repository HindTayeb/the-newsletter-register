@extends('layouts.master')

@section('page-title', 'register')

@section('content')


    <form class="w-full max-w-lg" method="post" action="/register">
        @csrf

        @if ($errors->any())
        <div class="alert-toast m-8 w-5/6 max-w-sm">
            <input type="checkbox" class="hidden" id="footertoast">
            <label class="close cursor-pointer flex items-start justify-between w-full p-2 bg-red-500 h-15 rounded shadow-lg text-white" title="close" for="footertoast">
                @foreach ($errors->all() as $e)
                {{ $e }} <br>
                @endforeach
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </label>
        </div>
        @endif

        @if (session('status'))
        <div class="alert-toast m-8 w-5/6 max-w-sm">
            <input type="checkbox" class="hidden" id="footertoast">
            <label class="close cursor-pointer flex items-start justify-between w-full p-2 bg-green-500 h-15 rounded shadow-lg text-white" title="close" for="footertoast">
                {{ session('status') }}
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </label>
        </div>
        @endif
        
        
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                First Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="grid-first-name" type="text" name="fname" placeholder="Jane"> 
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Last Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="grid-last-name" type="text" name="lname" placeholder="Jane">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
            </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Phone Number
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="grid-password" type="tel" name="phone" placeholder="**********">
                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
            </div>
        </div><!-- /flex -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Email Address
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="grid-password" type="email" name="email" placeholder="Jane@email.com">
                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
            </div>
        </div><!-- /flex -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                City
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="grid-city" name="city">
                    <option value="selected" disabled selected>Select
                    </option>
                    @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div><!-- /w-full -->
        </div><!-- /flex -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3"><!-- w-full md:w-1/3 px-3 mb-6 md:mb-0 -->
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-check">
                    <input class="form-checkbox" 
                    id="grid-check" type="checkbox" value="1" name="torecieve">
                    <span>Do you want to receive your information via email?</span>
                </label>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Submit
                </button>
            </div>
        </div>
    </form>
<style>
    .alert-toast {
		-webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
				animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	}
	.alert-toast input:checked ~ * {
        display: none;
	}

    @-webkit-keyframes slide-in-right {
        0% {
            -webkit-transform:translateX(1000px); 
            transform:translateX(1000px);
            opacity:0
        }
        100%{ 
            -webkit-transform:translateX(0);
            transform:translateX(0);
            opacity:1}
            }@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}@keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}

</style>
@endsection