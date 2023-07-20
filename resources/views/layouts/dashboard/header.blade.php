<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">

            <a class="navbar-brand" href="javascript:;">@yield("title")</a>
        </div>
        <div class="row align-items-center p-auto d-none d-lg-flex">
        @auth
            <a href="{{ url('/dashboard') }}" class="btn bg-primary text-dark">{{ Auth::user()->name }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="/{{route('logout')}}" class="btn bg-primary text-dark" onclick="event.preventDefault();this.closest('form').submit();"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                </form>
            {{--                <a href="{{ url('/admin') }}" class="btn bg-primary mx-1 text-uppercase text-dark bg-primary px-2 ml-n1"></a>--}}
        @else
            <a href="{{route("signin")}}" class="btn bg-primary text-dark">Sign in</a>

            @if (Route::has('signup'))
                <a href="{{route("signup")}}" class="btn bg-primary text-dark ">Sign Up</a>
            @endif
        @endauth
        </div>
    </div>
</nav>
