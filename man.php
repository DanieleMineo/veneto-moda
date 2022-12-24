<?php 
    $title="Veneto Moda | Man";
    $description="Veneto Moda, il tuo compagno di stile. Leader nello streetwear a Treviso e provincia";
    include('header.php');
?>
</header>
<main class="collection-container">
    <div class="collection-sottocontainer">
        <section class="collection">
            <div class="collection-descr">
                <div class="span">
                    <div class="line-hor"></div><span>veneto moda</span>
                </div>
                <h2>man collection</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fugit doloribus error facilis tenetur autem nihil explicabo tempora ipsum corporis aliquam numquam qui quos facere ratione sunt quaerat rerum, iste, fugiat necessitatibus officiis nam exercitationem reiciendis. Quae nobis dolore, doloribus, illum iusto aut eum nisi doloremque corrupti error maxime soluta aliquam harum temporibus provident deleniti tenetur! Vero veritatis voluptate ratione quisquam? Ut magnam nobis, expedita quos quod, consequuntur error ullam ipsa aliquam, fugiat perferendis ratione nam minus. Tempore, nam aspernatur!</p>
            </div>
            <div class="miniature">
                        <a data-fancybox="man" href="./img/man.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/man.jpeg">
                        </a>
                        <a data-fancybox="man" href="./img/man-1.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/man-1.jpeg">
                        </a>
                        <a data-fancybox="man" href="./img/man-2.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/man-2.jpeg">
                        </a>
                        <a data-fancybox="man" href="./img/man-3.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/man-3.jpeg">
                        </a>
                        <a data-fancybox="man" href="./img/man-4.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/man-4.jpeg">
                        </a>
                        <a data-fancybox="man" href="./img/man-5.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/man-5.jpeg">
                        </a>
            </div>
        </section>
        <section class="preview">
            <div class="swiper swiper-box">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" id="slide6"></div>
                <div class="swiper-slide" id="slide7"></div>
                <div class="swiper-slide" id="slide8"></div>
                <div class="swiper-slide" id="slide9"></div>
                <div class="swiper-slide" id="slide10"></div>
                <div class="swiper-slide" id="slide11"></div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->
            
                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            -->
                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </section>
    </div>
</main>
<!-- includo footer con script escluso lo swiper. !!ATTENZIONE!! NON INCLUSI CHIUSURA TAG BODY E TAG HTML -->

<?php 
        include('footer.php');
    ?>

    <!-- SCRIPT PER SWIPER -->
    <script src="js/swiper-bundle.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 1000,
        autoplay: {
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
            },

        // // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },

        // // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        // // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
        });

    </script>

</body>
</html>