@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pr-5 pl-5">
            <div class="col-3">
                <img class="rounded-circle w-100 p-2" src="{{ $user->profile->profileImage() }}" alt="">
            </div>
            <div class="col-9 pt-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <h1 class="pr-3">{{ $user->username }}</h1>
                        @can('update', $user->profile)
                            <a href="/profile/{{ $user->id }}/edit" class="pr-3"><button class="btn btn-primary"><strong>Edit Profile</strong></button></a>
                        @endcan
                        <div id="follow" data-user-id="{{ $user->id }}" data-follow="{{ $follows }}"></div>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create"><button class="btn btn-primary"><strong>Add new Post</strong></button></a>
                    @endcan
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
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
