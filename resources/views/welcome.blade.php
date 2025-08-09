<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />


</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand px-4 py-0 m-0 d-flex" href="#">
                <div><img src="/svg/instagram_logo.svg" style="height: 30px; padding-right: 5px;"></div>
                <div>
                    <h4>| Instagram</h4>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="ml-auto">
                    @if (Route::has('login'))
                        <div class="py-2 px-4">
                            @auth
                                <a href="{{ url('/dashboard/' . auth()->user()->id) }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm btn btn-success">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm btn btn-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTua9XugxIqMgUr5QFLnLRAv4LoC4__QqwENA&s"
                    alt="avatar" style="height: 12rem;" class="rounded-circle my-3 mx-auto d-block">
            </div>
            <div class="col-md-9 py-3">
                <div>
                    <h1>Musa Bellur</h1>
                </div>
                <div class="d-flex">
                    <div class="pr-3"><strong>21</strong> posts</div>
                    <div class="px-4"><strong>546</strong> followers</div>
                    <div class="pr-3"><strong>325</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold">bellurmusa@gmail.com</div>
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere odit dolor mollitia similique libero perspiciatis, laudantium numquam eligendi blanditiis exercitationem.
                </div>
                <div><a href="#">musabellur.com</a></div>
            </div>
            <div class="row pt-5">
                <div class="col-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGFxK53LHST9qLFK5NsHeKXe6mGrohKPgbdQ&s" class="w-100"></div>
                <div class="col-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKlFJ7-VOBZNMwGEqy_IPtgN-IHB8eVyLFIw&s" class="w-100"></div>
                <div class="col-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWVJ0EKud-BaqW_mVnVv0UeaggvlNVjgE6lQ&s" class="w-100"></div>
            </div>
        </div>
    </div> --}}
</body>


</html>
