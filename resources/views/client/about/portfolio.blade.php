<section class="portfolio">
    <h2>Mi Portafolio</h2>
    <div class="wrapper">
        @for ($i = 0; $i < 5; $i++)
            <div class="project">
                    <img loading="lazy" src="{{ image_placeholder("300x300") }}" alt="">
                    <a target="_blank" href="https://youtube.com">
                        <div class="img-overlay"></div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <a href="https://github.com" class="btn">
                                <i class="uil uil-github"></i>
                            </a>
                            <a href="https://github.com" class="btn">
                                <i class="uil uil-link"></i>
                            </a>
                        </div>
                    </div>
            </div>
        @endfor
    </div>
</section>
