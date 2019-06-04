<section class="banner">
    <div class="carousel" id="mainBnner">
        <div class="item"><img src="{{ asset(Voyager::image(setting('site.slider-image-1'))) }}" alt=""></div>
        <div class="item"><img src="{{ asset(Voyager::image(setting('site.slider-image-2'))) }}" alt=""></div>
        <div class="item"><img src="{{ asset(Voyager::image(setting('site.slider-image-3'))) }}" alt=""></div>
    </div>
    <div class="banner-nav">
        <div class="prev"><span class="icon icon-arrow-left"></span></div>
        <div class="next"><span class="icon icon-arrow-right"></span></div>
    </div>
    <div class="banner-text">
        <div class="container">
            <div style="margin-top: 19%" class="search-title">
                <h1><span>{{ setting('site.title') }}</span></h1>
            </div>
        </div>
    </div>
</section>