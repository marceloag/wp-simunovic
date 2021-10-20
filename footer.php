<!-- FOOTER -->
    <footer>
        <div class="row full">
            <div class="large-12 medium-12 small-12 columns">

                <div class="large-6 medium-12 small-12 columns">
                    <div class="logo">
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/img/simunovic_logo.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="large-6 medium-12 small-12 columns">
                    <ul class="info">
                        <li class="ciudad">Punta Arenas</li>
                        <li>KM 13,7 norte - rio seco</li>
                        <li>tel (56-61) 292810 - fax (56-61) 214699</li>
                        <li>p.o box 14-d email: nsimunovic@somunovic.cl</li>
                        <li>wwwimunovic@somunovic.cl</li>
                    </ul>

                    <br>

                    <ul class="info">
                        <li class="ciudad">Santiago</li>
                        <li>Avenida presidente eduardo freo montalva 2091, independencia</li>
                        <li>tel (56-2) 7341692 - FAX (56-2) 7369299 p.o box 9053</li>
                        <li>email: interam@interam.cl www-interam.cl</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row full croop">
            <div class="large-1 medium-2 small-2 columns large-centered medium-centered small-centered">
                <a href="https://www.croop.cl/" target="_blank">
                    <img src="https://www.croop.cl/agencia/wp-content/themes/wp-croop2k18/img/agencia-digital-croop-full.png" alt="Agencia Digital Croop">
                    <br>
                </a>
            </div>
        </div>

    </footer>

<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            },
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [3000])
        })

    </script>


</body>

</html>
