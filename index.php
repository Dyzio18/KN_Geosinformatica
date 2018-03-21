<?php get_header(); ?>

<header class="header" id="particles-js">
    <div class="container">
        <div class="header__introduction">
            <div class="flex-column flex--center">
                <h1 class="header__title"> GeosInformatica </h1>
                <h2 class="header__subtitle"> Koło Naukowe </h2>
                <p style="font-size:0.7em;">Akademia Górniczo-Hutnicza w Krakowie</p>
                <a href="#AboutUs" class="btn m-t-50 nav-link"> Więcej</a>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <h3 class="title" id="AboutUs">O nas</h3>
            <div class="row" data-entrance="from-bottom">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_lg.png" class="mx-auto img-fluid"
                         alt="Our team">
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 pt-5">
                    <p>Koło naukowe Geos Informatica istnieje od 2002 roku i działa przy Katedrze Geoinformatyki i
                        Informatyki Stosowanej na Wydziale Geologii, Geofizyki i ochrony Środowiska, Akademii Górniczo -
                        Hutniczej w Krakowie.
                    </p>
                    <p>Wybrana działalność koła:</p>
                    <ul class="">
                        <li> Propagowanie wiedzy informatycznej poprzez organizowanie wykładów, prelekcji, szkoleń</li>
                        <li> Udział w Sesjach Kół Naukowych AGH</li>
                        <li> Popieranie i upowszechnianie prac naukowych oraz projektów badawczych, których autorami są
                            członkowie koła
                        </li>
                        <li> Rozwijanie umiejętności informatycznych poprzez prowadzenie projektów dla wydziału, uczelni
                            oraz firm zewnętrznych
                        </li>
                        <li> Współpraca z innymi kołami i organizacjami</li>
                        <li> Udostępnianie materiałów pomocniczych do nauki przedmiotów informatycznych</li>
                    </ul>
                    <span class="font-weight-bold mt-2">
                        Dołącz do nas już dziś!
                    </span>
                    <div class="float-right mr-4 text-center">
                        Zobacz nas na: <br>
                        <a class=" text-primary font-weight-bold" href="https://www.facebook.com/GeosInformatica">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 id="Projects" class="title">Projekty</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">

                <!-- Card element [DRON] -->
                <div class="card" data-entrance="from-left">
                    <h4 class="card__title text-center">Projekt "Nord"</h4>
                    <img class="card__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/drone.svg"   alt="Dron z kamerą">
                    <h5 class="card__subtitle mb-2 text-center">Dron do scanningu 3D</h5>
                    <div class="card__body">
                        <p class="card__content">
                            Lorem ipsum An unmanned aerial vehicle (UAV), commonly known as a drone,
                            is an aircraft without a human pilot aboard. UAVs are a component of an unmanned aircraft
                            system (UAS);
                            which include a UAV, a ground-based controller, and a system of communications between the
                            two. The flight of UAVs
                            may operate with various degrees of autonomy: either under remote control by a human
                            operator or autonomously by onboard computers
                        </p>
                    </div>
                    <div class="row">
                        <a href="<?php echo get_home_url(); ?>/projekt-nord/" class="btn">Więcej</a>
                    </div>
                </div><!--/ Card element -->
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Card element [KARETKI]-->
                <div class="card" data-entrance="from-right">
                    <h4 class="card__title text-center">System dla karetek</h4>
                    <img class="card__img" src="<?php echo get_stylesheet_directory_uri(); ?>
                    /img/icons/ambulance.svg"
                         alt="Karetka pogotowia">
                    <h5 class="card__subtitle mb-2 text-center">Optymalizacja czasu dojazdów ambulansów</h5>
                    <div class="card__body">
                        <p class="card__content">
                            Dzięki systemowi geoinformatycznemu skróci się czas dojazdu karetek pogotowia ratunkowego do
                            pacjentów. Jest to pierwsza taka aplikacja w Polsce.
                            which include a UAV, a ground-based controller, and a system of communications between the
                            two. The flight of UAVs
                            may operate with various degrees of autonomy: either under remote control by a human
                            operator or autonomously by onboard computers
                        </p>
                    </div>
                    <div class="row">
                        <a href="<?php echo get_home_url(); ?>/projekt-karetki/" class="btn">Więcej</a>
                        <a href="http://www.agh.edu.pl/blog-naukowy/info/article/karetki-dojada-szybciej-blog-naukowy/"
                           class="btn btn--light"> Artykuł</a>
                    </div>
                </div><!--/ Card element -->

            </div>
        </div>
    </div>
</section>


<!-- Post loop -->
<section class="container">
    <div class="row">
        <div class="col-sm-12 text-right">
            <h3 id="News" class="title">Aktualności</h3>
        </div>

        <!-- LATEST POST -->
        <?php
        /** POST LOOP, gets 3 latest post and highlights post
         *  from category 'promoted'.
         */
        $the_query = new WP_Query(array('posts_per_page' => 3));
        if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <?php /* highlights post from category 'promoted' */ ?>
                <article
                        class="col-lg-4 col-md-6 col-sm-12 post <?php echo (in_category('promoted')) ? 'post--promoted' : ' '; ?> ">
                    <span class="post__date"><?php the_time('j F, Y'); ?></span>
                    <!-- <span><?php /* the_tags(); */ ?></span> -->
                    <h4 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <!-- <a href="404.php" class="btn m-t-20 mx-auto"> Więcej ... </a> -->

        <?php else : ?>
            <h5 class="m-t-50"><?php __('Brak aktualności'); ?></h5>
        <?php endif; ?>
        <!--// LATEST POST -->
    </div>
</section>


<!-- Contact -->
<section class="margin__bottom--m">
    <div class="container">
        <div class="row">
            <h3 class="title" id="Contact">Kontakt</h3>
            <div class=" col-lg-12 col-md-12 col-sm-12">
                <div class="mx-auto col-lg-6 col-md-8 col-sm-12">
                    <form id="contact-form" method="post" action="   " role="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="form-group">
                                <label for="form_name">Twoje imię</label>
                                <input id="form_name" type="text" name="name" class="form-control"
                                       placeholder="Jak się nazywasz?" required="required"
                                       data-error="Pole jest wymagane">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="form_email">Email </label>
                                <input id="form_email" type="email" name="email" class="form-control"
                                       placeholder="Twój email" required="required" data-error="Pole jest wymagane">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="form_message">Wiadomość </label>
                                <textarea id="form_message" name="message" class="form-control"
                                          placeholder="Napisz do nas" rows="4" required="required"
                                          data-error="Proszę napisz wiadomość przed wysłaniem"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit" class="btn mx-auto m-b-120 float-right"> Wyślij wiadomość</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Contact -->


<?php get_footer(); ?>

