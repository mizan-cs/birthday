<header id="header">
    <div class="quck-link">
        <div class="container">
            <div class="mail"><a href="MailTo:{{ setting('site.email') }}"><span class="icon icon-envelope"></span>{{ setting('site.email') }}</a></div>
            <div class="right-link">
                <ul>
                    <li><a href="">Change Language</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav id="nav-main">
        <div class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a href="{{ route('home') }}" class="navbar-brand"><img style="max-height: 63px" src="{{ asset(Voyager::image(setting('site.logo'))) }}" alt=""></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon1-barMenu"></span>
                        <span class="icon1-barMenu"></span>
                        <span class="icon1-barMenu"></span>
                    </button>

                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="single-col"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Schedule</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>