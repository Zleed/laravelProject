@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pr-5 pl-5">
            <div class="col-3">
                <img class="rounded-circle w-100 p-2" src="{{ $user->profile->profileImage() }}" alt="">
            </div>
            <div class="col-9 pt-3">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-baseline">
                        <h1 class="pr-3">{{ $user->username }}</h1>
                        @can('update', $user->profile)
                            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                        @endcan
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add new Post</a>
                    @endcan
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
