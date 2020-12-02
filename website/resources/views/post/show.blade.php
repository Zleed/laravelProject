@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div>
                        <a href="/profile/ {{ $post->user->id }}">
                            <img src="{{ $post->user->profile->profileImage() }}"
                                 class="rounded-circle w-100" alt="" style="max-width: 50px">
                        </a>
                    </div>
                    <div class="pl-3">
                        <div class="h5 w-100">
                            <strong>
                                <a href="/profile/ {{$post->user->id}}" class="pr-1">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                •
                                <a href="#" class="pl-1">Follow</a>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="mt-2 pt-2 border-top d-flex">
                    <strong>
                        <a href="/profile/ {{$post->user->id}}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </strong>
                    <p class="pl-2">{{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
