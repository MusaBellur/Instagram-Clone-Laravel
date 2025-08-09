<x-app-layout>
    <div class="container" id="app">
        <div class="row">
            <div class="col-md-3">
                <img src="/storage/{{ $user->profile->image }}"
                    alt="avatar" style="height: 12rem;" class="rounded-circle my-3 mx-auto d-block w-70">
            </div>
            <div class="col-md-9 py-3">
                <div class="d-flex align-items-baseline">
                    <h2>{{ $user->username }}</h2>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <a href="/home/{{ $user->id }}/edit" class="link-primary">Edit Profile</a>
                    <a href="/p/create" class="link-primary">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-3"><strong>{{count($user->posts)}}</strong> posts</div>
                    <div class="px-4"><strong>{{count ($user->profile->followers)}}</strong> followers</div>
                    <div class="pr-3"><strong>{{ count($user->following) }}</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
                <div>
                    {{$user->profile->description}}
                </div>
                <div>
                    <a href="#">{{$user->profile->url ?? 'N/A'}}</a>
                </div>
            </div>
            <div class="row pt-5">
                @foreach ($user->posts as $posts)
                    <div class="col-4 pb-3">
                        <a href="/p/{{ $posts->id }}">
                            <img src="/storage/{{ $posts->image }}" class="w-100">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
