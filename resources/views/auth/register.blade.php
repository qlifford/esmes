@extends('layouts.app')
@section('content')  
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">

        <form action="{{ route('register') }}" method="POST">
            @csrf
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error')}}
                </div>                    
            @endif

            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')  border-red-300 @enderror" value="{{ old('name') }}"
                >
                @error('name')
                    <div class="text-red-500 mb-2 text-sm">
                        {{ $message }}
                    </div>                    
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username')  border-red-300 @enderror" value="{{ old('username') }}">
                @error('username')
                    <div class="text-red-500 mb-2 text-sm">
                        {{ $message }}
                    </div>                    
                @enderror
            </div>

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
                <label for="Password" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">                              
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-full" type="submit">Register</button>
        </form>    
    </div>
</div>
@endsection