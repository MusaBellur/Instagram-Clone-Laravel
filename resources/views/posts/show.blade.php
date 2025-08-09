<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-50">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center pb-4">
                        <div>
                            <img src="/storage/{{ $post->user->profile->image }}" alt="avatar" style="max-width:50px;"
                                class="rounded-circle w-100">
                        </div>
                        <div class="px-3">
                            <div class="d-flex">
                                <div><b><a href="/dashboard/{{ $post->user->id }}">{{$post->user->username }}</a></b></div>
                                <div class="px-1"><b>•</b></div>
                                <a class="link-primary" href="#">Follow</a>
                            </div>
                            <div class="small text-muted">{{ $post->created_at->diffForHumans() }}</div>
                        </div>

                    </div>
                    <hr class="pb-2">
                    <p><span>
                            <b><a href="/dashboard/{{ $post->user->id }}">{{ $post->user->username }}</a></b>
                        </span>
                        {{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
