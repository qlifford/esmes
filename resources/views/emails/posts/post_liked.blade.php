<x-mail::message>
# Your Post was liked

{{ $liker->name }} liked your post.

<x-mail::button :url="''">
    View Post
</x-mail::button>

Thanks,<br>
From: <a href="{{ route('home') }}"><span class="font-bold">{{ config('app.name') }}</span> </a>

</x-mail::message>
