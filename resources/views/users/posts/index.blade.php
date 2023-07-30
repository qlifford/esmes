@extends('layouts.app')
@section('content')   



<div class="flex justify-center">       
    <div class="w-8/12">
        <div class="p-6 w-50">
            <h1 class=" mb-1">{{ $user->name }}</h1> 
            <p>Posted <span class="font-bold">{{ $posts->count() }}</span> {{ Str::plural('post', $posts,) }} and recieved <span class="font-bold">{{ $user->receivedLikes->count() }}</span> likes</p>
        </div>

  
    <div class="bg-white p-6 rounded-lg">
        @if ($posts->count())
            @foreach ($posts as $post)
               <x-post :post="$post" />
            @endforeach 
                {{ $posts->onEachSide(1)->links() }}
            @else
            <p>{{ $user->name }} Has no posts</p>
        @endif
    </div>
        </div>
    </div>

@endsection