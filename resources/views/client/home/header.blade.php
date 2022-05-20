<header>
    <div class="content">
        <h1>Hola soy Alexander!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quaerat debitis corporis omnis ea delectus
            voluptatibus laudantium libero, quae.</p>
        <div class="btn-container lg xl xxl">
            <button>Contactame</button>
        </div>
    </div>
    <div class="img-container">
        <picture>
            <source loading="lazy" srcset="{{ image_placeholder("400") }}" media="(min-width: 500px)">
            <img loading="lazy" src="{{ image_placeholder("300") }}" alt="">
        </picture>
        <div class="btn-container xs sm md">
            <button>Contactame</button>
        </div>
    </div>
</header>
