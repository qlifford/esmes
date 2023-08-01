@extends('layouts.app')
@section('content')                
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg"> 
            @if (Session::has('message'))
                <div class="alert alert-danger">
                    {{ Session::get('message')}}
                </div>   
            @endif     
           
            @guest 
            <div class="rounded-lg mb-12 text-blue-400 font-bold">
                To create or like a post, You must <a href="{{ route('register') }}">Register</a> or 
                <a href="{{ route('login') }}">Login</a>
            </div>  
            @endguest 

            @auth
                <form action="{{ route('posts') }}" method="POST">
                    @csrf
                 
                    <div class="mb-4">
                        <textarea placeholder="Post something" name="body" id="body" cols="30" rows="5" class="w-full rounded-lg bg-gray-100 border-2 p-4 @error('body') border-red-500 @enderror"></textarea>
                    </div>
                        @error('body')
                            <div class="text-red-500 mb-2 text-sm">
                                {{ $message }}
                            </div>                    
                        @enderror
                    <div class="mb-4">
                        <button class="rounded-lg font-medium bg-blue-500 text-white px-4 py-2" type="submit">Post</button>
                    </div>
                </form>                
            @endauth
                @if ($posts->count())
                    @foreach ($posts as $post)
                    <x-post :post="$post" />
                    @endforeach 
                        {{ $posts->onEachSide(1)->links() }}
                    @else
                    <p>No post created yet</p>
                @endif                            
            </div>
        </div>
@endsection