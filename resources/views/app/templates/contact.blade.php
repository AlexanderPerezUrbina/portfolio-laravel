<section class="contact">
    <h2 class="title-section">Contactame</h2>
    <div class="wrapper">
        {{-- <ul>
            <li class="social-network">
                <a href="" target="__blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    +56 9 7790 5553
                </a>
            </li>
            <li class="social-network">
                <a href="https://www.instagram.com/_alexwishu_/" target="__blank">
                    <i class="fa-brands fa-instagram"></i>
                    @_alexwishu_
                </a>
            </li>
            <li class="social-network">
                <a href="https://www.facebook.com/alexander.perezurbina.10/" target="__blank">
                    <i class="fa-brands fa-facebook-f"></i>
                    @alexander.perezurbina.10
                </a>
            </li>
            <li class="social-network">
                <a href="mailto:alexander.perez.trabajos@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                    alexander.perez.trabajos@gmail.com
                </a>
            </li>
        </ul> --}}
        <form>
            @csrf
            <input class="input-form" name="name" type="text" placeholder="Tu nombre">
            <input class="input-form" name="email" type="email" placeholder="Tu correo electronico">
            <input class="input-form" name="phone" type="text" placeholder="Tu numero de telefono (opcional)">
            <textarea name="message" id="" placeholder="Mensaje..."></textarea>
            <div class="g-recaptcha-container">
                <div id="g-recaptcha-client-contact" class="g-recaptcha" data-sitekey="{{env('PUBLIC_KEY_RECAPTCHA')}}"></div>
            </div>
            <div class="btn-container">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>
