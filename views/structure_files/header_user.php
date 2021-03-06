<!DOCTYPE HTML>
<html>
<head></head>

<body>
<header id="navbar_ajax">
<!-- Navbar -->
        <nav id="nav" style="background-color: #4584F4;" class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand" href="../index.html"><img src="../dist/img/logo/Icon.png" style="width: 30px; height: 30px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a name="intro-section" 
                            class="nav-link" href="home.html">Panoramica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="return caricaSezione('services');" data-offset="90">Richiesta Servizio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="caricaSezioneOrdini();" data-offset="90">Riepilogo Ordini</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="caricaSceltaPiano2('plans')" data-offset="90">Cambia Piano</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item nav-link">
                            <?php
                            session_start();
                            echo "<h4 style='color: white; '>" . $_SESSION['username'] . "&emsp;</h4>";
                            ?>
                        </li>
                          <li class="nav-item avatar dropdown">
                              <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img style="height: 40px; margin:0;" <?php echo 'src="../dist/php/myuploads/' . $_SESSION['userid'] . '.png"';?> class="img-fluid rounded-circle z-depth-0" alt="Material Design for Bootstrap - example photo"> 
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                                  <a id="items-color" class="dropdown-item waves-effect waves-light" 
                                   onclick="return caricaSezionePHP('settings');"><i class="fa fa-gear"></i> Impostazioni</a>
                                  <a id="items-color" class="dropdown-item waves-effect waves-light" onclick="effettuaLogout();" ><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
                              </div>
                          </li>
                      </ul>
                  
                </div>
        </nav>
        <!-- Navbar -->

        <!-- Modal Success Change Password -->
        <div class="modal fade" id="modalSuccessChangePassword" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-success" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Password cambiata con successo</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p id="modal_success_body_text"></p>
                        </div>
                    </div>
                </div>
            <!--/.Content-->
            </div>
        </div>

        <!-- Modal Success Change Image -->
        <div class="modal fade" id="modalSuccessChangeImage" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-success" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Immagine cambiata con successo</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p id="modal_success_body_text"></p>
                        </div>
                    </div>
                </div>
            <!--/.Content-->
            </div>
        </div>

      </header>
    </body>
  </html>