<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href=""><img src="{{asset('assets/images/version/tech-logo.png')}}" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('new-post') }}">Novo Post</a>
            </li>
        </ul>
    </div>
</nav>
