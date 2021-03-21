{{--<nav class="navbar  navbar-dark  bg-dark mb-1">--}}
{{--    <a class="navbar-brand btn btn-outline-info" href="/">Fakebook</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"--}}
{{--            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="float-md-left collapse navbar-collapse" id="navbarNav">--}}
{{--        <div class="navbar-nav">--}}
{{--        @if(!\Illuminate\Support\Facades\Auth::check())--}}
{{--        <a class="btn btn-outline-info nav-link" h>ref="/sign-in">Sign in</a--}}
{{--        <a class="btn btn-outline-info nav-link" href="/sign-up">Sign up</a>--}}
{{--            @else--}}
{{--            <form class="d-flex m-2 ">--}}
{{--                <input class="form-control me-2 mr-2 nav-link" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-success mr-2 nav-link" type="submit">Search</button>--}}
{{--                <a class="btn btn-outline-info mr-2 nav-link" href="#">Frends</a>--}}
{{--                <a class="btn btn-outline-info mr-2" href="#">{{Auth::user()->getName}}</a>--}}
{{--                <a class="btn btn-outline-info mr-2 nav-link" href="#">Edit Profile</a>--}}
{{--                <a class="btn btn-outline-info mr-2 nav-link" href="/logout">Logout</a>--}}
{{--            </form>--}}
{{--        @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<x-head></x-head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
    <a class="navbar-brand" href="/">Fakebook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @if(\Illuminate\Support\Facades\Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/profile">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Frends</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Edit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <a class="nav-link" href="/logout">Logout</a>
                    @elseif(!\Illuminate\Support\Facades\Auth::check())
                        <a class="nav-link" href="/sign-in">Sign in</a>
                        <a class="nav-link" href="/sign-up">Sign up</a>
                        @endif
    </div>
</nav>
