<?php get_header(); ?>

<header class="header" id="particles-js">
   <!-- <div class="header__triangle--top"> </div> -->
   <!-- <svg class="header__triangle--top" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="300" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path class="triangle--blue" d="M0 100 L0 0 L100 0 Z"></path>
    </svg>-->
    <div class="container">
        <div class="header__introduction">
            <div>
                <h1 class="header__title"> GeosInformatica </h1>
                <h2 class="header__subtitle"> Koło Naukowe </h2>
                <p style="font-size:0.7em;">Akademia Górniczo-Hutnicza w Krakowie</p>
            </div>
        </div>
        <!-- Call to action (arrow to bottom)  -- || >
        <div class="header__arrow--bottom"><i class="fa fa-chevron-down fa-2x callToAction__bounce"
                                              aria-hidden="true"></i>
        </div>-->
    </div>
   <!-- <svg class="header__triangle--bottom" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="300" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path class="triangle--blue" d="M100 100 L50 100 L100 33 Z""></path>
    </svg>-->
</header>

<section>
    <div class="container">
        <div class="row">
            <h3 class="title" id="AboutUs">O nas</h3>
            <div class="row" data-entrance="from-bottom">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo_lg.png" class="mx-auto img-fluid" alt="Our team">
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
                    <button class="btn btn--round "> Więcej! </button>
                    <a href="#" class="btn"> LOREM ipsum </a>

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
                <div class="card border-light bg-light card__margin--m" data-entrance="from-left">
                    <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri();?>/img/icons/drone.svg" alt="Dron z kamerą">
                    <div class="card-body">
                        <h4 class="card-title text-center">Projekt "Nord"</h4>
                        <h5 class="card-subtitle mb-2 text-center">Dron do scanningu 3D</h5>
                        <p class="card-text">
                            Projekt obecnie jest w fazie rozwoju.
                            Tworzymy drona do skanowania obiektów przestrzennych i tworzenia trójwymiarowego modelu.
                        </p>
                    </div>
                    <div class="card-footer border-info text-right">
                        <a href="<?php  echo get_home_url();  ?>/projekt-nord/" class="btn btn-info btn__more">Więcej</a>
                    </div>
                </div><!--/ Card element -->

                <!-- Card element [EXAMPLE]  -x->
                <div class="card border-light bg-light card__margin--l" data-entrance="from-left">
                    <img class="card-img-top" src="<php echo get_stylesheet_directory_uri()... php>img/icons/laptop.svg" alt="Laptop">
                    <div class="card-body">
                        <h4 class="card-title text-center">Example</h4>
                        <h5 class="card-subtitle mb-2 text-center">Dron do scanningu 3D</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu ipsum nec lorem luctus vestibulum.
                            Proin fringilla
                        </p>
                    </div>
                    <div class="card-footer border-info text-right">
                        <a href="#" class="btn btn-info btn__more">Więcej</a>
                    </div>
                </div><!--/ Card element -->

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">

                <!-- Card element [KARETKI]-->
                <div class="card border-light bg-light card__margin--xl" data-entrance="from-right">
                    <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri();?>/img/icons/ambulance.svg" alt="Karetka pogotowia">
                    <div class="card-body">
                        <h4 class="card-title text-center">System dla karetek</h4>
                        <h5 class="card-subtitle mb-2 text-center">Optymalizacja czasu dojazdów ambulansów</h5>
                        <p class="card-text">
                            Dzięki systemowi geoinformatycznemu skróci się czas dojazdu karetek pogotowia ratunkowego do
                            pacjentów.
                            Jest to pierwsza taka aplikacja w Polsce.
                        </p>
                    </div>
                    <div class="card-footer border-info text-right">
                        <a href="http://www.agh.edu.pl/blog-naukowy/info/article/karetki-dojada-szybciej-blog-naukowy/"
                           class="float-left btn btn-link"> Artykuł</a>
                        <a href="<?php  echo get_home_url();  ?>/project-karetki/" class="btn btn-info btn__more">Więcej</a>
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
        <?php while (have_posts()) : the_post(); ?>
            <article class="col-lg-6 col-md-6 col-sm-12">
                <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p>
                    <span class=""><?php the_time('j F, Y');?></span>
                    <span class="float-right"><?php the_tags(); ?></span>
                </p>
                <?php the_content('Czytaj więcej'); ?>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<!--/ Post loop -->

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
                            <div class="col-md-12 text-center">
                                <input type="submit" class="  btn btn-success btn-send" value="Wyślij wiadomość">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Contact -->


<?php get_footer(); ?>

