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
                            class="nav-link" onclick="return caricaSezione('panoramica');">Panoramica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="return caricaSezione('services');" data-offset="90">Richiesta Servizio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="return caricaSezione('orders');" data-offset="90">Riepilogo Ordini</a>
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
                              <img style="height: 40px; margin:0;" src="https://mdbootstrap.com/img/Photos/Categories/Components/img(31).jpg" class="img-fluid rounded-circle z-depth-0" alt="Material Design for Bootstrap - example photo"> 
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                                  <a id="items-color" class="dropdown-item waves-effect waves-light" 
                                   onclick="return caricaSezione('settings');"><i class="fa fa-gear"></i> Impostazioni</a>
                                  <a id="items-color" class="dropdown-item waves-effect waves-light" 
                                   href="../index.html" onclick="<?php session_start(); session_unset(); session_destroy();?>"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
                              </div>
                          </li>
                      </ul>
                  
                </div>
        </nav>
        <!-- Navbar -->
      </header>
    </body>
  </html>