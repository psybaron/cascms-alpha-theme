<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">{{ Setting::get('core::site-name') }}</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            {!! Menu::render('main') !!}
            {!! Menu::render('lang','navbar-right') !!}
        </div>
    </div>
</nav>
