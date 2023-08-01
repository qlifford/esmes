@props(['post' => $post])
<div class="mb-4">
    <a href="{{ route('user_posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-3">{{ $post->body }}</p>

    @can('delete', $post)
        <form action="{{ route('post_delete', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 mr-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
            {{ 'Delete' }}</button>
        </form>  
    @endcan                   

    <div class="flex items-center"> 
        @auth   
            @if(!$post->likedBy(auth()->user())) 
                <form action="{{ route('likes', $post->id) }}" class="mr-2" method="POST">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else                                
                <form action="{{ route('likes', $post) }}" method="POST" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500 mr-1">Unlike</button>
                </form>
            @endif 
        @endauth
        <span class="mr-2">  {{ $post->likes->count() }}  {{ Str::plural('like', $post->likes->count()) }}
        </span>
    </div>
</div>