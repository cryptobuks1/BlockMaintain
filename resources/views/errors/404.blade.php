@extends('layouts.web')
@section('title', '404 Page Not Found')

@section('content')

    <article>
        <header id="art-header">
            <div id="art-header__strip" style="background-image:url('http://images1.odometer.com/production/o/not-good-news-tesla-model-3-customers/model3_1.jpg')">
                <div id="art-header__strip__overlay"></div>
                <div class="row">
                    <h1>Page Not Found</h1>
                    <div class="art-category"><span>404</span></div>
                </div>
                <div id="art-header__strip__meta" class="row">
                    <a href="/" class="ribbon-link">Back to Home</a>
                </div>
            </div>
        </header>
    </article>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <p>End of the Road! The page you requested can’t be found. But like all good GPS, we can help you with an alternative route. Try our <a href="/">home page</a> for links to all our automotive information and articles. Alternatively, pick a category from the menu bar at the top of the page.</p>

            <br>
            <br>
            <p>Happy Travels!</p>

        </div>
    </div>

@endsection