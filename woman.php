<?php 
    $title="Veneto Moda | Woman";
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
                <h2>woman collection</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fugit doloribus error facilis tenetur autem nihil explicabo tempora ipsum corporis aliquam numquam qui quos facere ratione sunt quaerat rerum, iste, fugiat necessitatibus officiis nam exercitationem reiciendis. Quae nobis dolore, doloribus, illum iusto aut eum nisi doloremque corrupti error maxime soluta aliquam harum temporibus provident deleniti tenetur! Vero veritatis voluptate ratione quisquam? Ut magnam nobis, expedita quos quod, consequuntur error ullam ipsa aliquam, fugiat perferendis ratione nam minus. Tempore, nam aspernatur!</p>
            </div>
            <div class="miniature">
                        <a data-fancybox="woman" href="./img/woman.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/woman.jpeg">
                        </a>
                        <a data-fancybox="woman" href="./img/woman-1.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/woman-1.jpeg">
                        </a>
                        <a data-fancybox="woman" href="./img/woman-2.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/woman-2.jpeg">
                        </a>
                        <a data-fancybox="woman" href="./img/woman-3.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/woman-3.jpeg">
                        </a>
                        <a data-fancybox="woman" href="./img/woman-4.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/woman-4.jpeg">
                        </a>
                        <a data-fancybox="woman" href="./img/woman-5.jpeg" data-caption="Lorem ipsum dolor">
                            <img src="./img/woman-5.jpeg">
                        </a>
            </div>
        </section>
        <section class="preview">
            <div class="swiper swiper-box">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" id="slide12"></div>
                <div class="swiper-slide" id="slide13"></div>
                <div class="swiper-slide" id="slide14"></div>
                <div class="swiper-slide" id="slide15"></div>
                <div class="swiper-slide" id="slide16"></div>
                <div class="swiper-slide" id="slide17"></div>
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