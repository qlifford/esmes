@extends('layouts.app')
@section('content')  
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">

        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if (Session::has('error'))
                <div class="bg-red-500 rounded-lg text-white text-center p-4 mb-6">
                    {{ Session::get('error')}}
                </div>                    
            @endif

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')  border-red-300 @enderror" value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500 mb-2 text-sm">
                    {{ $message }}
                </div>                    
                @enderror
            </div>

            <div class="mb-4">
                <label for="Password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')  border-red-300 @enderror" value="">
                @error('password')
                <div class="text-red-500 mb-2 text-sm">
                    {{ $message }}
                </div>                    
                @enderror
            </div>

            <div class="mb-4">
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>               
            </div>
            
            <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-full" type="submit">Login</button>
        </form>    
    </div>
</div>
@endsection