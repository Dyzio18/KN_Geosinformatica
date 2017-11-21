<!-- Admin Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">Logowanie - Panel administracyjny</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group col-md-12">
                        <label for="inputEmailAdmin" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmailAdmin" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <button type="button" class="btn btn-secondary ml-3" data-dismiss="modal">Anuluj</button>
                    <button type="submit" class="btn btn-primary float-right mr-3">Zaloguj</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-info small"> Aby uzyskać dostęp do panelu skontaktuj się z administratorem</p>
            </div>
        </div>
    </div>
</div> <!--/ Admin Modal -->

<!-- Sesje KN -->
<div class="modal fade" id="sesionModal" tabindex="-1" role="dialog" aria-labelledby="sesionModalTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sesionModalTitle">Spotkania KN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">Obecnie nie ustalono terminu spotkań</p>
                <p>Spotkania koła odbywają&nbsp;się&nbsp;w
                    <span class="font-weight-bold">_______</span> <br>
                    w sali <span class="font-weight-bold"> ___ o&nbsp;godzinie __:__ </span>
                    co&nbsp;2&nbsp;tygodnie
                </p>
                <p>Serdecznie zapraszamy wszystkich zainteresowanych !</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div><!--/ Sesje KN -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-12 ">
                <p>
                    <span class="font-weight-bold "> Geosinformatica </span> - Koło naukowe studentów informatyki
                    stosowanej działającej na wydziale WGGiOŚ, Akademii Górniczo-Hutniczej w Krakowie
                </p>
                <p>
                    Śledź nasz fanpage na <a class="font-weight-bold text-info" target="_blank"
                                             href="https://www.facebook.com/GeosInformatica">facebooku</a>
                </p>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;geosinformatica@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 ml-auto ">
                <p class="border border-top-0 border-right-0 border-left-0 border-white">Mapa strony:</p>
                <ul class="list-unstyled">
                    <li><a href="<?php echo get_home_url(); ?>#Projects">Projekty</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#News">Aktualności</a></li>
                    <li><a href="members.html">Zarząd i członkowie</a></li>
                    <li><a href="!00" data-toggle="modal" data-target="#sesionModal">Sesje KN</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <p>&nbsp;</p>
                <ul class="list-unstyled">
                    <li><a href="http://home.agh.edu.pl/~geoinf/pl/main/">Strona Katedry</a></li>
                    <li><a href="http://www.informatica.agh.edu.pl/index.php/category/newsy/">Archiwum</a></li>
                    <li><a href="https://get.google.com/albumarchive/105194706630229846053?source=pwa">Galeria</a></li>
                    <li><a href="#!0" data-toggle="modal" data-target="#adminModal">Panel administracyjny</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--
<div class="container-fluid footer__copyright">
    <div class="row">
        <div class="mx-auto text-center">
            <p>Copyright © <span id="currentYear"> </span> Geosinformatica</p>
            <p>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a
                        href="https://www.flaticon.com/" title="Flaticon">
                    www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"
                                                           title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
            </p>
        </div>
    </div>
</div>-->
<?php wp_footer(); ?>
</body>
</html>