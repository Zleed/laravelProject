@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pr-5 pl-5">
        <div class="col-3">
            <img class="rounded-circle w-100 p-2" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-19/s320x320/18645376_238828349933616_4925847981183205376_a.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&amp;_nc_ohc=BLRII29_BT0AX_b0__x&amp;tp=1&amp;oh=ccbb73460512432343cbb1754f4d4a8f&amp;oe=5FE9A7F2" alt="">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-baseline">
                    <h1 class="pr-3">{{ $user->username }}</h1>
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                </div>
                <a href="/p/create">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href={{ $user->profile->url }}>{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 m-3 p-0" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
