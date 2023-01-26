<?php 
    $title="Veneto Moda | Home";
    $description="Veneto Moda, il tuo compagno di stile. Leader nello streetwear a Treviso e provincia";
    include('header.php');
?>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide" id="slide1">
                <div class="boxtitolo">
                    <div class="span wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
                        <div class="line-hor"></div><span>streetwear fashion</span>
                    </div>
                    <h2 class="wow animate__animated animate__fadeInRight" data-wow-delay=".2s">veneto moda</h2>
                    <h3 class="wow animate__animated animate__fadeInRight" data-wow-delay=".2s">il vostro compagno di stile</h3>
                    <a href="man.php" title="Vai a Collezione" class="wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">collezione</a>
                </div>
              </div>
              <div class="swiper-slide" id="slide2">
                <div class="boxtitolo">
                    <div class="span">
                        <div class="line-hor"></div><span>streetwear fashion</span>
                    </div>
                    <h2>veneto moda</h2>
                    <h3>il vostro compagno di stile</h3>
                    <a href="woman.php" title="Vai a Collezione">collezione</a>
                </div>
              </div>
              <div class="swiper-slide" id="slide3">
                <div class="boxtitolo">
                    <div class="span">
                        <div class="line-hor"></div><span>streetwear fashion</span>
                    </div>
                    <h2>veneto moda</h2>
                    <h3>il vostro compagno di stile</h3>
                    <a href="kid.php" title="Vai a Collezione">collezione</a>
                </div>
              </div>
              <div class="swiper-slide" id="slide4">
                <div class="boxtitolo">
                    <div class="span">
                        <div class="line-hor"></div><span>streetwear fashion</span>
                    </div>
                    <h2>veneto moda</h2>
                    <h3>il vostro compagno di stile</h3>
                    <a href="woman.php" title="Vai a Collezione">collezione</a>
                </div>
              </div>
              <div class="swiper-slide" id="slide5">
                <div class="boxtitolo">
                    <div class="span">
                        <div class="line-hor"></div><span>streetwear fashion</span>
                    </div>
                    <h2>veneto moda</h2>
                    <h3>il vostro compagno di stile</h3>
                    <a href="man.php" title="Vai a Collezione">collezione</a>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
          
            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
   </header>
   <main id="main">
       <!-- sezione chi siamo -->
       <section id="fascia-chi-siamo">
           <div id="sottofascia-chi-siamo" class="wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                <div class="line-ver"></div>
                <h1>streetwear is always in fashion</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam velit a hendrerit dapibus. Nulla dictum dui eros, at facilisis ligula vulputate sit amet. Aliquam mauris magna, posuere eget neque id, pharetra luctus sem. Sed bibendum vel ex quis eleifend. Mauris mattis quis velit a mattis. In ac massa sem. Etiam nulla justo, auctor ut metus vel, facilisis cursus massa.</p>
                <a href="chi-siamo.html" title="Vai a Chi Siamo">chi siamo</a>
                <div class="line-ver"></div>
           </div>
       </section>
       <!-- sezione collezione uomo -->
       <section class="fascia-coll uomo">
           <div id="bgimg-man"></div>
           <div class="descrizione-coll wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                <div class="line-ver"></div>
                <h2>man</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam velit a hendrerit dapibus. Nulla dictum dui eros, at facilisis ligula vulputate sit amet. Aliquam mauris magna, posuere eget neque id, pharetra luctus sem.</p>
                <a href="man.php" title="Vai a Uomo">scopri</a>
                <div class="line-ver"></div>
           </div>
       </section>
       <!-- sezione collezione donna -->
       <section class="fascia-coll donna">
           <div class="descrizione-coll wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
            <div class="line-ver"></div>
            <h2>woman</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam velit a hendrerit dapibus. Nulla dictum dui eros, at facilisis ligula vulputate sit amet. Aliquam mauris magna, posuere eget neque id, pharetra luctus sem.</p>
            <a href="woman.php" title="Vai a Donna">scopri</a>
            <div class="line-ver"></div>
           </div>
           <div id="bgimg-woman"></div>
       </section>
       <!-- sezione collezione bambino -->
       <section class="fascia-coll bambino">
           <div id="bgimg-kid"></div>
           <div class="descrizione-coll wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                <div class="line-ver"></div>
                <h2>kid</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam velit a hendrerit dapibus. Nulla dictum dui eros, at facilisis ligula vulputate sit amet. Aliquam mauris magna, posuere eget neque id, pharetra luctus sem.</p>
                <a href="kid.php" title="Vai a Bambino">scopri</a>
                <div class="line-ver"></div>
           </div>
       </section>
       <section id="fascia-brand">
           <div id="sottofascia-brand">
                <div class="line-ver"></div>
                <h2>i nostri brand</h2>
                <div id="brand-container">
                    <div class="row-brand" id="row-1">
                        <img src="./img/stussy.png" alt="logo-stussy" title="Stussy" class="wow animate__animated animate__fadeIn">
                        <img src="./img/off-white.png" alt="logo-offwhite" title="Off White" class=" wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                        <img src="./img/marcelo-burlon.png" alt="logo-stussy" title="Marcelo Burlon" class="wow animate__animated animate__fadeIn" data-wow-delay=".8s">
                        <img src="./img/assc.png" alt="logo-assc" title="Anti Social Social Club" class="wow animate__animated animate__fadeIn" data-wow-delay=".8s">
                        <img src="./img/essentials-fog.png" alt="logo-essential-fog" title="Essential - Fear of God" class="wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                        <img src="./img/stone-island.png" alt="logo-stone-island" title="Stone Island" class="wow animate__animated animate__fadeIn">
                    </div>
                    <div class="row-brand" id="row-2">
                        <img src="./img/nike-nocta.png" alt="logo-nike-nocta" title="Nike Nocta" class="wow animate__animated animate__fadeIn one" data-wow-delay=".8s">
                        <img src="./img/palm-angels.png" alt="logo-palm-angels" title="Palm Angels" class="wow animate__animated animate__fadeIn one" data-wow-delay=".3s">
                        <img src="./img/balenciaga.png" alt="logo-balenciaga" title="Balenciaga" class="wow animate__animated animate__fadeIn one">
                        <img src="./img/givenchy.png" alt="logo-givenchy" title="Givenchy" class="wow animate__animated animate__fadeIn two">
                        <img src="./img/gcds.png" alt="logo-gcds" title="GCDS" class="wow animate__animated animate__fadeIn two" data-wow-delay=".3s">
                        <img src="./img/yeezy.png" alt="logo-yeezy" title="Yeezy" class="wow animate__animated animate__fadeIn two" data-wow-delay=".8s">
                    </div>
                </div>
                <div class="line-ver"></div>
           </div>
       </section>
       <section id="fascia-news">
            <div id="sottofascia-news">
                <div class="line-ver"></div>
                    <h2>ultime news</h2>
                    <div id="row-news">
                        <div class="news-container" id="news-woman">
                            <div class="news-img" id="news-img-woman"></div>
                            <article class="news">
                                <div class="titolo-news">
                                    <h3>woman f/w 22-23</h3>
                                    <span>15 novembre 2022</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Fusce aliquam velit a hendrerit dapibus…</p>
                                <a href="#" title="Read More">read more</a>
                            </article>
                        </div>
                        <div class="news-container" id="news-man">
                            <div class="news-img" id="news-img-man"></div>
                            <article class="news">
                                <div class="titolo-news">
                                    <h3>man f/w 22-23</h3>
                                    <span>15 novembre 2022</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Fusce aliquam velit a hendrerit dapibus…</p>
                                <a href="#" title="Read More">read more</a>
                            </article>
                        </div>
                        <div class="news-container" id="news-kid">
                            <div class="news-img" id="news-img-kid"></div>
                            <article class="news">
                                <div class="titolo-news">
                                    <h3>kid f/w 22-23</h3>
                                    <span>15 novembre 2022</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Fusce aliquam velit a hendrerit dapibus…</p>
                                <a href="#" title="Read More">read more</a>
                            </article>
                        </div>
                    </div>
                    <a href="news.php" title="Vai a news" id="tutte-le-news">tutte le news</a>
                    <div id="form-container">
                        <div id="form-title">
                            <h3>ricevi tutte le news</h3>
                            <p>Iscriviti per ricevere tutte le news Veneto Moda</p>
                        </div>
                        <form action="newsletter.php" method="post" name="newsletter">
                            <div id="checkbox">
                                <label class="checkbox-wrapper">Dichiaro di aver preso visione dell'informativa sulla <a href="https://www.iubenda.com/privacy-policy/44620052" target="_blank">privacy</a>
                                    <input type="checkbox" name="check" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div id="email-submit">
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="submit" value="ISCRIVITI" name="newsletter">
                            </div>
                        </form>
                    </div>
                <div class="line-ver"></div>
            </div>
    </section>
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

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        });

    </script>

</body>
</html>