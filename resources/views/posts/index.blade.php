<x-app-layout>
    <div class="container mt-5">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-8 offset-2">
                    <img src="/storage/{{ $post->image }}" class="w-75">
                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 ofset-2">
                    <div>
                        <div class="d-flex align-items-center pb-4">
                            <div>
                                <img src="/storage/{{ $post->user->profile->image }}" alt="avatar" style="max-width:50px;"
                                    class="rounded-circle w-100">
                            </div>
                            <div class="px-3">
                                <div>
                                    <p><span>
                                        <b><a href="/dashboard/{{ $post->user->id }}">{{ $post->user->username }}</a></b>
                                    </span>
                                    {{ $post->caption }}</p>
                                </div>
                                <div class="small text-muted">{{ $post->created_at->diffForHumans() }}</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
