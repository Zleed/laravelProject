@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pr-5 pl-5">
        <div class="col-3">
            <img class="rounded-circle w-100 p-2" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-19/s320x320/18645376_238828349933616_4925847981183205376_a.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&amp;_nc_ohc=BLRII29_BT0AX_b0__x&amp;tp=1&amp;oh=ccbb73460512432343cbb1754f4d4a8f&amp;oe=5FE9A7F2" alt="">
        </div>
        <div class="col-9 pt-3">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong> {{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href={{ $user->profile->url ?? "#" }}>{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 d-flex">
            <img class="w-100 m-3 p-0" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-15/e15/c0.76.612.612a/127285229_401699420954915_4192778305264107591_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&amp;_nc_cat=1&amp;_nc_ohc=tbkolb5bPVEAX_hq3Lk&amp;tp=1&amp;oh=da22bd79da93ca77cde32fabd1fe7f62&amp;oe=5FC39C5B" alt="">
            <img class="w-100 m-3 p-0" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-15/e15/c0.76.612.612a/127285229_401699420954915_4192778305264107591_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&amp;_nc_cat=1&amp;_nc_ohc=tbkolb5bPVEAX_hq3Lk&amp;tp=1&amp;oh=da22bd79da93ca77cde32fabd1fe7f62&amp;oe=5FC39C5B" alt="">
            <img class="w-100 m-3 p-0" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-15/e15/c0.76.612.612a/127285229_401699420954915_4192778305264107591_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&amp;_nc_cat=1&amp;_nc_ohc=tbkolb5bPVEAX_hq3Lk&amp;tp=1&amp;oh=da22bd79da93ca77cde32fabd1fe7f62&amp;oe=5FC39C5B" alt="">
        </div>
    </div>
</div>
@endsection
