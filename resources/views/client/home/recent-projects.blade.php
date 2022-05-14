<section class="recent-projects">
    <h2 class="title-section">Proyectos recientes</h2>
    <div class="wrapper">
        <div class="swiper">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 5; $i++)
                    <div class="swiper-slide">
                        <img class="no-user-select" src="{{ image_placeholder("300") }}">
                    </div>
                @endfor
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="btn-container"></div>
    </div>
</section>
