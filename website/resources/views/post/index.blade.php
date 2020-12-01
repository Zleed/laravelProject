@extends('layouts.app')

@section('content')
    <div class="container align-items-center" style="max-width: 600px">
        @foreach($posts as $post)
            <div class="border align-items-center">
                <div class="row p-2">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="/profile/ {{ $post->user->id }}">
                                    <img src="{{ $post->user->profile->profileImage() }}"
                                         class="rounded-circle" alt="" style="max-width: 50px">
                                </a>
                            </div>
                            <div class="pl-3">
                                <div class="h5">
                                    <strong>
                                        <a href="/profile/ {{$post->user->id}}" class="pr-1">
                                            <span class="text-dark">{{ $post->user->username }}</span>
                                        </a>
                                        •
                                    </strong>
                                    <a href="#" class="pl-1">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                        </a>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col">
                        <div class="pt-3 d-flex">
                            <strong>
                                <a href="/profile/ {{$post->user->id}}">
                                    <span class="text-dark pr-2">{{ $post->user->username }}</span>
                                </a>
                            </strong>
                            <p>{{ $post->caption }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        <div class="row">
            <div class="col-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
