<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <main id="main">
        <br>
        <div style="margin-top: 5%; background-color: rgba(255,255,255,.8); border-radius: 20px 20px 20px 20px;" class="container">
    <!-- Tab panels -->
    <div class="py-5 tab-content">

        <!-- Panel 1 -->
        <div class="tab-pane fade in show active" id="panel555" role="tabpanel">
      
          <!-- Nav tabs -->
          <div class="row justify-content-center">
            <div class="col-md-5">
              <ul class="nav md-pills pills-primary flex-column" role="tablist">
                <!--<li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel12" role="tab">Traccia ordini
                    <i class="fa fa-truck ml-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">Fatture
                    <i class="fa fa-file-text ml-2"></i>
                  </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel32" role="tab">Abbonamento
                        <i class="fa fa-address-card ml-2"></i>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel42" role="tab">Offerte
                        <i class="fa fa-gift ml-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel52" role="tab">Resi e rimborsi
                    <i class="fa fa-share ml-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel62" role="tab">Cambia password
                        <i class="fa fa-lock ml-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel72" role="tab">Cambia immagine profilo
                        <i class="fa fa-camera ml-2"></i>
                    </a>
                </li>
              </ul>
            </div>

            <div class="col md-8 align-self-center justify-content-end">
              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Panel 1 -->
                <!--<div class="tab-pane fade in show active" id="panel12" role="tabpanel">
                  <h5 class="py-5 h5">Panel 1</h5>
                </div>-->

                <!-- Panel 2 -->
                <!--<div class="tab-pane fade" id="panel22" role="tabpanel">
                  <h5 class="py-5 h5">Panel 2</h5>
                </div>-->
                
                <!-- Panel 3 -->
                <div class="tab-pane fade in show active" id="panel32" role="tabpanel">
                    <h5 class="py-5 h5 h5" id="abbonamento">Il tuo piano attivo</h5>
                    <br>
                    <?php
                        $dbconn = pg_connect("host=localhost port=5432 dbname=DropItDatabase user=postgres password=postgres") or die('Could not connect: ' . pg_last_error());
                                
                        session_start();
                        $email = $_SESSION['userid'];
                        $q1="select subscription, subscriptionDate from myuser where email= $1";
                        $result=pg_query_params($dbconn, $q1, array($email));

                        if($result){
                            $line=pg_fetch_array($result,null,PGSQL_NUM);
                            echo "<h5>Tipologia: " . $line[0] . "<br><br>Data di attivazione: " . $line[1];// . "</h5>";
                            
                            $rinnovo = "";
                            $today = getdate();
                            //echo  date_format($today,"Y/m/d");
                            
                            // Anno, mese, giorno sottoscrizione
                            // substr(str, start, length)
                            $year = substr($line[1], 0, 4);
                            $month = substr($line[1], 6, 2);
                            $day = substr($line[1], 8);
                            
                            // Anno, mese, giorno attuali
                            $y = $today["year"];
                            $m = $today["mon"];
                            $d = $today["mday"];

                            // Se il giorno della sottoscrizione è inferiore al giorno attuale
                            if($day < $d) {
                                $rinnovo = $y . "-" . $m . "-" . $day;
                            }
                            
                            else {
                                if($m != "12")
                                    $rinnovo = $y . "-" . intval($m, 10)+1 . "-" . $day;
                                else
                                    $rinnovo = intval($y, 10)+1 . "-01-" . $day;
                            }

                            echo "<br><br>Prossimo rinnovo: " . $rinnovo . "</h5>";
                            

                        }

                        else    echo "Error";
                    ?>    
                </div>

                <!-- Panel 4 -->
                <div class="tab-pane fade" id="panel42" role="tabpanel">
                    <h5 class="py-5 h5 justify-content-center">Al momento non hai alcuna offerta disponibile</h5>
                </div>
                
                <!-- Panel 5 -->
                <div class="tab-pane fade" id="panel52" role="tabpanel">
                  <h5 class="py-5 h5">Non esitare a <a href="../index.html#contact">contattarci</a> se riscontri dei problemi
                    con i prodotti che hai ordinato. Tramite mail ti comunicheremo nel più
                    breve tempo possibile come agire secondo quanto indicato in 
                    <a href="privacy.html">Termini e condizioni</a>
                  </h5>
                </div>

                <!-- Panel 6 -->
                <div class="tab-pane fade" id="panel62" role="tabpanel">
                    <h5 class="py-5 h5">Vuoi cambiare password?</h5>

                        <form name="changePasswordForm" method="post"
                         onSubmit="validatePassword(); return false;">
    
                            <div class="row">
                              <div class="md-form mb-4">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" name="orangeForm-passReg" id="orangeForm-passReg" class="form-control validate"
                                     required pattern="(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{8,}"
                                     title="Deve contenere almeno 8 caratteri di cui almeno uno numerico e uno speciale">
                                    <label data-error="errore" data-success="corretto"
                                     for="orangeForm-passReg">Vecchia password</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="md-form mb-4">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" name="orangeForm-pass2Reg" id="orangeForm-pass2Reg" class="form-control validate"
                                 required pattern="(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{8,}"
                                 title="Deve contenere almeno 8 caratteri di cui almeno uno numerico e uno speciale"
                                 onClick="return resetField('orangeForm-pass3Reg', 'control-PasswordReg')">
                                <label data-error="errore" data-success="corretto"
                                 for="orangeForm-passReg">Nuova password</label>
                              </div>
                            </div>
            
                            <div class="row">
                              <div class="md-form mb-4">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass3Reg" class="form-control"
                                 required
                                 onClick="resetField('orangeForm-pass3Reg', 'control-PasswordReg')">
                                 <label data-error="errore" data-success="corretto"
                                  for="orangeForm-pass2Reg">
                                  Conferma Password</label>
                                 <span><h6 class="myFeedback" id="control-PasswordReg"></h6>
                                 </span>
                              </div>
                            </div>

                            <div class="justify-content-center">
                                <button type="submit" class="btn btn-primary">Invia</button>
                            </div>    
                        </form>
                </div>

                <!-- Panel 7 -->
                <div class="tab-pane fade" id="panel72" role="tabpanel">
                    <h5 class="py-5 h5">Vuoi cambiare immagine?</h5>

                    <form id="changeImageForm" name="changeImageForm" method="post" enctype="multipart/form-data" onsubmit="cambiaImmagine();return false;" >
                      <div class="md-form">
                        <div class="file-field">
                          <div class="btn btn-primary btn-sm float-left">
                            <span>Scegli un'immagine</span>
                            <input type="file" onchange="placeholderChangeImage();" name="changeImage" id="changeImage" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input id="seniorita" class="file-path validate" type="text" placeholder=" Carica immagine (solo .png, max 2 Mb)">
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="justify-content-center">
                        <button type="submit" class="btn btn-primary">Carica</button>
                      </div> 
                    </form>
                </div>

              </div>
            </div>
          </div>
          <!-- Nav tabs -->
      
        </div>
        <!-- Panel 1 -->
      
        <!-- Panel 2 -->
        <div class="tab-pane fade" id="panel666" role="tabpanel">
      
          <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
      
        </div>
        <!-- Panel 2 -->
      
    </div>
    <!-- Tab panels -->
  </div>
    </main>
</body>

</html>



